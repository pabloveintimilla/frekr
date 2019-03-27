<?php

namespace PabloVeintimilla\Frekr;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use PabloVeintimilla\Frekr\Entity\Employee;

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
        $contents = \GuzzleHttp\json_decode($response->getBody()->getContents());

        foreach($contents->data as $data){
            $employee = (new Employee())
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
}