<?php

namespace PabloVeintimilla\Frekr\Entity;

/**
 * Employees registered.
 *
 * @author Pablo Veintimilla Vargas <pabloveintimilla@gmail.com>
 */
class Employee
{
    /**
     * The 'id' field for the jsonapi resource, type is "Employee".
     *
     * @var string
     */
    private $id;

    /**
     * Attribute, first name.
     *
     * @var string
     */
    private $firstname;

    /**
     * Attribute, last name.
     *
     * @var string
     */
    private $lastname;

    /**
     * Attribute, role (ROLE_COMPANY_ADMIN/MANAGER/EMPLOYEE).
     *
     * @var string
     */
    private $role;

    /**
     * Attribute, authentication method (nfc, qr_code, pin).
     *
     * @var string
     */
    private $authmethod;

    /**
     * Attribute, default language (not mandatory).
     *
     * @var string
     */
    private $language;

    /**
     * Attribute, not mandatory.
     *
     * @var string
     */
    private $phone_number;

    /**
     * Attribute, not mandatory.
     *
     * @var string
     */
    private $email;

    public function getId()
    {
        return $this->id;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getAuthmethod()
    {
        return $this->authmethod;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getPhone_number()
    {
        return $this->phone_number;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    public function setAuthmethod($authmethod)
    {
        $this->authmethod = $authmethod;

        return $this;
    }

    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    public function setPhone_number($phone_number)
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
