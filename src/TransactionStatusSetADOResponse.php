<?php

class TransactionStatusSetADOResponse
{

    /**
     * @var TransactionStatusSetADOResult $TransactionStatusSetADOResult
     */
    protected $TransactionStatusSetADOResult = null;

    /**
     * @param TransactionStatusSetADOResult $TransactionStatusSetADOResult
     */
    public function __construct($TransactionStatusSetADOResult)
    {
      $this->TransactionStatusSetADOResult = $TransactionStatusSetADOResult;
    }

    /**
     * @return TransactionStatusSetADOResult
     */
    public function getTransactionStatusSetADOResult()
    {
      return $this->TransactionStatusSetADOResult;
    }

    /**
     * @param TransactionStatusSetADOResult $TransactionStatusSetADOResult
     * @return TransactionStatusSetADOResponse
     */
    public function setTransactionStatusSetADOResult($TransactionStatusSetADOResult)
    {
      $this->TransactionStatusSetADOResult = $TransactionStatusSetADOResult;
      return $this;
    }

}
