<?php

namespace PabloVeintimilla\Frekr;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use PabloVeintimilla\Frekr\Entity\Employee;
use PabloVeintimilla\Frekr\Entity\Event;
use PabloVeintimilla\Frekr\Entity\Terminal;

/**
 * Frekr wrapper
 *
 * @author Pablo Veintimilla Vargas <pabloveintimilla@gmail.com>
 */
class Frekr
{
    const API_URL = 'https://frekr.me/api/v1/';

    /**
     * Apikey to autentication
     * @var string
     */
    private $apiKey;

    /**
     * @var array
     */
    private $headers = [];

    /**
     * Guzzle client.
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
     * GET /api/v1/employees get employees of authenticated company
     * @param boolean $working 	show only currently working employees
     * @return Employee[]
     * @throws RequestException
     */
    public function getEmployees(bool $working = true)
    {
        try {
            $response = $this->client->request('GET', 'employees',
                ['headers' => $this->headers,
                'query' => ['working' => $working]]);
        } catch (RequestException $ex) {
            throw $ex;
        }

        $employees = [];
        $contents  = \GuzzleHttp\json_decode($response->getBody()->getContents());

        foreach ($contents->data as $data) {
            $employee    = (new Employee())
                ->setId($data->id)
                ->setAuthmethod($data->attributes->authmethod)
                ->setEmail($data->attributes->email)
                ->setFirstname($data->attributes->firstname)
                ->setLanguage($data->attributes->language)
                ->setLastname($data->attributes->lastname)
                ->setPhone_number($data->attributes->phone_number)
                ->setRole($data->attributes->role);
            $employees[] = $employee;
        }
        return $employees;
    }

    /**
     * GET /api/v1/events get events for specified month (default: current month)
     * @param integer $year specify the month of events to get (only use together with year)
     * @param integer $month specify the year of events to get (only use together with month)
     * @return Event[]
     * @throws RequestException
     */
    public function getEvents(int $year = null, int $month = null)
    {
        $query = ($year && $month) ? ['year' => $year, 'month' => $month] : [];
        try {
            $response = $this->client->request('GET', 'events',
                ['headers' => $this->headers,
                'query' => $query]);
        } catch (RequestException $ex) {
            throw $ex;
        }
        $events   = [];
        $contents = \GuzzleHttp\json_decode($response->getBody()->getContents());

        foreach ($contents->data as $data) {
            $employee = (new Employee())
                ->setId($data->relationships->employee->data->id);
            $terminal = (new Terminal());
            if ($data->relationships->terminal) {
                $terminal->setId($data->relationships->terminal->data->id);
            }

            $event    = (new Event())
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
            $events[] = $event;
        }
        return $events;
    }
}