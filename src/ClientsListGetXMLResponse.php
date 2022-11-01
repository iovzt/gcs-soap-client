<?php

class ClientsListGetXMLResponse
{

    /**
     * @var ClientsListGetXMLResult $ClientsListGetXMLResult
     */
    protected $ClientsListGetXMLResult = null;

    /**
     * @param ClientsListGetXMLResult $ClientsListGetXMLResult
     */
    public function __construct($ClientsListGetXMLResult)
    {
      $this->ClientsListGetXMLResult = $ClientsListGetXMLResult;
    }

    /**
     * @return ClientsListGetXMLResult
     */
    public function getClientsListGetXMLResult()
    {
      return $this->ClientsListGetXMLResult;
    }

    /**
     * @param ClientsListGetXMLResult $ClientsListGetXMLResult
     * @return ClientsListGetXMLResponse
     */
    public function setClientsListGetXMLResult($ClientsListGetXMLResult)
    {
      $this->ClientsListGetXMLResult = $ClientsListGetXMLResult;
      return $this;
    }

}
