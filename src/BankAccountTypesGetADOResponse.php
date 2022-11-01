<?php

class BankAccountTypesGetADOResponse
{

    /**
     * @var BankAccountTypesGetADOResult $BankAccountTypesGetADOResult
     */
    protected $BankAccountTypesGetADOResult = null;

    /**
     * @param BankAccountTypesGetADOResult $BankAccountTypesGetADOResult
     */
    public function __construct($BankAccountTypesGetADOResult)
    {
      $this->BankAccountTypesGetADOResult = $BankAccountTypesGetADOResult;
    }

    /**
     * @return BankAccountTypesGetADOResult
     */
    public function getBankAccountTypesGetADOResult()
    {
      return $this->BankAccountTypesGetADOResult;
    }

    /**
     * @param BankAccountTypesGetADOResult $BankAccountTypesGetADOResult
     * @return BankAccountTypesGetADOResponse
     */
    public function setBankAccountTypesGetADOResult($BankAccountTypesGetADOResult)
    {
      $this->BankAccountTypesGetADOResult = $BankAccountTypesGetADOResult;
      return $this;
    }

}
