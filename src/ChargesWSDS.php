<?php

class ChargesWSDS
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
     * @var CHARGES $CHARGES
     */
    protected $CHARGES = null;

    /**
     * @param ERRORS $ERRORS
     * @param META_INFO $META_INFO
     * @param CHARGES $CHARGES
     */
    public function __construct($ERRORS, $META_INFO, $CHARGES)
    {
      $this->ERRORS = $ERRORS;
      $this->META_INFO = $META_INFO;
      $this->CHARGES = $CHARGES;
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
     * @return ChargesWSDS
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
     * @return ChargesWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

    /**
     * @return CHARGES
     */
    public function getCHARGES()
    {
      return $this->CHARGES;
    }

    /**
     * @param CHARGES $CHARGES
     * @return ChargesWSDS
     */
    public function setCHARGES($CHARGES)
    {
      $this->CHARGES = $CHARGES;
      return $this;
    }

}
