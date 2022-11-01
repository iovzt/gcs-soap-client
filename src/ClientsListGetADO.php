<?php

class ClientsListGetADO
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
     * @var string $accountID
     */
    protected $accountID = null;

    /**
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $clientID
     */
    protected $clientID = null;

    /**
     * @var string $socSecNum
     */
    protected $socSecNum = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $accountID
     * @param string $lastName
     * @param string $clientID
     * @param string $socSecNum
     */
    public function __construct($userName, $password, $accountID, $lastName, $clientID, $socSecNum)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->accountID = $accountID;
      $this->lastName = $lastName;
      $this->clientID = $clientID;
      $this->socSecNum = $socSecNum;
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
     * @return ClientsListGetADO
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
     * @return ClientsListGetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountID()
    {
      return $this->accountID;
    }

    /**
     * @param string $accountID
     * @return ClientsListGetADO
     */
    public function setAccountID($accountID)
    {
      $this->accountID = $accountID;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return ClientsListGetADO
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientID()
    {
      return $this->clientID;
    }

    /**
     * @param string $clientID
     * @return ClientsListGetADO
     */
    public function setClientID($clientID)
    {
      $this->clientID = $clientID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSocSecNum()
    {
      return $this->socSecNum;
    }

    /**
     * @param string $socSecNum
     * @return ClientsListGetADO
     */
    public function setSocSecNum($socSecNum)
    {
      $this->socSecNum = $socSecNum;
      return $this;
    }

}
