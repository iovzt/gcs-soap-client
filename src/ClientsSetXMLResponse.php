<?php

class ClientsSetXMLResponse
{

    /**
     * @var ClientsSetXMLResult $ClientsSetXMLResult
     */
    protected $ClientsSetXMLResult = null;

    /**
     * @param ClientsSetXMLResult $ClientsSetXMLResult
     */
    public function __construct($ClientsSetXMLResult)
    {
      $this->ClientsSetXMLResult = $ClientsSetXMLResult;
    }

    /**
     * @return ClientsSetXMLResult
     */
    public function getClientsSetXMLResult()
    {
      return $this->ClientsSetXMLResult;
    }

    /**
     * @param ClientsSetXMLResult $ClientsSetXMLResult
     * @return ClientsSetXMLResponse
     */
    public function setClientsSetXMLResult($ClientsSetXMLResult)
    {
      $this->ClientsSetXMLResult = $ClientsSetXMLResult;
      return $this;
    }

}
