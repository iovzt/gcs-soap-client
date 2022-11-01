<?php

class SplitFeeInfoGetADOResponse
{

    /**
     * @var SplitFeeInfoGetADOResult $SplitFeeInfoGetADOResult
     */
    protected $SplitFeeInfoGetADOResult = null;

    /**
     * @param SplitFeeInfoGetADOResult $SplitFeeInfoGetADOResult
     */
    public function __construct($SplitFeeInfoGetADOResult)
    {
      $this->SplitFeeInfoGetADOResult = $SplitFeeInfoGetADOResult;
    }

    /**
     * @return SplitFeeInfoGetADOResult
     */
    public function getSplitFeeInfoGetADOResult()
    {
      return $this->SplitFeeInfoGetADOResult;
    }

    /**
     * @param SplitFeeInfoGetADOResult $SplitFeeInfoGetADOResult
     * @return SplitFeeInfoGetADOResponse
     */
    public function setSplitFeeInfoGetADOResult($SplitFeeInfoGetADOResult)
    {
      $this->SplitFeeInfoGetADOResult = $SplitFeeInfoGetADOResult;
      return $this;
    }

}
