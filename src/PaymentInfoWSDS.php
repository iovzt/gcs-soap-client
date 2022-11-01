<?php

class PaymentInfoWSDS
{

    /**
     * @var PAYMENT_CLASS $PAYMENT_CLASS
     */
    protected $PAYMENT_CLASS = null;

    /**
     * @var PAYMENT_STATUS $PAYMENT_STATUS
     */
    protected $PAYMENT_STATUS = null;

    /**
     * @var PAYMENT_TYPES $PAYMENT_TYPES
     */
    protected $PAYMENT_TYPES = null;

    /**
     * @var ERRORS $ERRORS
     */
    protected $ERRORS = null;

    /**
     * @param PAYMENT_CLASS $PAYMENT_CLASS
     * @param PAYMENT_STATUS $PAYMENT_STATUS
     * @param PAYMENT_TYPES $PAYMENT_TYPES
     * @param ERRORS $ERRORS
     */
    public function __construct($PAYMENT_CLASS, $PAYMENT_STATUS, $PAYMENT_TYPES, $ERRORS)
    {
      $this->PAYMENT_CLASS = $PAYMENT_CLASS;
      $this->PAYMENT_STATUS = $PAYMENT_STATUS;
      $this->PAYMENT_TYPES = $PAYMENT_TYPES;
      $this->ERRORS = $ERRORS;
    }

    /**
     * @return PAYMENT_CLASS
     */
    public function getPAYMENT_CLASS()
    {
      return $this->PAYMENT_CLASS;
    }

    /**
     * @param PAYMENT_CLASS $PAYMENT_CLASS
     * @return PaymentInfoWSDS
     */
    public function setPAYMENT_CLASS($PAYMENT_CLASS)
    {
      $this->PAYMENT_CLASS = $PAYMENT_CLASS;
      return $this;
    }

    /**
     * @return PAYMENT_STATUS
     */
    public function getPAYMENT_STATUS()
    {
      return $this->PAYMENT_STATUS;
    }

    /**
     * @param PAYMENT_STATUS $PAYMENT_STATUS
     * @return PaymentInfoWSDS
     */
    public function setPAYMENT_STATUS($PAYMENT_STATUS)
    {
      $this->PAYMENT_STATUS = $PAYMENT_STATUS;
      return $this;
    }

    /**
     * @return PAYMENT_TYPES
     */
    public function getPAYMENT_TYPES()
    {
      return $this->PAYMENT_TYPES;
    }

    /**
     * @param PAYMENT_TYPES $PAYMENT_TYPES
     * @return PaymentInfoWSDS
     */
    public function setPAYMENT_TYPES($PAYMENT_TYPES)
    {
      $this->PAYMENT_TYPES = $PAYMENT_TYPES;
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
     * @return PaymentInfoWSDS
     */
    public function setERRORS($ERRORS)
    {
      $this->ERRORS = $ERRORS;
      return $this;
    }

}
