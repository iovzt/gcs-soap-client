<?php

class ClientsFailedValidationGetADOResponse
{

    /**
     * @var ClientsFailedValidationGetADOResult $ClientsFailedValidationGetADOResult
     */
    protected $ClientsFailedValidationGetADOResult = null;

    /**
     * @param ClientsFailedValidationGetADOResult $ClientsFailedValidationGetADOResult
     */
    public function __construct($ClientsFailedValidationGetADOResult)
    {
      $this->ClientsFailedValidationGetADOResult = $ClientsFailedValidationGetADOResult;
    }

    /**
     * @return ClientsFailedValidationGetADOResult
     */
    public function getClientsFailedValidationGetADOResult()
    {
      return $this->ClientsFailedValidationGetADOResult;
    }

    /**
     * @param ClientsFailedValidationGetADOResult $ClientsFailedValidationGetADOResult
     * @return ClientsFailedValidationGetADOResponse
     */
    public function setClientsFailedValidationGetADOResult($ClientsFailedValidationGetADOResult)
    {
      $this->ClientsFailedValidationGetADOResult = $ClientsFailedValidationGetADOResult;
      return $this;
    }

}
