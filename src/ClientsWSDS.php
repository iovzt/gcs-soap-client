<?php

class ClientsWSDS
{

    /**
     * @var CLIENTS $CLIENTS
     */
    protected $CLIENTS = null;

    /**
     * @var ERRORS $ERRORS
     */
    protected $ERRORS = null;

    /**
     * @var META_INFO $META_INFO
     */
    protected $META_INFO = null;

    /**
     * @param CLIENTS $CLIENTS
     * @param ERRORS $ERRORS
     * @param META_INFO $META_INFO
     */
    public function __construct($CLIENTS, $ERRORS, $META_INFO)
    {
      $this->CLIENTS = $CLIENTS;
      $this->ERRORS = $ERRORS;
      $this->META_INFO = $META_INFO;
    }

    /**
     * @return CLIENTS
     */
    public function getCLIENTS()
    {
      return $this->CLIENTS;
    }

    /**
     * @param CLIENTS $CLIENTS
     * @return ClientsWSDS
     */
    public function setCLIENTS($CLIENTS)
    {
      $this->CLIENTS = $CLIENTS;
      return $this;
    }

    /**
     * @return ERRORS
     */
    public function getERRORS()
    {
      return $this->ERRORS;
    }

    /**
     * @param ERRORS $ERRORS
     * @return ClientsWSDS
     */
    public function setERRORS($ERRORS)
    {
      $this->ERRORS = $ERRORS;
      return $this;
    }

    /**
     * @return META_INFO
     */
    public function getMETA_INFO()
    {
      return $this->META_INFO;
    }

    /**
     * @param META_INFO $META_INFO
     * @return ClientsWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

}
