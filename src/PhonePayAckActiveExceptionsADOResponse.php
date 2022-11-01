<?php

class PhonePayAckActiveExceptionsADOResponse
{

    /**
     * @var PhonePayAckActiveExceptionsADOResult $PhonePayAckActiveExceptionsADOResult
     */
    protected $PhonePayAckActiveExceptionsADOResult = null;

    /**
     * @param PhonePayAckActiveExceptionsADOResult $PhonePayAckActiveExceptionsADOResult
     */
    public function __construct($PhonePayAckActiveExceptionsADOResult)
    {
      $this->PhonePayAckActiveExceptionsADOResult = $PhonePayAckActiveExceptionsADOResult;
    }

    /**
     * @return PhonePayAckActiveExceptionsADOResult
     */
    public function getPhonePayAckActiveExceptionsADOResult()
    {
      return $this->PhonePayAckActiveExceptionsADOResult;
    }

    /**
     * @param PhonePayAckActiveExceptionsADOResult $PhonePayAckActiveExceptionsADOResult
     * @return PhonePayAckActiveExceptionsADOResponse
     */
    public function setPhonePayAckActiveExceptionsADOResult($PhonePayAckActiveExceptionsADOResult)
    {
      $this->PhonePayAckActiveExceptionsADOResult = $PhonePayAckActiveExceptionsADOResult;
      return $this;
    }

}
