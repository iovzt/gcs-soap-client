<?php

class TransactionStatusSetXML
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
     * @var transactionsNodeIn $transactionsNodeIn
     */
    protected $transactionsNodeIn = null;

    /**
     * @param string $userName
     * @param string $password
     * @param transactionsNodeIn $transactionsNodeIn
     */
    public function __construct($userName, $password, $transactionsNodeIn)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->transactionsNodeIn = $transactionsNodeIn;
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
     * @return TransactionStatusSetXML
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
     * @return TransactionStatusSetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return transactionsNodeIn
     */
    public function getTransactionsNodeIn()
    {
      return $this->transactionsNodeIn;
    }

    /**
     * @param transactionsNodeIn $transactionsNodeIn
     * @return TransactionStatusSetXML
     */
    public function setTransactionsNodeIn($transactionsNodeIn)
    {
      $this->transactionsNodeIn = $transactionsNodeIn;
      return $this;
    }

}
