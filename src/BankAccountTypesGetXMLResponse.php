<?php

class BankAccountTypesGetXMLResponse
{

    /**
     * @var BankAccountTypesGetXMLResult $BankAccountTypesGetXMLResult
     */
    protected $BankAccountTypesGetXMLResult = null;

    /**
     * @param BankAccountTypesGetXMLResult $BankAccountTypesGetXMLResult
     */
    public function __construct($BankAccountTypesGetXMLResult)
    {
      $this->BankAccountTypesGetXMLResult = $BankAccountTypesGetXMLResult;
    }

    /**
     * @return BankAccountTypesGetXMLResult
     */
    public function getBankAccountTypesGetXMLResult()
    {
      return $this->BankAccountTypesGetXMLResult;
    }

    /**
     * @param BankAccountTypesGetXMLResult $BankAccountTypesGetXMLResult
     * @return BankAccountTypesGetXMLResponse
     */
    public function setBankAccountTypesGetXMLResult($BankAccountTypesGetXMLResult)
    {
      $this->BankAccountTypesGetXMLResult = $BankAccountTypesGetXMLResult;
      return $this;
    }

}
