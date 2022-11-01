<?php

class NotesSetADO
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
     * @var notesDataADO $notesDataADO
     */
    protected $notesDataADO = null;

    /**
     * @param string $userName
     * @param string $password
     * @param notesDataADO $notesDataADO
     */
    public function __construct($userName, $password, $notesDataADO)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->notesDataADO = $notesDataADO;
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
     * @return NotesSetADO
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
     * @return NotesSetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return notesDataADO
     */
    public function getNotesDataADO()
    {
      return $this->notesDataADO;
    }

    /**
     * @param notesDataADO $notesDataADO
     * @return NotesSetADO
     */
    public function setNotesDataADO($notesDataADO)
    {
      $this->notesDataADO = $notesDataADO;
      return $this;
    }

}
