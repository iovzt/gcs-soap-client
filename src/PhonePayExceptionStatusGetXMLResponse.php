<?php

class PhonePayExceptionStatusGetXMLResponse
{

    /**
     * @var PhonePayExceptionStatusGetXMLResult $PhonePayExceptionStatusGetXMLResult
     */
    protected $PhonePayExceptionStatusGetXMLResult = null;

    /**
     * @param PhonePayExceptionStatusGetXMLResult $PhonePayExceptionStatusGetXMLResult
     */
    public function __construct($PhonePayExceptionStatusGetXMLResult)
    {
      $this->PhonePayExceptionStatusGetXMLResult = $PhonePayExceptionStatusGetXMLResult;
    }

    /**
     * @return PhonePayExceptionStatusGetXMLResult
     */
    public function getPhonePayExceptionStatusGetXMLResult()
    {
      return $this->PhonePayExceptionStatusGetXMLResult;
    }

    /**
     * @param PhonePayExceptionStatusGetXMLResult $PhonePayExceptionStatusGetXMLResult
     * @return PhonePayExceptionStatusGetXMLResponse
     */
    public function setPhonePayExceptionStatusGetXMLResult($PhonePayExceptionStatusGetXMLResult)
    {
      $this->PhonePayExceptionStatusGetXMLResult = $PhonePayExceptionStatusGetXMLResult;
      return $this;
    }

}
