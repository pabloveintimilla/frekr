[![Coding Standards](https://img.shields.io/badge/cs-PSR--2--R-yellow.svg)](https://github.com/php-fig-rectified/fig-rectified-standards)

# Frekr

> API wrapper of Frekr.me

## Introduction

> This is a PHP Library data from Frekr.me api and convert to php objects.

## Installation

> composer require pabloveintimilla/frekr

## Use

### Bootstrap. 

This should be include to autoload classes

```php
<?php
require __DIR__.'/vendor/autoload.php';

use PabloVeintimilla\Frekr\Frekr;
```

### Init

You need apikey from Frekr.me

```php
$frekr = new Frekr($apikey);
```

### Calls to methods

All methods return a array or a POPO  (Plain Old PHP object) that represent
basic entities: Employee, Event and Terminal

```php
// Recive all employees
$employees = $frekr->getEmployees();

//Recive specific employee by id
$employee = $frekr->getEmployee($employee_id);

//Get first name of employee
$employee->getFirstname();

$events = $frekr->getEvents();
$event = $frekr->getEvent($event_id);
$events = $frekr->getEventsByEmployee($employee_id));
$events = $frekr->getEventsByTerminal($terminal_id);
$terminals = $frekr->getTerminals();
$terminal = $frekr->getTerminal($terminal_id));
```
