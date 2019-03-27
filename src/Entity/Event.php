<?php

namespace PabloVeintimilla\Frekr\Entity;

/**
 * Events of employees
 *
 * @author Pablo Veintimilla Vargas <pabloveintimilla@gmail.com>
 */
class Event
{
    /**
     * The 'id' field for the jsonapi resource, type is "Event"
     * @var string
     */
    private $id;

    /**
     * Attribute, "start"/"stop"
     * @var string
     */
    private $what;

    /**
     * Attribute, type of event - "attendance" or "task" for task events
     * @var string
     */
    private $type;

    /**
     * jsonapi related resource, employee to whom the event belongs
     * (if any related resource is null, it is present as attribute with null value)
     * @var Employee
     */
    private $employee;

    /**
     * jsonapi related resource, terminal where the event was created
     * @var Terminal
     */
    private $terminal;

    /**
     * attribute, time and date of event in ISO-8601 format
     * @var \DateTime
     */
    private $created_at;

    /**
     * Attribute, not mandatory
     * @var string
     */
    private $comment;

    /**
     * Attribute, true if event was modified by administrator/manage
     * @var boolean
     */
    private $is_modified;

    /**
     * Attribute, not mandatory
     * @var double
     */
    private $latitude;

    /**
     * Attribute, not mandatory
     * @var double
     */
    private $longitude;

    public function getId()
    {
        return $this->id;
    }

    public function getWhat()
    {
        return $this->what;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getEmployee(): Employee
    {
        return $this->employee;
    }

    public function getTerminal(): Terminal
    {
        return $this->terminal;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->created_at;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function isModified()
    {
        return $this->is_modified;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setWhat($what)
    {
        $this->what = $what;
        return $this;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function setEmployee(Employee $employee)
    {
        $this->employee = $employee;
        return $this;
    }

    public function setTerminal(Terminal $terminal)
    {
        $this->terminal = $terminal;
        return $this;
    }

    public function setCreatedAt(\DateTime $created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    public function seModified($is_modified)
    {
        $this->is_modified = $is_modified;
        return $this;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }
}