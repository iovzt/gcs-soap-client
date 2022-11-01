<?php

class PhonePayAckResolvedExceptionsXMLResponse
{

    /**
     * @var PhonePayAckResolvedExceptionsXMLResult $PhonePayAckResolvedExceptionsXMLResult
     */
    protected $PhonePayAckResolvedExceptionsXMLResult = null;

    /**
     * @param PhonePayAckResolvedExceptionsXMLResult $PhonePayAckResolvedExceptionsXMLResult
     */
    public function __construct($PhonePayAckResolvedExceptionsXMLResult)
    {
      $this->PhonePayAckResolvedExceptionsXMLResult = $PhonePayAckResolvedExceptionsXMLResult;
    }

    /**
     * @return PhonePayAckResolvedExceptionsXMLResult
     */
    public function getPhonePayAckResolvedExceptionsXMLResult()
    {
      return $this->PhonePayAckResolvedExceptionsXMLResult;
    }

    /**
     * @param PhonePayAckResolvedExceptionsXMLResult $PhonePayAckResolvedExceptionsXMLResult
     * @return PhonePayAckResolvedExceptionsXMLResponse
     */
    public function setPhonePayAckResolvedExceptionsXMLResult($PhonePayAckResolvedExceptionsXMLResult)
    {
      $this->PhonePayAckResolvedExceptionsXMLResult = $PhonePayAckResolvedExceptionsXMLResult;
      return $this;
    }

}
