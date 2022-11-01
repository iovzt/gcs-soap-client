<?php

class FeesSetXMLResponse
{

    /**
     * @var FeesSetXMLResult $FeesSetXMLResult
     */
    protected $FeesSetXMLResult = null;

    /**
     * @param FeesSetXMLResult $FeesSetXMLResult
     */
    public function __construct($FeesSetXMLResult)
    {
      $this->FeesSetXMLResult = $FeesSetXMLResult;
    }

    /**
     * @return FeesSetXMLResult
     */
    public function getFeesSetXMLResult()
    {
      return $this->FeesSetXMLResult;
    }

    /**
     * @param FeesSetXMLResult $FeesSetXMLResult
     * @return FeesSetXMLResponse
     */
    public function setFeesSetXMLResult($FeesSetXMLResult)
    {
      $this->FeesSetXMLResult = $FeesSetXMLResult;
      return $this;
    }

}
