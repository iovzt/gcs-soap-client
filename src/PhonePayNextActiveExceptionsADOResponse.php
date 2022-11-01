<?php

class PhonePayNextActiveExceptionsADOResponse
{

    /**
     * @var PhonePayNextActiveExceptionsADOResult $PhonePayNextActiveExceptionsADOResult
     */
    protected $PhonePayNextActiveExceptionsADOResult = null;

    /**
     * @param PhonePayNextActiveExceptionsADOResult $PhonePayNextActiveExceptionsADOResult
     */
    public function __construct($PhonePayNextActiveExceptionsADOResult)
    {
      $this->PhonePayNextActiveExceptionsADOResult = $PhonePayNextActiveExceptionsADOResult;
    }

    /**
     * @return PhonePayNextActiveExceptionsADOResult
     */
    public function getPhonePayNextActiveExceptionsADOResult()
    {
      return $this->PhonePayNextActiveExceptionsADOResult;
    }

    /**
     * @param PhonePayNextActiveExceptionsADOResult $PhonePayNextActiveExceptionsADOResult
     * @return PhonePayNextActiveExceptionsADOResponse
     */
    public function setPhonePayNextActiveExceptionsADOResult($PhonePayNextActiveExceptionsADOResult)
    {
      $this->PhonePayNextActiveExceptionsADOResult = $PhonePayNextActiveExceptionsADOResult;
      return $this;
    }

}
