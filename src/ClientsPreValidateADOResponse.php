<?php

class ClientsPreValidateADOResponse
{

    /**
     * @var ClientsPreValidateADOResult $ClientsPreValidateADOResult
     */
    protected $ClientsPreValidateADOResult = null;

    /**
     * @param ClientsPreValidateADOResult $ClientsPreValidateADOResult
     */
    public function __construct($ClientsPreValidateADOResult)
    {
      $this->ClientsPreValidateADOResult = $ClientsPreValidateADOResult;
    }

    /**
     * @return ClientsPreValidateADOResult
     */
    public function getClientsPreValidateADOResult()
    {
      return $this->ClientsPreValidateADOResult;
    }

    /**
     * @param ClientsPreValidateADOResult $ClientsPreValidateADOResult
     * @return ClientsPreValidateADOResponse
     */
    public function setClientsPreValidateADOResult($ClientsPreValidateADOResult)
    {
      $this->ClientsPreValidateADOResult = $ClientsPreValidateADOResult;
      return $this;
    }

}
