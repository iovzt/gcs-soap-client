<?php

class SettlementsSetXMLResponse
{

    /**
     * @var SettlementsSetXMLResult $SettlementsSetXMLResult
     */
    protected $SettlementsSetXMLResult = null;

    /**
     * @param SettlementsSetXMLResult $SettlementsSetXMLResult
     */
    public function __construct($SettlementsSetXMLResult)
    {
      $this->SettlementsSetXMLResult = $SettlementsSetXMLResult;
    }

    /**
     * @return SettlementsSetXMLResult
     */
    public function getSettlementsSetXMLResult()
    {
      return $this->SettlementsSetXMLResult;
    }

    /**
     * @param SettlementsSetXMLResult $SettlementsSetXMLResult
     * @return SettlementsSetXMLResponse
     */
    public function setSettlementsSetXMLResult($SettlementsSetXMLResult)
    {
      $this->SettlementsSetXMLResult = $SettlementsSetXMLResult;
      return $this;
    }

}
