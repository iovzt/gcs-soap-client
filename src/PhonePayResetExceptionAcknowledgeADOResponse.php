<?php

class PhonePayResetExceptionAcknowledgeADOResponse
{

    /**
     * @var PhonePayResetExceptionAcknowledgeADOResult $PhonePayResetExceptionAcknowledgeADOResult
     */
    protected $PhonePayResetExceptionAcknowledgeADOResult = null;

    /**
     * @param PhonePayResetExceptionAcknowledgeADOResult $PhonePayResetExceptionAcknowledgeADOResult
     */
    public function __construct($PhonePayResetExceptionAcknowledgeADOResult)
    {
      $this->PhonePayResetExceptionAcknowledgeADOResult = $PhonePayResetExceptionAcknowledgeADOResult;
    }

    /**
     * @return PhonePayResetExceptionAcknowledgeADOResult
     */
    public function getPhonePayResetExceptionAcknowledgeADOResult()
    {
      return $this->PhonePayResetExceptionAcknowledgeADOResult;
    }

    /**
     * @param PhonePayResetExceptionAcknowledgeADOResult $PhonePayResetExceptionAcknowledgeADOResult
     * @return PhonePayResetExceptionAcknowledgeADOResponse
     */
    public function setPhonePayResetExceptionAcknowledgeADOResult($PhonePayResetExceptionAcknowledgeADOResult)
    {
      $this->PhonePayResetExceptionAcknowledgeADOResult = $PhonePayResetExceptionAcknowledgeADOResult;
      return $this;
    }

}
