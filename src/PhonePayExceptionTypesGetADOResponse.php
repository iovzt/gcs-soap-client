<?php

class PhonePayExceptionTypesGetADOResponse
{

    /**
     * @var PhonePayExceptionTypesGetADOResult $PhonePayExceptionTypesGetADOResult
     */
    protected $PhonePayExceptionTypesGetADOResult = null;

    /**
     * @param PhonePayExceptionTypesGetADOResult $PhonePayExceptionTypesGetADOResult
     */
    public function __construct($PhonePayExceptionTypesGetADOResult)
    {
      $this->PhonePayExceptionTypesGetADOResult = $PhonePayExceptionTypesGetADOResult;
    }

    /**
     * @return PhonePayExceptionTypesGetADOResult
     */
    public function getPhonePayExceptionTypesGetADOResult()
    {
      return $this->PhonePayExceptionTypesGetADOResult;
    }

    /**
     * @param PhonePayExceptionTypesGetADOResult $PhonePayExceptionTypesGetADOResult
     * @return PhonePayExceptionTypesGetADOResponse
     */
    public function setPhonePayExceptionTypesGetADOResult($PhonePayExceptionTypesGetADOResult)
    {
      $this->PhonePayExceptionTypesGetADOResult = $PhonePayExceptionTypesGetADOResult;
      return $this;
    }

}
