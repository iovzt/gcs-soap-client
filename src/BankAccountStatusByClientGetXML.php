<?php

class BankAccountStatusByClientGetXML
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
     * @var string $clientId
     */
    protected $clientId = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $clientId
     */
    public function __construct($userName, $password, $clientId)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->clientId = $clientId;
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
     * @return BankAccountStatusByClientGetXML
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
     * @return BankAccountStatusByClientGetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
      return $this->clientId;
    }

    /**
     * @param string $clientId
     * @return BankAccountStatusByClientGetXML
     */
    public function setClientId($clientId)
    {
      $this->clientId = $clientId;
      return $this;
    }

}
