<?php

class TransferReturnsSetADOResponse
{

    /**
     * @var TransferReturnsSetADOResult $TransferReturnsSetADOResult
     */
    protected $TransferReturnsSetADOResult = null;

    /**
     * @param TransferReturnsSetADOResult $TransferReturnsSetADOResult
     */
    public function __construct($TransferReturnsSetADOResult)
    {
      $this->TransferReturnsSetADOResult = $TransferReturnsSetADOResult;
    }

    /**
     * @return TransferReturnsSetADOResult
     */
    public function getTransferReturnsSetADOResult()
    {
      return $this->TransferReturnsSetADOResult;
    }

    /**
     * @param TransferReturnsSetADOResult $TransferReturnsSetADOResult
     * @return TransferReturnsSetADOResponse
     */
    public function setTransferReturnsSetADOResult($TransferReturnsSetADOResult)
    {
      $this->TransferReturnsSetADOResult = $TransferReturnsSetADOResult;
      return $this;
    }

}
