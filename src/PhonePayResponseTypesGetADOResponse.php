<?php

class PhonePayResponseTypesGetADOResponse
{

    /**
     * @var PhonePayResponseTypesGetADOResult $PhonePayResponseTypesGetADOResult
     */
    protected $PhonePayResponseTypesGetADOResult = null;

    /**
     * @param PhonePayResponseTypesGetADOResult $PhonePayResponseTypesGetADOResult
     */
    public function __construct($PhonePayResponseTypesGetADOResult)
    {
      $this->PhonePayResponseTypesGetADOResult = $PhonePayResponseTypesGetADOResult;
    }

    /**
     * @return PhonePayResponseTypesGetADOResult
     */
    public function getPhonePayResponseTypesGetADOResult()
    {
      return $this->PhonePayResponseTypesGetADOResult;
    }

    /**
     * @param PhonePayResponseTypesGetADOResult $PhonePayResponseTypesGetADOResult
     * @return PhonePayResponseTypesGetADOResponse
     */
    public function setPhonePayResponseTypesGetADOResult($PhonePayResponseTypesGetADOResult)
    {
      $this->PhonePayResponseTypesGetADOResult = $PhonePayResponseTypesGetADOResult;
      return $this;
    }

}
