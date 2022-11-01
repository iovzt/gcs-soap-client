<?php

class TRANSACTION_STATUS
{

    /**
     * @var string $TRANSACTION_STATUS
     */
    protected $TRANSACTION_STATUS = null;

    /**
     * @var string $TRANSACTION_STATUS_TEXT
     */
    protected $TRANSACTION_STATUS_TEXT = null;

    /**
     * @var string $DESCRIPTION
     */
    protected $DESCRIPTION = null;

    /**
     * @param string $TRANSACTION_STATUS
     * @param string $TRANSACTION_STATUS_TEXT
     * @param string $DESCRIPTION
     */
    public function __construct($TRANSACTION_STATUS, $TRANSACTION_STATUS_TEXT, $DESCRIPTION)
    {
      $this->TRANSACTION_STATUS = $TRANSACTION_STATUS;
      $this->TRANSACTION_STATUS_TEXT = $TRANSACTION_STATUS_TEXT;
      $this->DESCRIPTION = $DESCRIPTION;
    }

    /**
     * @return string
     */
    public function getTRANSACTION_STATUS()
    {
      return $this->TRANSACTION_STATUS;
    }

    /**
     * @param string $TRANSACTION_STATUS
     * @return TRANSACTION_STATUS
     */
    public function setTRANSACTION_STATUS($TRANSACTION_STATUS)
    {
      $this->TRANSACTION_STATUS = $TRANSACTION_STATUS;
      return $this;
    }

    /**
     * @return string
     */
    public function getTRANSACTION_STATUS_TEXT()
    {
      return $this->TRANSACTION_STATUS_TEXT;
    }

    /**
     * @param string $TRANSACTION_STATUS_TEXT
     * @return TRANSACTION_STATUS
     */
    public function setTRANSACTION_STATUS_TEXT($TRANSACTION_STATUS_TEXT)
    {
      $this->TRANSACTION_STATUS_TEXT = $TRANSACTION_STATUS_TEXT;
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
     * @return TRANSACTION_STATUS
     */
    public function setDESCRIPTION($DESCRIPTION)
    {
      $this->DESCRIPTION = $DESCRIPTION;
      return $this;
    }

}
