<?php

class SplitFeeInfoGetXMLResponse
{

    /**
     * @var SplitFeeInfoGetXMLResult $SplitFeeInfoGetXMLResult
     */
    protected $SplitFeeInfoGetXMLResult = null;

    /**
     * @param SplitFeeInfoGetXMLResult $SplitFeeInfoGetXMLResult
     */
    public function __construct($SplitFeeInfoGetXMLResult)
    {
      $this->SplitFeeInfoGetXMLResult = $SplitFeeInfoGetXMLResult;
    }

    /**
     * @return SplitFeeInfoGetXMLResult
     */
    public function getSplitFeeInfoGetXMLResult()
    {
      return $this->SplitFeeInfoGetXMLResult;
    }

    /**
     * @param SplitFeeInfoGetXMLResult $SplitFeeInfoGetXMLResult
     * @return SplitFeeInfoGetXMLResponse
     */
    public function setSplitFeeInfoGetXMLResult($SplitFeeInfoGetXMLResult)
    {
      $this->SplitFeeInfoGetXMLResult = $SplitFeeInfoGetXMLResult;
      return $this;
    }

}
