<?php

class BAVClientWSDS
{

    /**
     * @var BAVClient $BAVClient
     */
    protected $BAVClient = null;

    /**
     * @var ERRORS $ERRORS
     */
    protected $ERRORS = null;

    /**
     * @var META_INFO $META_INFO
     */
    protected $META_INFO = null;

    /**
     * @param BAVClient $BAVClient
     * @param ERRORS $ERRORS
     * @param META_INFO $META_INFO
     */
    public function __construct($BAVClient, $ERRORS, $META_INFO)
    {
      $this->BAVClient = $BAVClient;
      $this->ERRORS = $ERRORS;
      $this->META_INFO = $META_INFO;
    }

    /**
     * @return BAVClient
     */
    public function getBAVClient()
    {
      return $this->BAVClient;
    }

    /**
     * @param BAVClient $BAVClient
     * @return BAVClientWSDS
     */
    public function setBAVClient($BAVClient)
    {
      $this->BAVClient = $BAVClient;
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
     * @return BAVClientWSDS
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
     * @return BAVClientWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

}
