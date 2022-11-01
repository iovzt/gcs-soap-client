<?php

class PAYMENT_STATUS
{

    /**
     * @var string $PAYMENT_STATUS
     */
    protected $PAYMENT_STATUS = null;

    /**
     * @var string $PAYMENT_STATUS_TEXT
     */
    protected $PAYMENT_STATUS_TEXT = null;

    /**
     * @var string $DESCRIPTION
     */
    protected $DESCRIPTION = null;

    /**
     * @param string $PAYMENT_STATUS
     * @param string $PAYMENT_STATUS_TEXT
     * @param string $DESCRIPTION
     */
    public function __construct($PAYMENT_STATUS, $PAYMENT_STATUS_TEXT, $DESCRIPTION)
    {
      $this->PAYMENT_STATUS = $PAYMENT_STATUS;
      $this->PAYMENT_STATUS_TEXT = $PAYMENT_STATUS_TEXT;
      $this->DESCRIPTION = $DESCRIPTION;
    }

    /**
     * @return string
     */
    public function getPAYMENT_STATUS()
    {
      return $this->PAYMENT_STATUS;
    }

    /**
     * @param string $PAYMENT_STATUS
     * @return PAYMENT_STATUS
     */
    public function setPAYMENT_STATUS($PAYMENT_STATUS)
    {
      $this->PAYMENT_STATUS = $PAYMENT_STATUS;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYMENT_STATUS_TEXT()
    {
      return $this->PAYMENT_STATUS_TEXT;
    }

    /**
     * @param string $PAYMENT_STATUS_TEXT
     * @return PAYMENT_STATUS
     */
    public function setPAYMENT_STATUS_TEXT($PAYMENT_STATUS_TEXT)
    {
      $this->PAYMENT_STATUS_TEXT = $PAYMENT_STATUS_TEXT;
      return $this;
    }

    /**
     * @return string
     */
    public function getDESCRIPTION()
    {
      return $this->DESCRIPTION;
    }

    /**
     * @param string $DESCRIPTION
     * @return PAYMENT_STATUS
     */
    public function setDESCRIPTION($DESCRIPTION)
    {
      $this->DESCRIPTION = $DESCRIPTION;
      return $this;
    }

}
