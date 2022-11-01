<?php

class PhonePayExceptionStatusGetADOResponse
{

    /**
     * @var PhonePayExceptionStatusGetADOResult $PhonePayExceptionStatusGetADOResult
     */
    protected $PhonePayExceptionStatusGetADOResult = null;

    /**
     * @param PhonePayExceptionStatusGetADOResult $PhonePayExceptionStatusGetADOResult
     */
    public function __construct($PhonePayExceptionStatusGetADOResult)
    {
      $this->PhonePayExceptionStatusGetADOResult = $PhonePayExceptionStatusGetADOResult;
    }

    /**
     * @return PhonePayExceptionStatusGetADOResult
     */
    public function getPhonePayExceptionStatusGetADOResult()
    {
      return $this->PhonePayExceptionStatusGetADOResult;
    }

    /**
     * @param PhonePayExceptionStatusGetADOResult $PhonePayExceptionStatusGetADOResult
     * @return PhonePayExceptionStatusGetADOResponse
     */
    public function setPhonePayExceptionStatusGetADOResult($PhonePayExceptionStatusGetADOResult)
    {
      $this->PhonePayExceptionStatusGetADOResult = $PhonePayExceptionStatusGetADOResult;
      return $this;
    }

}
