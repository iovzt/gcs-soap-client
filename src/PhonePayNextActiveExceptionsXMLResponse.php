<?php

class PhonePayNextActiveExceptionsXMLResponse
{

    /**
     * @var PhonePayNextActiveExceptionsXMLResult $PhonePayNextActiveExceptionsXMLResult
     */
    protected $PhonePayNextActiveExceptionsXMLResult = null;

    /**
     * @param PhonePayNextActiveExceptionsXMLResult $PhonePayNextActiveExceptionsXMLResult
     */
    public function __construct($PhonePayNextActiveExceptionsXMLResult)
    {
      $this->PhonePayNextActiveExceptionsXMLResult = $PhonePayNextActiveExceptionsXMLResult;
    }

    /**
     * @return PhonePayNextActiveExceptionsXMLResult
     */
    public function getPhonePayNextActiveExceptionsXMLResult()
    {
      return $this->PhonePayNextActiveExceptionsXMLResult;
    }

    /**
     * @param PhonePayNextActiveExceptionsXMLResult $PhonePayNextActiveExceptionsXMLResult
     * @return PhonePayNextActiveExceptionsXMLResponse
     */
    public function setPhonePayNextActiveExceptionsXMLResult($PhonePayNextActiveExceptionsXMLResult)
    {
      $this->PhonePayNextActiveExceptionsXMLResult = $PhonePayNextActiveExceptionsXMLResult;
      return $this;
    }

}
