<?php

class PhonePayImageGetADOResponse
{

    /**
     * @var PhonePayImageGetADOResult $PhonePayImageGetADOResult
     */
    protected $PhonePayImageGetADOResult = null;

    /**
     * @param PhonePayImageGetADOResult $PhonePayImageGetADOResult
     */
    public function __construct($PhonePayImageGetADOResult)
    {
      $this->PhonePayImageGetADOResult = $PhonePayImageGetADOResult;
    }

    /**
     * @return PhonePayImageGetADOResult
     */
    public function getPhonePayImageGetADOResult()
    {
      return $this->PhonePayImageGetADOResult;
    }

    /**
     * @param PhonePayImageGetADOResult $PhonePayImageGetADOResult
     * @return PhonePayImageGetADOResponse
     */
    public function setPhonePayImageGetADOResult($PhonePayImageGetADOResult)
    {
      $this->PhonePayImageGetADOResult = $PhonePayImageGetADOResult;
      return $this;
    }

}
