<?php

class Comment
{
    private $id;
    private $text;
    private $userID;
    private $discussionID;

    function __construct($id, $text, $userID, $discussionID)
    {
        $this->id = $id;
        $this->text = $text;
        $this->userID = $userID;
        $this->discussionID = $discussionID;
    }

    function getId()
    {
        return $this->id;
    }

    function getText()
    {
        return $this->text;
    }

    function getUserID()
    {
        return $this->userID;
    }

    function getDiscussionID()
    {
        return $this->discussionID;
    }
}

?>