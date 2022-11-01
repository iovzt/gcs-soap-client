<?php

class TransactionStatusSetXMLResponse
{

    /**
     * @var TransactionStatusSetXMLResult $TransactionStatusSetXMLResult
     */
    protected $TransactionStatusSetXMLResult = null;

    /**
     * @param TransactionStatusSetXMLResult $TransactionStatusSetXMLResult
     */
    public function __construct($TransactionStatusSetXMLResult)
    {
      $this->TransactionStatusSetXMLResult = $TransactionStatusSetXMLResult;
    }

    /**
     * @return TransactionStatusSetXMLResult
     */
    public function getTransactionStatusSetXMLResult()
    {
      return $this->TransactionStatusSetXMLResult;
    }

    /**
     * @param TransactionStatusSetXMLResult $TransactionStatusSetXMLResult
     * @return TransactionStatusSetXMLResponse
     */
    public function setTransactionStatusSetXMLResult($TransactionStatusSetXMLResult)
    {
      $this->TransactionStatusSetXMLResult = $TransactionStatusSetXMLResult;
      return $this;
    }

}
