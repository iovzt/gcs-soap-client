<?php

class PhonePayResponseTypesGetXMLResponse
{

    /**
     * @var PhonePayResponseTypesGetXMLResult $PhonePayResponseTypesGetXMLResult
     */
    protected $PhonePayResponseTypesGetXMLResult = null;

    /**
     * @param PhonePayResponseTypesGetXMLResult $PhonePayResponseTypesGetXMLResult
     */
    public function __construct($PhonePayResponseTypesGetXMLResult)
    {
      $this->PhonePayResponseTypesGetXMLResult = $PhonePayResponseTypesGetXMLResult;
    }

    /**
     * @return PhonePayResponseTypesGetXMLResult
     */
    public function getPhonePayResponseTypesGetXMLResult()
    {
      return $this->PhonePayResponseTypesGetXMLResult;
    }

    /**
     * @param PhonePayResponseTypesGetXMLResult $PhonePayResponseTypesGetXMLResult
     * @return PhonePayResponseTypesGetXMLResponse
     */
    public function setPhonePayResponseTypesGetXMLResult($PhonePayResponseTypesGetXMLResult)
    {
      $this->PhonePayResponseTypesGetXMLResult = $PhonePayResponseTypesGetXMLResult;
      return $this;
    }

}
