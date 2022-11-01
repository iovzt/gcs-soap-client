<?php

class AccountsWSDS
{

    /**
     * @var ERRORS $ERRORS
     */
    protected $ERRORS = null;

    /**
     * @var ACCOUNTS $ACCOUNTS
     */
    protected $ACCOUNTS = null;

    /**
     * @var META_INFO $META_INFO
     */
    protected $META_INFO = null;

    /**
     * @param ERRORS $ERRORS
     * @param ACCOUNTS $ACCOUNTS
     * @param META_INFO $META_INFO
     */
    public function __construct($ERRORS, $ACCOUNTS, $META_INFO)
    {
      $this->ERRORS = $ERRORS;
      $this->ACCOUNTS = $ACCOUNTS;
      $this->META_INFO = $META_INFO;
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
     * @return AccountsWSDS
     */
    public function setERRORS($ERRORS)
    {
      $this->ERRORS = $ERRORS;
      return $this;
    }

    /**
     * @return ACCOUNTS
     */
    public function getACCOUNTS()
    {
      return $this->ACCOUNTS;
    }

    /**
     * @param ACCOUNTS $ACCOUNTS
     * @return AccountsWSDS
     */
    public function setACCOUNTS($ACCOUNTS)
    {
      $this->ACCOUNTS = $ACCOUNTS;
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
     * @return AccountsWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

}
