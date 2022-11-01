<?php

class PhonePayResponseWSDS
{

    /**
     * @var ERRORS $ERRORS
     */
    protected $ERRORS = null;

    /**
     * @var META_INFO $META_INFO
     */
    protected $META_INFO = null;

    /**
     * @var RESPONSE $RESPONSE
     */
    protected $RESPONSE = null;

    /**
     * @param ERRORS $ERRORS
     * @param META_INFO $META_INFO
     * @param RESPONSE $RESPONSE
     */
    public function __construct($ERRORS, $META_INFO, $RESPONSE)
    {
      $this->ERRORS = $ERRORS;
      $this->META_INFO = $META_INFO;
      $this->RESPONSE = $RESPONSE;
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
     * @return PhonePayResponseWSDS
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
     * @return PhonePayResponseWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

    /**
     * @return RESPONSE
     */
    public function getRESPONSE()
    {
      return $this->RESPONSE;
    }

    /**
     * @param RESPONSE $RESPONSE
     * @return PhonePayResponseWSDS
     */
    public function setRESPONSE($RESPONSE)
    {
      $this->RESPONSE = $RESPONSE;
      return $this;
    }

}
