<?php

class SettlementWSDS
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
     * @var SETTLEMENTS $SETTLEMENTS
     */
    protected $SETTLEMENTS = null;

    /**
     * @param ERRORS $ERRORS
     * @param META_INFO $META_INFO
     * @param SETTLEMENTS $SETTLEMENTS
     */
    public function __construct($ERRORS, $META_INFO, $SETTLEMENTS)
    {
      $this->ERRORS = $ERRORS;
      $this->META_INFO = $META_INFO;
      $this->SETTLEMENTS = $SETTLEMENTS;
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
     * @return SettlementWSDS
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
     * @return SettlementWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

    /**
     * @return SETTLEMENTS
     */
    public function getSETTLEMENTS()
    {
      return $this->SETTLEMENTS;
    }

    /**
     * @param SETTLEMENTS $SETTLEMENTS
     * @return SettlementWSDS
     */
    public function setSETTLEMENTS($SETTLEMENTS)
    {
      $this->SETTLEMENTS = $SETTLEMENTS;
      return $this;
    }

}
