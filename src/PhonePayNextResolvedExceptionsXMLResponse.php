<?php

class PhonePayNextResolvedExceptionsXMLResponse
{

    /**
     * @var PhonePayNextResolvedExceptionsXMLResult $PhonePayNextResolvedExceptionsXMLResult
     */
    protected $PhonePayNextResolvedExceptionsXMLResult = null;

    /**
     * @param PhonePayNextResolvedExceptionsXMLResult $PhonePayNextResolvedExceptionsXMLResult
     */
    public function __construct($PhonePayNextResolvedExceptionsXMLResult)
    {
      $this->PhonePayNextResolvedExceptionsXMLResult = $PhonePayNextResolvedExceptionsXMLResult;
    }

    /**
     * @return PhonePayNextResolvedExceptionsXMLResult
     */
    public function getPhonePayNextResolvedExceptionsXMLResult()
    {
      return $this->PhonePayNextResolvedExceptionsXMLResult;
    }

    /**
     * @param PhonePayNextResolvedExceptionsXMLResult $PhonePayNextResolvedExceptionsXMLResult
     * @return PhonePayNextResolvedExceptionsXMLResponse
     */
    public function setPhonePayNextResolvedExceptionsXMLResult($PhonePayNextResolvedExceptionsXMLResult)
    {
      $this->PhonePayNextResolvedExceptionsXMLResult = $PhonePayNextResolvedExceptionsXMLResult;
      return $this;
    }

}
