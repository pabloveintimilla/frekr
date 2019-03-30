<?php

namespace PabloVeintimilla\Frekr;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use PabloVeintimilla\Frekr\Entity\Employee;
use PabloVeintimilla\Frekr\Entity\Event;
use PabloVeintimilla\Frekr\Entity\Terminal;

/**
 * Frekr wrapper.
 *
 * @author Pablo Veintimilla Vargas <pabloveintimilla@gmail.com>
 */
class Frekr
{
    /**
     * @var string Base url api
     */
    const API_URL = 'https://frekr.me/api/v1/';

    /**
     * Apikey to autentication.
     *
     * @var string
     */
    private $apiKey;

    /**
     * @var array
     */
    private $headers = [];

    /**
     * Guzzle client.
     *
     * @var Client
     */
    private $client;

    /**
     * @param string $apiKey
     */
    public function __construct($apiKey)
    {
        $this->client            = new Client(['base_uri' => self::API_URL]);
        $this->apiKey            = $apiKey;
        $this->headers['apikey'] = $apiKey;
        $this->headers['Accept'] = 'application/vnd.api+json';
    }

    /**
     * GET /api/v1/employees get employees of authenticated company.
     *
     * @param bool $working show only currently working employees
     *
     * @return Employee[]
     *
     * @throws RequestException
     */
    public function getEmployees(bool $working = true)
    {
        $response = $this->request('employees', ['working' => $working]);

        $employees = [];
        $contents  = \GuzzleHttp\json_decode($response->getBody()->getContents());

        foreach ($contents->data as $data) {
            $employees[] = $this->deserializeEmployee($data);
        }

        return $employees;
    }

    /**
     * GET /api/v1/employees/{id} get specified employee
     *
     * @param string $employee Employee id
     * @return Employee
     * @throws RequestException
     */
    public function getEmployee($employee) : Employee
    {
        $url      = "employees/$employee";
        $response = $this->request($url);

        $content = \GuzzleHttp\json_decode($response->getBody()->getContents());
        return $this->deserializeEmployee($content->data);
    }

    /**
     * GET /api/v1/events get events for specified month (default: current month).
     *
     * @param int $year  specify the month of events to get (only use together with year)
     * @param int $month specify the year of events to get (only use together with month)
     *
     * @return Event[]
     *
     * @throws RequestException
     */
    public function getEvents(int $year = null, int $month = null)
    {
        $query    = ($year && $month) ? [
            'year' => $year,
            'month' => $month,
            ] : [];
        $response = $this->request('events', $query);

        $events   = [];
        $contents = \GuzzleHttp\json_decode($response->getBody()->getContents());

        foreach ($contents->data as $data) {
            $events[] = $this->deserializeEvent($data);
        }

        return $events;
    }

    /**
     * GET /api/v1/events/{id} get specified event
     * 
     * @param string $event Event id
     * @return Event
     * @throws RequestException
     */
    public function getEvent($event) : Event
    {
        $url      = "events/$event";
        $response = $this->request($url);

        $content = \GuzzleHttp\json_decode($response->getBody()->getContents());
        return $this->deserializeEvent($content->data);
    }

    /**
     * GET /api/v1/employees/{id}/events get specified employee's events 
     * in specified month (default: current month).
     * 
     * @param string $employee Employee id
     * @param int    $year     specify the month of events to get (only use together with year)
     * @param int    $month    specify the year of events to get (only use together with month)
     * 
     * @return Event[];
     */
    public function getEventsByEmployee($employee, $year = null, $month = null)
    {
        $url = "employees/$employee/events";

        $query = ($year && $month) ? [
            'year' => $year,
            'month' => $month,
            ] : [];

        $response = $this->request($url, $query);

        $events   = [];
        $contents = \GuzzleHttp\json_decode($response->getBody()->getContents());

        foreach ($contents->data as $data) {
            $events[] = $this->deserializeEvent($data);
        }

        return $events;
    }

    /**
     * GET /api/v1/terminals get terminals of athenticated company
     * 
     * @return Terminal[]
     * @throws RequestException
     */
    public function getTerminals()
    {
        $response = $this->request('terminals');

        $terminals = [];
        $contents  = \GuzzleHttp\json_decode($response->getBody()->getContents());

        foreach ($contents->data as $data) {
            $terminals[] = $this->deserializeTerminal($data);
        }

        return $terminals;
    }

    /**
     * GET /api/v1/events/{id} get specified event
     *
     * @param string $terminal Event id
     * @return Terminal
     * @throws RequestException
     */
    public function getTerminal($terminal) : Terminal
    {
        $url      = "terminals/$terminal";
        $response = $this->request($url);

        $content = \GuzzleHttp\json_decode($response->getBody()->getContents());
        return $this->deserializeTerminal($content->data);
    }

    /**
     * GET /api/v1/terminal/{id}/events get specified terminals's events
     * in specified month (default: current month).
     *
     * @param string $terminal Terminal id
     * @param int    $year     specify the month of events to get (only use together with year)
     * @param int    $month    specify the year of events to get (only use together with month)
     *
     * @return Event[];
     */
    public function getEventsByTerminal($terminal, $year = null, $month = null)
    {
        $url      = "terminals/$terminal/events";
        $query    = ($year && $month) ? [
            'year' => $year,
            'month' => $month,
            ] : [];
        $response = $this->request($url, $query);

        $events   = [];
        $contents = \GuzzleHttp\json_decode($response->getBody()->getContents());

        foreach ($contents->data as $data) {
            $events[] = $this->deserializeEvent($data);
        }

        return $events;
    }

    /**
     * Deserialize json to Event object.
     *
     * @param \stdObject $data Json decode data.
     *
     * @return Event
     */
    private function deserializeEvent($data)
    {
        $employee = (new Employee())
            ->setId($data->relationships->employee->data->id);

        $terminal = new Terminal();
        if (property_exists($data->relationships, 'terminal')) {
            $terminal->setId($data->relationships->terminal->data->id);
        }
        $event = (new Event())
            ->setId($data->id)
            ->setComment($data->attributes->comment)
            ->setCreatedAt(new \DateTime($data->attributes->created_at))
            ->seModified($data->attributes->is_modified)
            ->setLatitude($data->attributes->latitude)
            ->setLongitude($data->attributes->longitude)
            ->setType($data->attributes->type)
            ->setWhat($data->attributes->what)
            ->setEmployee($employee)
            ->setTerminal($terminal);

        return $event;
    }

    /**
     * Deserialize json to Employee object.
     *
     * @param \stdObject $data Json decode data.
     *
     * @return Employee
     */
    private function deserializeEmployee($data)
    {
        $employee = (new Employee())
            ->setId($data->id)
            ->setAuthmethod($data->attributes->authmethod)
            ->setEmail($data->attributes->email)
            ->setFirstname($data->attributes->firstname)
            ->setLanguage($data->attributes->language)
            ->setLastname($data->attributes->lastname)
            ->setPhone_number($data->attributes->phone_number)
            ->setRole($data->attributes->role);
        return $employee;
    }

    /**
     * Deserialize json to Terminal object.
     *
     * @param \stdObject $data Json decode data.
     * @return Terminal
     */
    private function deserializeTerminal($data)
    {
        $leave_reasons = $data->attributes->leave_reasons ? $data->attributes->leave_reasons
                : [];
        $terminal      = (new Terminal())
            ->setId($data->id)
            ->setName($data->attributes->name)
            ->setTerminalType($data->attributes->terminal_type)
            ->setEnabled($data->attributes->enabled)
            ->setLeaveReasons($leave_reasons)
            ->setFirstLabel($data->attributes->first_label)
            ->setSecondLabel($data->attributes->second_label);

        return $terminal;
    }

    /**
     * Execute request to api
     * 
     * @param string $url
     * @param array $query
     * @return \GuzzleHttp\Psr7\Request
     * @throws RequestException
     */
    public function request($url, $query = [])
    {
        try {
            $response = $this->client->request('GET', $url,
                ['headers' => $this->headers,
                'query' => $query]);
        } catch (RequestException $ex) {
            throw $ex;
        }
        return $response;
    }
}