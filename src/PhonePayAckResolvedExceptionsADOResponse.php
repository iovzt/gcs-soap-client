<?php

class PhonePayAckResolvedExceptionsADOResponse
{

    /**
     * @var PhonePayAckResolvedExceptionsADOResult $PhonePayAckResolvedExceptionsADOResult
     */
    protected $PhonePayAckResolvedExceptionsADOResult = null;

    /**
     * @param PhonePayAckResolvedExceptionsADOResult $PhonePayAckResolvedExceptionsADOResult
     */
    public function __construct($PhonePayAckResolvedExceptionsADOResult)
    {
      $this->PhonePayAckResolvedExceptionsADOResult = $PhonePayAckResolvedExceptionsADOResult;
    }

    /**
     * @return PhonePayAckResolvedExceptionsADOResult
     */
    public function getPhonePayAckResolvedExceptionsADOResult()
    {
      return $this->PhonePayAckResolvedExceptionsADOResult;
    }

    /**
     * @param PhonePayAckResolvedExceptionsADOResult $PhonePayAckResolvedExceptionsADOResult
     * @return PhonePayAckResolvedExceptionsADOResponse
     */
    public function setPhonePayAckResolvedExceptionsADOResult($PhonePayAckResolvedExceptionsADOResult)
    {
      $this->PhonePayAckResolvedExceptionsADOResult = $PhonePayAckResolvedExceptionsADOResult;
      return $this;
    }

}
