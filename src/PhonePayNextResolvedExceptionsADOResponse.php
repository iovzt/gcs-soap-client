<?php

class PhonePayNextResolvedExceptionsADOResponse
{

    /**
     * @var PhonePayNextResolvedExceptionsADOResult $PhonePayNextResolvedExceptionsADOResult
     */
    protected $PhonePayNextResolvedExceptionsADOResult = null;

    /**
     * @param PhonePayNextResolvedExceptionsADOResult $PhonePayNextResolvedExceptionsADOResult
     */
    public function __construct($PhonePayNextResolvedExceptionsADOResult)
    {
      $this->PhonePayNextResolvedExceptionsADOResult = $PhonePayNextResolvedExceptionsADOResult;
    }

    /**
     * @return PhonePayNextResolvedExceptionsADOResult
     */
    public function getPhonePayNextResolvedExceptionsADOResult()
    {
      return $this->PhonePayNextResolvedExceptionsADOResult;
    }

    /**
     * @param PhonePayNextResolvedExceptionsADOResult $PhonePayNextResolvedExceptionsADOResult
     * @return PhonePayNextResolvedExceptionsADOResponse
     */
    public function setPhonePayNextResolvedExceptionsADOResult($PhonePayNextResolvedExceptionsADOResult)
    {
      $this->PhonePayNextResolvedExceptionsADOResult = $PhonePayNextResolvedExceptionsADOResult;
      return $this;
    }

}
