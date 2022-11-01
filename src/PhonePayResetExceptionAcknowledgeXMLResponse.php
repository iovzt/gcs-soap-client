<?php

class PhonePayResetExceptionAcknowledgeXMLResponse
{

    /**
     * @var PhonePayResetExceptionAcknowledgeXMLResult $PhonePayResetExceptionAcknowledgeXMLResult
     */
    protected $PhonePayResetExceptionAcknowledgeXMLResult = null;

    /**
     * @param PhonePayResetExceptionAcknowledgeXMLResult $PhonePayResetExceptionAcknowledgeXMLResult
     */
    public function __construct($PhonePayResetExceptionAcknowledgeXMLResult)
    {
      $this->PhonePayResetExceptionAcknowledgeXMLResult = $PhonePayResetExceptionAcknowledgeXMLResult;
    }

    /**
     * @return PhonePayResetExceptionAcknowledgeXMLResult
     */
    public function getPhonePayResetExceptionAcknowledgeXMLResult()
    {
      return $this->PhonePayResetExceptionAcknowledgeXMLResult;
    }

    /**
     * @param PhonePayResetExceptionAcknowledgeXMLResult $PhonePayResetExceptionAcknowledgeXMLResult
     * @return PhonePayResetExceptionAcknowledgeXMLResponse
     */
    public function setPhonePayResetExceptionAcknowledgeXMLResult($PhonePayResetExceptionAcknowledgeXMLResult)
    {
      $this->PhonePayResetExceptionAcknowledgeXMLResult = $PhonePayResetExceptionAcknowledgeXMLResult;
      return $this;
    }

}
