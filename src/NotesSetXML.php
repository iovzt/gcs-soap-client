<?php

class NotesSetXML
{

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var noteNodeIn $noteNodeIn
     */
    protected $noteNodeIn = null;

    /**
     * @param string $userName
     * @param string $password
     * @param noteNodeIn $noteNodeIn
     */
    public function __construct($userName, $password, $noteNodeIn)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->noteNodeIn = $noteNodeIn;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->userName;
    }

    /**
     * @param string $userName
     * @return NotesSetXML
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return NotesSetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return noteNodeIn
     */
    public function getNoteNodeIn()
    {
      return $this->noteNodeIn;
    }

    /**
     * @param noteNodeIn $noteNodeIn
     * @return NotesSetXML
     */
    public function setNoteNodeIn($noteNodeIn)
    {
      $this->noteNodeIn = $noteNodeIn;
      return $this;
    }

}
