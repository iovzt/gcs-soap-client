<?php

class ClientsFailedValidationGetXMLResponse
{

    /**
     * @var ClientsFailedValidationGetXMLResult $ClientsFailedValidationGetXMLResult
     */
    protected $ClientsFailedValidationGetXMLResult = null;

    /**
     * @param ClientsFailedValidationGetXMLResult $ClientsFailedValidationGetXMLResult
     */
    public function __construct($ClientsFailedValidationGetXMLResult)
    {
      $this->ClientsFailedValidationGetXMLResult = $ClientsFailedValidationGetXMLResult;
    }

    /**
     * @return ClientsFailedValidationGetXMLResult
     */
    public function getClientsFailedValidationGetXMLResult()
    {
      return $this->ClientsFailedValidationGetXMLResult;
    }

    /**
     * @param ClientsFailedValidationGetXMLResult $ClientsFailedValidationGetXMLResult
     * @return ClientsFailedValidationGetXMLResponse
     */
    public function setClientsFailedValidationGetXMLResult($ClientsFailedValidationGetXMLResult)
    {
      $this->ClientsFailedValidationGetXMLResult = $ClientsFailedValidationGetXMLResult;
      return $this;
    }

}
