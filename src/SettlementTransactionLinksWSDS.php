<?php

class SettlementTransactionLinksWSDS
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
     * @var SETTLEMENT_TRANSACTION_LINKS $SETTLEMENT_TRANSACTION_LINKS
     */
    protected $SETTLEMENT_TRANSACTION_LINKS = null;

    /**
     * @param ERRORS $ERRORS
     * @param META_INFO $META_INFO
     * @param SETTLEMENT_TRANSACTION_LINKS $SETTLEMENT_TRANSACTION_LINKS
     */
    public function __construct($ERRORS, $META_INFO, $SETTLEMENT_TRANSACTION_LINKS)
    {
      $this->ERRORS = $ERRORS;
      $this->META_INFO = $META_INFO;
      $this->SETTLEMENT_TRANSACTION_LINKS = $SETTLEMENT_TRANSACTION_LINKS;
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
     * @return SettlementTransactionLinksWSDS
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
     * @return SettlementTransactionLinksWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

    /**
     * @return SETTLEMENT_TRANSACTION_LINKS
     */
    public function getSETTLEMENT_TRANSACTION_LINKS()
    {
      return $this->SETTLEMENT_TRANSACTION_LINKS;
    }

    /**
     * @param SETTLEMENT_TRANSACTION_LINKS $SETTLEMENT_TRANSACTION_LINKS
     * @return SettlementTransactionLinksWSDS
     */
    public function setSETTLEMENT_TRANSACTION_LINKS($SETTLEMENT_TRANSACTION_LINKS)
    {
      $this->SETTLEMENT_TRANSACTION_LINKS = $SETTLEMENT_TRANSACTION_LINKS;
      return $this;
    }

}
