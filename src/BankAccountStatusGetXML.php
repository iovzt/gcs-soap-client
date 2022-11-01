<?php

class BankAccountStatusGetXML
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
     * @var string $routingNumber
     */
    protected $routingNumber = null;

    /**
     * @var string $accountNumber
     */
    protected $accountNumber = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $routingNumber
     * @param string $accountNumber
     */
    public function __construct($userName, $password, $routingNumber, $accountNumber)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->routingNumber = $routingNumber;
      $this->accountNumber = $accountNumber;
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
     * @return BankAccountStatusGetXML
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
     * @return BankAccountStatusGetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoutingNumber()
    {
      return $this->routingNumber;
    }

    /**
     * @param string $routingNumber
     * @return BankAccountStatusGetXML
     */
    public function setRoutingNumber($routingNumber)
    {
      $this->routingNumber = $routingNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return BankAccountStatusGetXML
     */
    public function setAccountNumber($accountNumber)
    {
      $this->accountNumber = $accountNumber;
      return $this;
    }

}
