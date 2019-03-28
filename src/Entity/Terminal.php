<?php

namespace PabloVeintimilla\Frekr\Entity;

/**
 * Points (Terminal) to register events.
 *
 * @author Pablo Veintimilla Vargas <pabloveintimilla@gmail.com>
 */
class Terminal
{
    /**
     * The 'id' field for the jsonapi resource, type is "Terminal".
     *
     * @var string
     */
    private $id;

    /**
     * 	attribute, terminal name.
     *
     * @var string
     */
    private $name;

    /**
     * Attribute, terminal type - "terminal" or "app".
     *
     * @var string
     */
    private $terminal_type;

    /**
     * Attribute, true if terminal is currently enabled.
     *
     * @var boolean
     */
    private $enabled;

    /**
     * Attribute, array of default leave reasons.
     *
     * @var string[}
     */
    private $leave_reasons = [];

    /**
     * Attribute 1.
     *
     * @var string
     */
    private $first_label;

    /**
     * Attribute 2.
     *
     * @var string
     */
    private $second_label;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getTerminalType()
    {
        return $this->terminal_type;
    }

    public function getEnabled()
    {
        return $this->enabled;
    }

    public function getLeaveReasons()
    {
        return $this->leave_reasons;
    }

    public function getFirstLabel()
    {
        return $this->first_label;
    }

    public function getSecondLabel()
    {
        return $this->second_label;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setTerminalType($terminal_type)
    {
        $this->terminal_type = $terminal_type;

        return $this;
    }

    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function setLeaveReasons(array $leave_reasons)
    {
        $this->leave_reasons = $leave_reasons;

        return $this;
    }

    public function setFirstLabel($first_label)
    {
        $this->first_label = $first_label;

        return $this;
    }

    public function setSecondLabel($second_label)
    {
        $this->second_label = $second_label;

        return $this;
    }
}
