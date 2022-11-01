<?php

class TransfersSetADOResponse
{

    /**
     * @var TransfersSetADOResult $TransfersSetADOResult
     */
    protected $TransfersSetADOResult = null;

    /**
     * @param TransfersSetADOResult $TransfersSetADOResult
     */
    public function __construct($TransfersSetADOResult)
    {
      $this->TransfersSetADOResult = $TransfersSetADOResult;
    }

    /**
     * @return TransfersSetADOResult
     */
    public function getTransfersSetADOResult()
    {
      return $this->TransfersSetADOResult;
    }

    /**
     * @param TransfersSetADOResult $TransfersSetADOResult
     * @return TransfersSetADOResponse
     */
    public function setTransfersSetADOResult($TransfersSetADOResult)
    {
      $this->TransfersSetADOResult = $TransfersSetADOResult;
      return $this;
    }

}
