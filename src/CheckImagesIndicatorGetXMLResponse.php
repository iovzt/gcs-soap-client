<?php

class CheckImagesIndicatorGetXMLResponse
{

    /**
     * @var CheckImagesIndicatorGetXMLResult $CheckImagesIndicatorGetXMLResult
     */
    protected $CheckImagesIndicatorGetXMLResult = null;

    /**
     * @param CheckImagesIndicatorGetXMLResult $CheckImagesIndicatorGetXMLResult
     */
    public function __construct($CheckImagesIndicatorGetXMLResult)
    {
      $this->CheckImagesIndicatorGetXMLResult = $CheckImagesIndicatorGetXMLResult;
    }

    /**
     * @return CheckImagesIndicatorGetXMLResult
     */
    public function getCheckImagesIndicatorGetXMLResult()
    {
      return $this->CheckImagesIndicatorGetXMLResult;
    }

    /**
     * @param CheckImagesIndicatorGetXMLResult $CheckImagesIndicatorGetXMLResult
     * @return CheckImagesIndicatorGetXMLResponse
     */
    public function setCheckImagesIndicatorGetXMLResult($CheckImagesIndicatorGetXMLResult)
    {
      $this->CheckImagesIndicatorGetXMLResult = $CheckImagesIndicatorGetXMLResult;
      return $this;
    }

}
