<?php

class TransferReturnsSetXMLResponse
{

    /**
     * @var TransferReturnsSetXMLResult $TransferReturnsSetXMLResult
     */
    protected $TransferReturnsSetXMLResult = null;

    /**
     * @param TransferReturnsSetXMLResult $TransferReturnsSetXMLResult
     */
    public function __construct($TransferReturnsSetXMLResult)
    {
      $this->TransferReturnsSetXMLResult = $TransferReturnsSetXMLResult;
    }

    /**
     * @return TransferReturnsSetXMLResult
     */
    public function getTransferReturnsSetXMLResult()
    {
      return $this->TransferReturnsSetXMLResult;
    }

    /**
     * @param TransferReturnsSetXMLResult $TransferReturnsSetXMLResult
     * @return TransferReturnsSetXMLResponse
     */
    public function setTransferReturnsSetXMLResult($TransferReturnsSetXMLResult)
    {
      $this->TransferReturnsSetXMLResult = $TransferReturnsSetXMLResult;
      return $this;
    }

}
