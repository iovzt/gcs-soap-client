<?php

class ClientTransferSetADOResponse
{

    /**
     * @var ClientTransferSetADOResult $ClientTransferSetADOResult
     */
    protected $ClientTransferSetADOResult = null;

    /**
     * @param ClientTransferSetADOResult $ClientTransferSetADOResult
     */
    public function __construct($ClientTransferSetADOResult)
    {
      $this->ClientTransferSetADOResult = $ClientTransferSetADOResult;
    }

    /**
     * @return ClientTransferSetADOResult
     */
    public function getClientTransferSetADOResult()
    {
      return $this->ClientTransferSetADOResult;
    }

    /**
     * @param ClientTransferSetADOResult $ClientTransferSetADOResult
     * @return ClientTransferSetADOResponse
     */
    public function setClientTransferSetADOResult($ClientTransferSetADOResult)
    {
      $this->ClientTransferSetADOResult = $ClientTransferSetADOResult;
      return $this;
    }

}
