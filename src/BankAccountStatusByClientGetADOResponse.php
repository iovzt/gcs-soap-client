<?php

class BankAccountStatusByClientGetADOResponse
{

    /**
     * @var BankAccountStatusByClientGetADOResult $BankAccountStatusByClientGetADOResult
     */
    protected $BankAccountStatusByClientGetADOResult = null;

    /**
     * @param BankAccountStatusByClientGetADOResult $BankAccountStatusByClientGetADOResult
     */
    public function __construct($BankAccountStatusByClientGetADOResult)
    {
      $this->BankAccountStatusByClientGetADOResult = $BankAccountStatusByClientGetADOResult;
    }

    /**
     * @return BankAccountStatusByClientGetADOResult
     */
    public function getBankAccountStatusByClientGetADOResult()
    {
      return $this->BankAccountStatusByClientGetADOResult;
    }

    /**
     * @param BankAccountStatusByClientGetADOResult $BankAccountStatusByClientGetADOResult
     * @return BankAccountStatusByClientGetADOResponse
     */
    public function setBankAccountStatusByClientGetADOResult($BankAccountStatusByClientGetADOResult)
    {
      $this->BankAccountStatusByClientGetADOResult = $BankAccountStatusByClientGetADOResult;
      return $this;
    }

}
