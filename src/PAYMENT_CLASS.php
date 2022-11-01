<?php

class PAYMENT_CLASS
{

    /**
     * @var string $PAYMENT_CLASS
     */
    protected $PAYMENT_CLASS = null;

    /**
     * @var string $PAYMENT_CLASS_DESC
     */
    protected $PAYMENT_CLASS_DESC = null;

    /**
     * @param string $PAYMENT_CLASS
     * @param string $PAYMENT_CLASS_DESC
     */
    public function __construct($PAYMENT_CLASS, $PAYMENT_CLASS_DESC)
    {
      $this->PAYMENT_CLASS = $PAYMENT_CLASS;
      $this->PAYMENT_CLASS_DESC = $PAYMENT_CLASS_DESC;
    }

    /**
     * @return string
     */
    public function getPAYMENT_CLASS()
    {
      return $this->PAYMENT_CLASS;
    }

    /**
     * @param string $PAYMENT_CLASS
     * @return PAYMENT_CLASS
     */
    public function setPAYMENT_CLASS($PAYMENT_CLASS)
    {
      $this->PAYMENT_CLASS = $PAYMENT_CLASS;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYMENT_CLASS_DESC()
    {
      return $this->PAYMENT_CLASS_DESC;
    }

    /**
     * @param string $PAYMENT_CLASS_DESC
     * @return PAYMENT_CLASS
     */
    public function setPAYMENT_CLASS_DESC($PAYMENT_CLASS_DESC)
    {
      $this->PAYMENT_CLASS_DESC = $PAYMENT_CLASS_DESC;
      return $this;
    }

}
