<?php

class PhonePayExceptionTypesGetXMLResponse
{

    /**
     * @var PhonePayExceptionTypesGetXMLResult $PhonePayExceptionTypesGetXMLResult
     */
    protected $PhonePayExceptionTypesGetXMLResult = null;

    /**
     * @param PhonePayExceptionTypesGetXMLResult $PhonePayExceptionTypesGetXMLResult
     */
    public function __construct($PhonePayExceptionTypesGetXMLResult)
    {
      $this->PhonePayExceptionTypesGetXMLResult = $PhonePayExceptionTypesGetXMLResult;
    }

    /**
     * @return PhonePayExceptionTypesGetXMLResult
     */
    public function getPhonePayExceptionTypesGetXMLResult()
    {
      return $this->PhonePayExceptionTypesGetXMLResult;
    }

    /**
     * @param PhonePayExceptionTypesGetXMLResult $PhonePayExceptionTypesGetXMLResult
     * @return PhonePayExceptionTypesGetXMLResponse
     */
    public function setPhonePayExceptionTypesGetXMLResult($PhonePayExceptionTypesGetXMLResult)
    {
      $this->PhonePayExceptionTypesGetXMLResult = $PhonePayExceptionTypesGetXMLResult;
      return $this;
    }

}
