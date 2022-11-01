<?php

class TransactionsWSDS
{

    /**
     * @var TRANSACTIONS $TRANSACTIONS
     */
    protected $TRANSACTIONS = null;

    /**
     * @var ERRORS $ERRORS
     */
    protected $ERRORS = null;

    /**
     * @var META_INFO $META_INFO
     */
    protected $META_INFO = null;

    /**
     * @param TRANSACTIONS $TRANSACTIONS
     * @param ERRORS $ERRORS
     * @param META_INFO $META_INFO
     */
    public function __construct($TRANSACTIONS, $ERRORS, $META_INFO)
    {
      $this->TRANSACTIONS = $TRANSACTIONS;
      $this->ERRORS = $ERRORS;
      $this->META_INFO = $META_INFO;
    }

    /**
     * @return TRANSACTIONS
     */
    public function getTRANSACTIONS()
    {
      return $this->TRANSACTIONS;
    }

    /**
     * @param TRANSACTIONS $TRANSACTIONS
     * @return TransactionsWSDS
     */
    public function setTRANSACTIONS($TRANSACTIONS)
    {
      $this->TRANSACTIONS = $TRANSACTIONS;
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
     * @return TransactionsWSDS
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
     * @return TransactionsWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

}
