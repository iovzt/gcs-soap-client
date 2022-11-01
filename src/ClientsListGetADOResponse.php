<?php

class ClientsListGetADOResponse
{

    /**
     * @var ClientsListGetADOResult $ClientsListGetADOResult
     */
    protected $ClientsListGetADOResult = null;

    /**
     * @param ClientsListGetADOResult $ClientsListGetADOResult
     */
    public function __construct($ClientsListGetADOResult)
    {
      $this->ClientsListGetADOResult = $ClientsListGetADOResult;
    }

    /**
     * @return ClientsListGetADOResult
     */
    public function getClientsListGetADOResult()
    {
      return $this->ClientsListGetADOResult;
    }

    /**
     * @param ClientsListGetADOResult $ClientsListGetADOResult
     * @return ClientsListGetADOResponse
     */
    public function setClientsListGetADOResult($ClientsListGetADOResult)
    {
      $this->ClientsListGetADOResult = $ClientsListGetADOResult;
      return $this;
    }

}
