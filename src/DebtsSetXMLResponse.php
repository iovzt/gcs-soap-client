<?php

class DebtsSetXMLResponse
{

    /**
     * @var DebtsSetXMLResult $DebtsSetXMLResult
     */
    protected $DebtsSetXMLResult = null;

    /**
     * @param DebtsSetXMLResult $DebtsSetXMLResult
     */
    public function __construct($DebtsSetXMLResult)
    {
      $this->DebtsSetXMLResult = $DebtsSetXMLResult;
    }

    /**
     * @return DebtsSetXMLResult
     */
    public function getDebtsSetXMLResult()
    {
      return $this->DebtsSetXMLResult;
    }

    /**
     * @param DebtsSetXMLResult $DebtsSetXMLResult
     * @return DebtsSetXMLResponse
     */
    public function setDebtsSetXMLResult($DebtsSetXMLResult)
    {
      $this->DebtsSetXMLResult = $DebtsSetXMLResult;
      return $this;
    }

}
