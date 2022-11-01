<?php

class CustomPaymentsWSDS
{

    /**
     * @var PAYMENTS $PAYMENTS
     */
    protected $PAYMENTS = null;

    /**
     * @var ERRORS $ERRORS
     */
    protected $ERRORS = null;

    /**
     * @var META_INFO $META_INFO
     */
    protected $META_INFO = null;

    /**
     * @param PAYMENTS $PAYMENTS
     * @param ERRORS $ERRORS
     * @param META_INFO $META_INFO
     */
    public function __construct($PAYMENTS, $ERRORS, $META_INFO)
    {
      $this->PAYMENTS = $PAYMENTS;
      $this->ERRORS = $ERRORS;
      $this->META_INFO = $META_INFO;
    }

    /**
     * @return PAYMENTS
     */
    public function getPAYMENTS()
    {
      return $this->PAYMENTS;
    }

    /**
     * @param PAYMENTS $PAYMENTS
     * @return CustomPaymentsWSDS
     */
    public function setPAYMENTS($PAYMENTS)
    {
      $this->PAYMENTS = $PAYMENTS;
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
     * @return CustomPaymentsWSDS
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
     * @return CustomPaymentsWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

}
