<?php

class TransfersSetXMLResponse
{

    /**
     * @var TransfersSetXMLResult $TransfersSetXMLResult
     */
    protected $TransfersSetXMLResult = null;

    /**
     * @param TransfersSetXMLResult $TransfersSetXMLResult
     */
    public function __construct($TransfersSetXMLResult)
    {
      $this->TransfersSetXMLResult = $TransfersSetXMLResult;
    }

    /**
     * @return TransfersSetXMLResult
     */
    public function getTransfersSetXMLResult()
    {
      return $this->TransfersSetXMLResult;
    }

    /**
     * @param TransfersSetXMLResult $TransfersSetXMLResult
     * @return TransfersSetXMLResponse
     */
    public function setTransfersSetXMLResult($TransfersSetXMLResult)
    {
      $this->TransfersSetXMLResult = $TransfersSetXMLResult;
      return $this;
    }

}
