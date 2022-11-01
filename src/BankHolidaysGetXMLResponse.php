<?php

class BankHolidaysGetXMLResponse
{

    /**
     * @var BankHolidaysGetXMLResult $BankHolidaysGetXMLResult
     */
    protected $BankHolidaysGetXMLResult = null;

    /**
     * @param BankHolidaysGetXMLResult $BankHolidaysGetXMLResult
     */
    public function __construct($BankHolidaysGetXMLResult)
    {
      $this->BankHolidaysGetXMLResult = $BankHolidaysGetXMLResult;
    }

    /**
     * @return BankHolidaysGetXMLResult
     */
    public function getBankHolidaysGetXMLResult()
    {
      return $this->BankHolidaysGetXMLResult;
    }

    /**
     * @param BankHolidaysGetXMLResult $BankHolidaysGetXMLResult
     * @return BankHolidaysGetXMLResponse
     */
    public function setBankHolidaysGetXMLResult($BankHolidaysGetXMLResult)
    {
      $this->BankHolidaysGetXMLResult = $BankHolidaysGetXMLResult;
      return $this;
    }

}
