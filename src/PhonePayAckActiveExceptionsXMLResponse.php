<?php

class PhonePayAckActiveExceptionsXMLResponse
{

    /**
     * @var PhonePayAckActiveExceptionsXMLResult $PhonePayAckActiveExceptionsXMLResult
     */
    protected $PhonePayAckActiveExceptionsXMLResult = null;

    /**
     * @param PhonePayAckActiveExceptionsXMLResult $PhonePayAckActiveExceptionsXMLResult
     */
    public function __construct($PhonePayAckActiveExceptionsXMLResult)
    {
      $this->PhonePayAckActiveExceptionsXMLResult = $PhonePayAckActiveExceptionsXMLResult;
    }

    /**
     * @return PhonePayAckActiveExceptionsXMLResult
     */
    public function getPhonePayAckActiveExceptionsXMLResult()
    {
      return $this->PhonePayAckActiveExceptionsXMLResult;
    }

    /**
     * @param PhonePayAckActiveExceptionsXMLResult $PhonePayAckActiveExceptionsXMLResult
     * @return PhonePayAckActiveExceptionsXMLResponse
     */
    public function setPhonePayAckActiveExceptionsXMLResult($PhonePayAckActiveExceptionsXMLResult)
    {
      $this->PhonePayAckActiveExceptionsXMLResult = $PhonePayAckActiveExceptionsXMLResult;
      return $this;
    }

}
