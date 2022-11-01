<?php

class ClientTransferSetADO
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
     * @var string $fromAccountId
     */
    protected $fromAccountId = null;

    /**
     * @var string $toAccountId
     */
    protected $toAccountId = null;

    /**
     * @var float $transactionAmount
     */
    protected $transactionAmount = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $fromAccountId
     * @param string $toAccountId
     * @param float $transactionAmount
     * @param string $memo
     */
    public function __construct($userName, $password, $fromAccountId, $toAccountId, $transactionAmount, $memo)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->fromAccountId = $fromAccountId;
      $this->toAccountId = $toAccountId;
      $this->transactionAmount = $transactionAmount;
      $this->memo = $memo;
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
     * @return ClientTransferSetADO
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
     * @return ClientTransferSetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromAccountId()
    {
      return $this->fromAccountId;
    }

    /**
     * @param string $fromAccountId
     * @return ClientTransferSetADO
     */
    public function setFromAccountId($fromAccountId)
    {
      $this->fromAccountId = $fromAccountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getToAccountId()
    {
      return $this->toAccountId;
    }

    /**
     * @param string $toAccountId
     * @return ClientTransferSetADO
     */
    public function setToAccountId($toAccountId)
    {
      $this->toAccountId = $toAccountId;
      return $this;
    }

    /**
     * @return float
     */
    public function getTransactionAmount()
    {
      return $this->transactionAmount;
    }

    /**
     * @param float $transactionAmount
     * @return ClientTransferSetADO
     */
    public function setTransactionAmount($transactionAmount)
    {
      $this->transactionAmount = $transactionAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param string $memo
     * @return ClientTransferSetADO
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

}
