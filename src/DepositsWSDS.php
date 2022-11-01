<?php

class DepositsWSDS
{

    /**
     * @var DEPOSITS $DEPOSITS
     */
    protected $DEPOSITS = null;

    /**
     * @var ERRORS $ERRORS
     */
    protected $ERRORS = null;

    /**
     * @var META_INFO $META_INFO
     */
    protected $META_INFO = null;

    /**
     * @param DEPOSITS $DEPOSITS
     * @param ERRORS $ERRORS
     * @param META_INFO $META_INFO
     */
    public function __construct($DEPOSITS, $ERRORS, $META_INFO)
    {
      $this->DEPOSITS = $DEPOSITS;
      $this->ERRORS = $ERRORS;
      $this->META_INFO = $META_INFO;
    }

    /**
     * @return DEPOSITS
     */
    public function getDEPOSITS()
    {
      return $this->DEPOSITS;
    }

    /**
     * @param DEPOSITS $DEPOSITS
     * @return DepositsWSDS
     */
    public function setDEPOSITS($DEPOSITS)
    {
      $this->DEPOSITS = $DEPOSITS;
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
     * @return DepositsWSDS
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
     * @return DepositsWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

}
