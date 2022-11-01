<?php

class TransferReturnsWSDS
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
     * @var TRANSFER_RETURNS $TRANSFER_RETURNS
     */
    protected $TRANSFER_RETURNS = null;

    /**
     * @param ERRORS $ERRORS
     * @param META_INFO $META_INFO
     * @param TRANSFER_RETURNS $TRANSFER_RETURNS
     */
    public function __construct($ERRORS, $META_INFO, $TRANSFER_RETURNS)
    {
      $this->ERRORS = $ERRORS;
      $this->META_INFO = $META_INFO;
      $this->TRANSFER_RETURNS = $TRANSFER_RETURNS;
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
     * @return TransferReturnsWSDS
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
     * @return TransferReturnsWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

    /**
     * @return TRANSFER_RETURNS
     */
    public function getTRANSFER_RETURNS()
    {
      return $this->TRANSFER_RETURNS;
    }

    /**
     * @param TRANSFER_RETURNS $TRANSFER_RETURNS
     * @return TransferReturnsWSDS
     */
    public function setTRANSFER_RETURNS($TRANSFER_RETURNS)
    {
      $this->TRANSFER_RETURNS = $TRANSFER_RETURNS;
      return $this;
    }

}
