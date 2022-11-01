<?php

class TransfersWSDS
{

    /**
     * @var META_INFO $META_INFO
     */
    protected $META_INFO = null;

    /**
     * @var ERRORS $ERRORS
     */
    protected $ERRORS = null;

    /**
     * @var TRANSFERS $TRANSFERS
     */
    protected $TRANSFERS = null;

    /**
     * @param META_INFO $META_INFO
     * @param ERRORS $ERRORS
     * @param TRANSFERS $TRANSFERS
     */
    public function __construct($META_INFO, $ERRORS, $TRANSFERS)
    {
      $this->META_INFO = $META_INFO;
      $this->ERRORS = $ERRORS;
      $this->TRANSFERS = $TRANSFERS;
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
     * @return TransfersWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
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
     * @return TransfersWSDS
     */
    public function setERRORS($ERRORS)
    {
      $this->ERRORS = $ERRORS;
      return $this;
    }

    /**
     * @return TRANSFERS
     */
    public function getTRANSFERS()
    {
      return $this->TRANSFERS;
    }

    /**
     * @param TRANSFERS $TRANSFERS
     * @return TransfersWSDS
     */
    public function setTRANSFERS($TRANSFERS)
    {
      $this->TRANSFERS = $TRANSFERS;
      return $this;
    }

}
