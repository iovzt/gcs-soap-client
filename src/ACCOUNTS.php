<?php

class ACCOUNTS
{

    /**
     * @var string $ACCOUNT_ID
     */
    protected $ACCOUNT_ID = null;

    /**
     * @var string $ACTIVE_FLAG
     */
    protected $ACTIVE_FLAG = null;

    /**
     * @var string $IN_USE
     */
    protected $IN_USE = null;

    /**
     * @var float $ACCOUNT_BALANCE
     */
    protected $ACCOUNT_BALANCE = null;

    /**
     * @param string $ACCOUNT_ID
     * @param string $ACTIVE_FLAG
     * @param string $IN_USE
     * @param float $ACCOUNT_BALANCE
     */
    public function __construct($ACCOUNT_ID, $ACTIVE_FLAG, $IN_USE, $ACCOUNT_BALANCE)
    {
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
      $this->IN_USE = $IN_USE;
      $this->ACCOUNT_BALANCE = $ACCOUNT_BALANCE;
    }

    /**
     * @return string
     */
    public function getACCOUNT_ID()
    {
      return $this->ACCOUNT_ID;
    }

    /**
     * @param string $ACCOUNT_ID
     * @return ACCOUNTS
     */
    public function setACCOUNT_ID($ACCOUNT_ID)
    {
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getACTIVE_FLAG()
    {
      return $this->ACTIVE_FLAG;
    }

    /**
     * @param string $ACTIVE_FLAG
     * @return ACCOUNTS
     */
    public function setACTIVE_FLAG($ACTIVE_FLAG)
    {
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
      return $this;
    }

    /**
     * @return string
     */
    public function getIN_USE()
    {
      return $this->IN_USE;
    }

    /**
     * @param string $IN_USE
     * @return ACCOUNTS
     */
    public function setIN_USE($IN_USE)
    {
      $this->IN_USE = $IN_USE;
      return $this;
    }

    /**
     * @return float
     */
    public function getACCOUNT_BALANCE()
    {
      return $this->ACCOUNT_BALANCE;
    }

    /**
     * @param float $ACCOUNT_BALANCE
     * @return ACCOUNTS
     */
    public function setACCOUNT_BALANCE($ACCOUNT_BALANCE)
    {
      $this->ACCOUNT_BALANCE = $ACCOUNT_BALANCE;
      return $this;
    }

}
