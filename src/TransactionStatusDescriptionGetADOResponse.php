<?php

class TransactionStatusDescriptionGetADOResponse
{

    /**
     * @var TransactionStatusDescriptionGetADOResult $TransactionStatusDescriptionGetADOResult
     */
    protected $TransactionStatusDescriptionGetADOResult = null;

    /**
     * @param TransactionStatusDescriptionGetADOResult $TransactionStatusDescriptionGetADOResult
     */
    public function __construct($TransactionStatusDescriptionGetADOResult)
    {
      $this->TransactionStatusDescriptionGetADOResult = $TransactionStatusDescriptionGetADOResult;
    }

    /**
     * @return TransactionStatusDescriptionGetADOResult
     */
    public function getTransactionStatusDescriptionGetADOResult()
    {
      return $this->TransactionStatusDescriptionGetADOResult;
    }

    /**
     * @param TransactionStatusDescriptionGetADOResult $TransactionStatusDescriptionGetADOResult
     * @return TransactionStatusDescriptionGetADOResponse
     */
    public function setTransactionStatusDescriptionGetADOResult($TransactionStatusDescriptionGetADOResult)
    {
      $this->TransactionStatusDescriptionGetADOResult = $TransactionStatusDescriptionGetADOResult;
      return $this;
    }

}
