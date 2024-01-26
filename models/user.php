<?php

class User
{
    private $id;
    private $name;
    private $surname;

    private $phone;

    private $country;

    private $birthday;

    private $gender;
    private $email;
    private $password;


    function __construct($id, $name, $surname, $phone, $country, $birthday, $gender, $email, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
        $this->country = $country;
        $this->birthday = $birthday;
        $this->gender = $gender;
        $this->email = $email;
        $this->password = $password;
    }


    function getId()
    {
        return $this->id;
    }
    function getName()
    {
        return $this->name;
    }
    function getSurname()
    {
        return $this->surname;
    }
    function getPhone()
    {
        return $this->phone;
    }
    function getCountry()
    {
        return $this->country;
    }
    function getBirthday()
    {
        return $this->birthday;
    }
    function getGender()
    {
        return $this->gender;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getPassword()
    {
        return $this->password;
    }
}

?>