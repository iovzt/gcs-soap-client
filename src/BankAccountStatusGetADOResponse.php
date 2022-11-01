<?php

class BankAccountStatusGetADOResponse
{

    /**
     * @var BankAccountStatusGetADOResult $BankAccountStatusGetADOResult
     */
    protected $BankAccountStatusGetADOResult = null;

    /**
     * @param BankAccountStatusGetADOResult $BankAccountStatusGetADOResult
     */
    public function __construct($BankAccountStatusGetADOResult)
    {
      $this->BankAccountStatusGetADOResult = $BankAccountStatusGetADOResult;
    }

    /**
     * @return BankAccountStatusGetADOResult
     */
    public function getBankAccountStatusGetADOResult()
    {
      return $this->BankAccountStatusGetADOResult;
    }

    /**
     * @param BankAccountStatusGetADOResult $BankAccountStatusGetADOResult
     * @return BankAccountStatusGetADOResponse
     */
    public function setBankAccountStatusGetADOResult($BankAccountStatusGetADOResult)
    {
      $this->BankAccountStatusGetADOResult = $BankAccountStatusGetADOResult;
      return $this;
    }

}
