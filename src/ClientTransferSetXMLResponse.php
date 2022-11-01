<?php

class ClientTransferSetXMLResponse
{

    /**
     * @var ClientTransferSetXMLResult $ClientTransferSetXMLResult
     */
    protected $ClientTransferSetXMLResult = null;

    /**
     * @param ClientTransferSetXMLResult $ClientTransferSetXMLResult
     */
    public function __construct($ClientTransferSetXMLResult)
    {
      $this->ClientTransferSetXMLResult = $ClientTransferSetXMLResult;
    }

    /**
     * @return ClientTransferSetXMLResult
     */
    public function getClientTransferSetXMLResult()
    {
      return $this->ClientTransferSetXMLResult;
    }

    /**
     * @param ClientTransferSetXMLResult $ClientTransferSetXMLResult
     * @return ClientTransferSetXMLResponse
     */
    public function setClientTransferSetXMLResult($ClientTransferSetXMLResult)
    {
      $this->ClientTransferSetXMLResult = $ClientTransferSetXMLResult;
      return $this;
    }

}
