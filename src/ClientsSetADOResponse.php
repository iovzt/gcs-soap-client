<?php

class ClientsSetADOResponse
{

    /**
     * @var ClientsSetADOResult $ClientsSetADOResult
     */
    protected $ClientsSetADOResult = null;

    /**
     * @param ClientsSetADOResult $ClientsSetADOResult
     */
    public function __construct($ClientsSetADOResult)
    {
      $this->ClientsSetADOResult = $ClientsSetADOResult;
    }

    /**
     * @return ClientsSetADOResult
     */
    public function getClientsSetADOResult()
    {
      return $this->ClientsSetADOResult;
    }

    /**
     * @param ClientsSetADOResult $ClientsSetADOResult
     * @return ClientsSetADOResponse
     */
    public function setClientsSetADOResult($ClientsSetADOResult)
    {
      $this->ClientsSetADOResult = $ClientsSetADOResult;
      return $this;
    }

}
