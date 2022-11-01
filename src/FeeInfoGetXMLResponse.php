<?php

class FeeInfoGetXMLResponse
{

    /**
     * @var FeeInfoGetXMLResult $FeeInfoGetXMLResult
     */
    protected $FeeInfoGetXMLResult = null;

    /**
     * @param FeeInfoGetXMLResult $FeeInfoGetXMLResult
     */
    public function __construct($FeeInfoGetXMLResult)
    {
      $this->FeeInfoGetXMLResult = $FeeInfoGetXMLResult;
    }

    /**
     * @return FeeInfoGetXMLResult
     */
    public function getFeeInfoGetXMLResult()
    {
      return $this->FeeInfoGetXMLResult;
    }

    /**
     * @param FeeInfoGetXMLResult $FeeInfoGetXMLResult
     * @return FeeInfoGetXMLResponse
     */
    public function setFeeInfoGetXMLResult($FeeInfoGetXMLResult)
    {
      $this->FeeInfoGetXMLResult = $FeeInfoGetXMLResult;
      return $this;
    }

}
