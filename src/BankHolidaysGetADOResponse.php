<?php

class BankHolidaysGetADOResponse
{

    /**
     * @var BankHolidaysGetADOResult $BankHolidaysGetADOResult
     */
    protected $BankHolidaysGetADOResult = null;

    /**
     * @param BankHolidaysGetADOResult $BankHolidaysGetADOResult
     */
    public function __construct($BankHolidaysGetADOResult)
    {
      $this->BankHolidaysGetADOResult = $BankHolidaysGetADOResult;
    }

    /**
     * @return BankHolidaysGetADOResult
     */
    public function getBankHolidaysGetADOResult()
    {
      return $this->BankHolidaysGetADOResult;
    }

    /**
     * @param BankHolidaysGetADOResult $BankHolidaysGetADOResult
     * @return BankHolidaysGetADOResponse
     */
    public function setBankHolidaysGetADOResult($BankHolidaysGetADOResult)
    {
      $this->BankHolidaysGetADOResult = $BankHolidaysGetADOResult;
      return $this;
    }

}
