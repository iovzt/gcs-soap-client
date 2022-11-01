<?php

class BankAccountStatusByClientGetXMLResponse
{

    /**
     * @var BankAccountStatusByClientGetXMLResult $BankAccountStatusByClientGetXMLResult
     */
    protected $BankAccountStatusByClientGetXMLResult = null;

    /**
     * @param BankAccountStatusByClientGetXMLResult $BankAccountStatusByClientGetXMLResult
     */
    public function __construct($BankAccountStatusByClientGetXMLResult)
    {
      $this->BankAccountStatusByClientGetXMLResult = $BankAccountStatusByClientGetXMLResult;
    }

    /**
     * @return BankAccountStatusByClientGetXMLResult
     */
    public function getBankAccountStatusByClientGetXMLResult()
    {
      return $this->BankAccountStatusByClientGetXMLResult;
    }

    /**
     * @param BankAccountStatusByClientGetXMLResult $BankAccountStatusByClientGetXMLResult
     * @return BankAccountStatusByClientGetXMLResponse
     */
    public function setBankAccountStatusByClientGetXMLResult($BankAccountStatusByClientGetXMLResult)
    {
      $this->BankAccountStatusByClientGetXMLResult = $BankAccountStatusByClientGetXMLResult;
      return $this;
    }

}
