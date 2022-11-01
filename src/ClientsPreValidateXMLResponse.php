<?php

class ClientsPreValidateXMLResponse
{

    /**
     * @var ClientsPreValidateXMLResult $ClientsPreValidateXMLResult
     */
    protected $ClientsPreValidateXMLResult = null;

    /**
     * @param ClientsPreValidateXMLResult $ClientsPreValidateXMLResult
     */
    public function __construct($ClientsPreValidateXMLResult)
    {
      $this->ClientsPreValidateXMLResult = $ClientsPreValidateXMLResult;
    }

    /**
     * @return ClientsPreValidateXMLResult
     */
    public function getClientsPreValidateXMLResult()
    {
      return $this->ClientsPreValidateXMLResult;
    }

    /**
     * @param ClientsPreValidateXMLResult $ClientsPreValidateXMLResult
     * @return ClientsPreValidateXMLResponse
     */
    public function setClientsPreValidateXMLResult($ClientsPreValidateXMLResult)
    {
      $this->ClientsPreValidateXMLResult = $ClientsPreValidateXMLResult;
      return $this;
    }

}
