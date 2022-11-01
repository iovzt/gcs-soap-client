<?php

class PhonePayResponseSetXMLResponse
{

    /**
     * @var PhonePayResponseSetXMLResult $PhonePayResponseSetXMLResult
     */
    protected $PhonePayResponseSetXMLResult = null;

    /**
     * @param PhonePayResponseSetXMLResult $PhonePayResponseSetXMLResult
     */
    public function __construct($PhonePayResponseSetXMLResult)
    {
      $this->PhonePayResponseSetXMLResult = $PhonePayResponseSetXMLResult;
    }

    /**
     * @return PhonePayResponseSetXMLResult
     */
    public function getPhonePayResponseSetXMLResult()
    {
      return $this->PhonePayResponseSetXMLResult;
    }

    /**
     * @param PhonePayResponseSetXMLResult $PhonePayResponseSetXMLResult
     * @return PhonePayResponseSetXMLResponse
     */
    public function setPhonePayResponseSetXMLResult($PhonePayResponseSetXMLResult)
    {
      $this->PhonePayResponseSetXMLResult = $PhonePayResponseSetXMLResult;
      return $this;
    }

}
