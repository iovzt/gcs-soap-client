<?php

class CustomDebitsWSDS
{

    /**
     * @var DEBITS $DEBITS
     */
    protected $DEBITS = null;

    /**
     * @var ERRORS $ERRORS
     */
    protected $ERRORS = null;

    /**
     * @var META_INFO $META_INFO
     */
    protected $META_INFO = null;

    /**
     * @param DEBITS $DEBITS
     * @param ERRORS $ERRORS
     * @param META_INFO $META_INFO
     */
    public function __construct($DEBITS, $ERRORS, $META_INFO)
    {
      $this->DEBITS = $DEBITS;
      $this->ERRORS = $ERRORS;
      $this->META_INFO = $META_INFO;
    }

    /**
     * @return DEBITS
     */
    public function getDEBITS()
    {
      return $this->DEBITS;
    }

    /**
     * @param DEBITS $DEBITS
     * @return CustomDebitsWSDS
     */
    public function setDEBITS($DEBITS)
    {
      $this->DEBITS = $DEBITS;
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
     * @return CustomDebitsWSDS
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
     * @return CustomDebitsWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

}
