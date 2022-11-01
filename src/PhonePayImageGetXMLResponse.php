<?php

class PhonePayImageGetXMLResponse
{

    /**
     * @var PhonePayImageGetXMLResult $PhonePayImageGetXMLResult
     */
    protected $PhonePayImageGetXMLResult = null;

    /**
     * @param PhonePayImageGetXMLResult $PhonePayImageGetXMLResult
     */
    public function __construct($PhonePayImageGetXMLResult)
    {
      $this->PhonePayImageGetXMLResult = $PhonePayImageGetXMLResult;
    }

    /**
     * @return PhonePayImageGetXMLResult
     */
    public function getPhonePayImageGetXMLResult()
    {
      return $this->PhonePayImageGetXMLResult;
    }

    /**
     * @param PhonePayImageGetXMLResult $PhonePayImageGetXMLResult
     * @return PhonePayImageGetXMLResponse
     */
    public function setPhonePayImageGetXMLResult($PhonePayImageGetXMLResult)
    {
      $this->PhonePayImageGetXMLResult = $PhonePayImageGetXMLResult;
      return $this;
    }

}
