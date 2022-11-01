<?php

class BANK_ACCOUNT_TYPES
{

    /**
     * @var string $BANK_ACCOUNT_TYPE
     */
    protected $BANK_ACCOUNT_TYPE = null;

    /**
     * @var string $BANK_ACCOUNT_TYPE_DESC
     */
    protected $BANK_ACCOUNT_TYPE_DESC = null;

    /**
     * @param string $BANK_ACCOUNT_TYPE
     * @param string $BANK_ACCOUNT_TYPE_DESC
     */
    public function __construct($BANK_ACCOUNT_TYPE, $BANK_ACCOUNT_TYPE_DESC)
    {
      $this->BANK_ACCOUNT_TYPE = $BANK_ACCOUNT_TYPE;
      $this->BANK_ACCOUNT_TYPE_DESC = $BANK_ACCOUNT_TYPE_DESC;
    }

    /**
     * @return string
     */
    public function getBANK_ACCOUNT_TYPE()
    {
      return $this->BANK_ACCOUNT_TYPE;
    }

    /**
     * @param string $BANK_ACCOUNT_TYPE
     * @return BANK_ACCOUNT_TYPES
     */
    public function setBANK_ACCOUNT_TYPE($BANK_ACCOUNT_TYPE)
    {
      $this->BANK_ACCOUNT_TYPE = $BANK_ACCOUNT_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getBANK_ACCOUNT_TYPE_DESC()
    {
      return $this->BANK_ACCOUNT_TYPE_DESC;
    }

    /**
     * @param string $BANK_ACCOUNT_TYPE_DESC
     * @return BANK_ACCOUNT_TYPES
     */
    public function setBANK_ACCOUNT_TYPE_DESC($BANK_ACCOUNT_TYPE_DESC)
    {
      $this->BANK_ACCOUNT_TYPE_DESC = $BANK_ACCOUNT_TYPE_DESC;
      return $this;
    }

}
