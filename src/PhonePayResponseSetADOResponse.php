<?php

class PhonePayResponseSetADOResponse
{

    /**
     * @var PhonePayResponseSetADOResult $PhonePayResponseSetADOResult
     */
    protected $PhonePayResponseSetADOResult = null;

    /**
     * @param PhonePayResponseSetADOResult $PhonePayResponseSetADOResult
     */
    public function __construct($PhonePayResponseSetADOResult)
    {
      $this->PhonePayResponseSetADOResult = $PhonePayResponseSetADOResult;
    }

    /**
     * @return PhonePayResponseSetADOResult
     */
    public function getPhonePayResponseSetADOResult()
    {
      return $this->PhonePayResponseSetADOResult;
    }

    /**
     * @param PhonePayResponseSetADOResult $PhonePayResponseSetADOResult
     * @return PhonePayResponseSetADOResponse
     */
    public function setPhonePayResponseSetADOResult($PhonePayResponseSetADOResult)
    {
      $this->PhonePayResponseSetADOResult = $PhonePayResponseSetADOResult;
      return $this;
    }

}
