<?php

class Discussion
{
    private $id;
    private $header;
    private $text;
    private $type;

    private $UserID;


    function __construct($id, $header, $text, $type, $userID)
    {
        $this->id = $id;
        $this->header = $header;
        $this->text = $text;
        $this->type = $type;
        $this->UserID = $userID;

    }


    function getId()
    {
        return $this->id;
    }
    function getHeader()
    {
        return $this->header;
    }

    function getText()
    {
        return $this->text;
    }
    function getType()
    {
        return $this->type;
    }
    function getUserID()
    {
        return $this->UserID;
    }
}

?>