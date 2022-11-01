<?php

class NextAccountGetXML
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
     * @var int $numAccountsToGet
     */
    protected $numAccountsToGet = null;

    /**
     * @var int $numAccountsRemaining
     */
    protected $numAccountsRemaining = null;

    /**
     * @param string $userName
     * @param string $password
     * @param int $numAccountsToGet
     * @param int $numAccountsRemaining
     */
    public function __construct($userName, $password, $numAccountsToGet, $numAccountsRemaining)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->numAccountsToGet = $numAccountsToGet;
      $this->numAccountsRemaining = $numAccountsRemaining;
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
     * @return NextAccountGetXML
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
     * @return NextAccountGetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumAccountsToGet()
    {
      return $this->numAccountsToGet;
    }

    /**
     * @param int $numAccountsToGet
     * @return NextAccountGetXML
     */
    public function setNumAccountsToGet($numAccountsToGet)
    {
      $this->numAccountsToGet = $numAccountsToGet;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumAccountsRemaining()
    {
      return $this->numAccountsRemaining;
    }

    /**
     * @param int $numAccountsRemaining
     * @return NextAccountGetXML
     */
    public function setNumAccountsRemaining($numAccountsRemaining)
    {
      $this->numAccountsRemaining = $numAccountsRemaining;
      return $this;
    }

}
