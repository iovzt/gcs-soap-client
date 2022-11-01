<?php

class DebitsSetXMLResponse
{

    /**
     * @var DebitsSetXMLResult $DebitsSetXMLResult
     */
    protected $DebitsSetXMLResult = null;

    /**
     * @param DebitsSetXMLResult $DebitsSetXMLResult
     */
    public function __construct($DebitsSetXMLResult)
    {
      $this->DebitsSetXMLResult = $DebitsSetXMLResult;
    }

    /**
     * @return DebitsSetXMLResult
     */
    public function getDebitsSetXMLResult()
    {
      return $this->DebitsSetXMLResult;
    }

    /**
     * @param DebitsSetXMLResult $DebitsSetXMLResult
     * @return DebitsSetXMLResponse
     */
    public function setDebitsSetXMLResult($DebitsSetXMLResult)
    {
      $this->DebitsSetXMLResult = $DebitsSetXMLResult;
      return $this;
    }

}
