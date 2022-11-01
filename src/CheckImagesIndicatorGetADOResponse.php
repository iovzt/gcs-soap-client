<?php

class CheckImagesIndicatorGetADOResponse
{

    /**
     * @var CheckImagesIndicatorGetADOResult $CheckImagesIndicatorGetADOResult
     */
    protected $CheckImagesIndicatorGetADOResult = null;

    /**
     * @param CheckImagesIndicatorGetADOResult $CheckImagesIndicatorGetADOResult
     */
    public function __construct($CheckImagesIndicatorGetADOResult)
    {
      $this->CheckImagesIndicatorGetADOResult = $CheckImagesIndicatorGetADOResult;
    }

    /**
     * @return CheckImagesIndicatorGetADOResult
     */
    public function getCheckImagesIndicatorGetADOResult()
    {
      return $this->CheckImagesIndicatorGetADOResult;
    }

    /**
     * @param CheckImagesIndicatorGetADOResult $CheckImagesIndicatorGetADOResult
     * @return CheckImagesIndicatorGetADOResponse
     */
    public function setCheckImagesIndicatorGetADOResult($CheckImagesIndicatorGetADOResult)
    {
      $this->CheckImagesIndicatorGetADOResult = $CheckImagesIndicatorGetADOResult;
      return $this;
    }

}
