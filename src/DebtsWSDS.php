<?php

class DebtsWSDS
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
     * @var DEBTS $DEBTS
     */
    protected $DEBTS = null;

    /**
     * @param META_INFO $META_INFO
     * @param ERRORS $ERRORS
     * @param DEBTS $DEBTS
     */
    public function __construct($META_INFO, $ERRORS, $DEBTS)
    {
      $this->META_INFO = $META_INFO;
      $this->ERRORS = $ERRORS;
      $this->DEBTS = $DEBTS;
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
     * @return DebtsWSDS
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
     * @return DebtsWSDS
     */
    public function setERRORS($ERRORS)
    {
      $this->ERRORS = $ERRORS;
      return $this;
    }

    /**
     * @return DEBTS
     */
    public function getDEBTS()
    {
      return $this->DEBTS;
    }

    /**
     * @param DEBTS $DEBTS
     * @return DebtsWSDS
     */
    public function setDEBTS($DEBTS)
    {
      $this->DEBTS = $DEBTS;
      return $this;
    }

}
