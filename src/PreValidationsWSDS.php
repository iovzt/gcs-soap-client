<?php

class PreValidationsWSDS
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
     * @var RESULTS $RESULTS
     */
    protected $RESULTS = null;

    /**
     * @param CLIENTS $CLIENTS
     * @param ERRORS $ERRORS
     * @param META_INFO $META_INFO
     * @param RESULTS $RESULTS
     */
    public function __construct($CLIENTS, $ERRORS, $META_INFO, $RESULTS)
    {
      $this->CLIENTS = $CLIENTS;
      $this->ERRORS = $ERRORS;
      $this->META_INFO = $META_INFO;
      $this->RESULTS = $RESULTS;
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
     * @return PreValidationsWSDS
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
     * @return PreValidationsWSDS
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
     * @return PreValidationsWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

    /**
     * @return RESULTS
     */
    public function getRESULTS()
    {
      return $this->RESULTS;
    }

    /**
     * @param RESULTS $RESULTS
     * @return PreValidationsWSDS
     */
    public function setRESULTS($RESULTS)
    {
      $this->RESULTS = $RESULTS;
      return $this;
    }

}
