<?php

class TransactionStatusDescriptionGetXMLResponse
{

    /**
     * @var TransactionStatusDescriptionGetXMLResult $TransactionStatusDescriptionGetXMLResult
     */
    protected $TransactionStatusDescriptionGetXMLResult = null;

    /**
     * @param TransactionStatusDescriptionGetXMLResult $TransactionStatusDescriptionGetXMLResult
     */
    public function __construct($TransactionStatusDescriptionGetXMLResult)
    {
      $this->TransactionStatusDescriptionGetXMLResult = $TransactionStatusDescriptionGetXMLResult;
    }

    /**
     * @return TransactionStatusDescriptionGetXMLResult
     */
    public function getTransactionStatusDescriptionGetXMLResult()
    {
      return $this->TransactionStatusDescriptionGetXMLResult;
    }

    /**
     * @param TransactionStatusDescriptionGetXMLResult $TransactionStatusDescriptionGetXMLResult
     * @return TransactionStatusDescriptionGetXMLResponse
     */
    public function setTransactionStatusDescriptionGetXMLResult($TransactionStatusDescriptionGetXMLResult)
    {
      $this->TransactionStatusDescriptionGetXMLResult = $TransactionStatusDescriptionGetXMLResult;
      return $this;
    }

}
