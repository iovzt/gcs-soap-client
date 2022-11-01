<?php

class FeeInfoGetADOResponse
{

    /**
     * @var FeeInfoGetADOResult $FeeInfoGetADOResult
     */
    protected $FeeInfoGetADOResult = null;

    /**
     * @param FeeInfoGetADOResult $FeeInfoGetADOResult
     */
    public function __construct($FeeInfoGetADOResult)
    {
      $this->FeeInfoGetADOResult = $FeeInfoGetADOResult;
    }

    /**
     * @return FeeInfoGetADOResult
     */
    public function getFeeInfoGetADOResult()
    {
      return $this->FeeInfoGetADOResult;
    }

    /**
     * @param FeeInfoGetADOResult $FeeInfoGetADOResult
     * @return FeeInfoGetADOResponse
     */
    public function setFeeInfoGetADOResult($FeeInfoGetADOResult)
    {
      $this->FeeInfoGetADOResult = $FeeInfoGetADOResult;
      return $this;
    }

}
