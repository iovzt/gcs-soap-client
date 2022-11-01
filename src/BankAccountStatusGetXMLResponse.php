<?php

class BankAccountStatusGetXMLResponse
{

    /**
     * @var BankAccountStatusGetXMLResult $BankAccountStatusGetXMLResult
     */
    protected $BankAccountStatusGetXMLResult = null;

    /**
     * @param BankAccountStatusGetXMLResult $BankAccountStatusGetXMLResult
     */
    public function __construct($BankAccountStatusGetXMLResult)
    {
      $this->BankAccountStatusGetXMLResult = $BankAccountStatusGetXMLResult;
    }

    /**
     * @return BankAccountStatusGetXMLResult
     */
    public function getBankAccountStatusGetXMLResult()
    {
      return $this->BankAccountStatusGetXMLResult;
    }

    /**
     * @param BankAccountStatusGetXMLResult $BankAccountStatusGetXMLResult
     * @return BankAccountStatusGetXMLResponse
     */
    public function setBankAccountStatusGetXMLResult($BankAccountStatusGetXMLResult)
    {
      $this->BankAccountStatusGetXMLResult = $BankAccountStatusGetXMLResult;
      return $this;
    }

}
