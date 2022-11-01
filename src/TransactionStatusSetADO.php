<?php

class TransactionStatusSetADO
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
     * @var transactionADO $transactionADO
     */
    protected $transactionADO = null;

    /**
     * @param string $userName
     * @param string $password
     * @param transactionADO $transactionADO
     */
    public function __construct($userName, $password, $transactionADO)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->transactionADO = $transactionADO;
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
     * @return TransactionStatusSetADO
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
     * @return TransactionStatusSetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return transactionADO
     */
    public function getTransactionADO()
    {
      return $this->transactionADO;
    }

    /**
     * @param transactionADO $transactionADO
     * @return TransactionStatusSetADO
     */
    public function setTransactionADO($transactionADO)
    {
      $this->transactionADO = $transactionADO;
      return $this;
    }

}
