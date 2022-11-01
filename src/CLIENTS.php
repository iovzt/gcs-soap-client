<?php

class CLIENTS
{

    /**
     * @var string $ACCOUNT_ID
     */
    protected $ACCOUNT_ID = null;

    /**
     * @var string $COMPANY_ID
     */
    protected $COMPANY_ID = null;

    /**
     * @var string $CLIENT_ID
     */
    protected $CLIENT_ID = null;

    /**
     * @var string $LAST_NAME
     */
    protected $LAST_NAME = null;

    /**
     * @var string $FIRST_NAME
     */
    protected $FIRST_NAME = null;

    /**
     * @var string $SOC_SEC_NUM
     */
    protected $SOC_SEC_NUM = null;

    /**
     * @var string $ACTIVE_FLAG
     */
    protected $ACTIVE_FLAG = null;

    /**
     * @var float $ACCOUNT_BALANCE
     */
    protected $ACCOUNT_BALANCE = null;

    /**
     * @var float $PENDING_BALANCE
     */
    protected $PENDING_BALANCE = null;

    /**
     * @param string $ACCOUNT_ID
     * @param string $COMPANY_ID
     * @param string $CLIENT_ID
     * @param string $LAST_NAME
     * @param string $FIRST_NAME
     * @param string $SOC_SEC_NUM
     * @param string $ACTIVE_FLAG
     * @param float $ACCOUNT_BALANCE
     * @param float $PENDING_BALANCE
     */
    public function __construct($ACCOUNT_ID, $COMPANY_ID, $CLIENT_ID, $LAST_NAME, $FIRST_NAME, $SOC_SEC_NUM, $ACTIVE_FLAG, $ACCOUNT_BALANCE, $PENDING_BALANCE)
    {
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      $this->COMPANY_ID = $COMPANY_ID;
      $this->CLIENT_ID = $CLIENT_ID;
      $this->LAST_NAME = $LAST_NAME;
      $this->FIRST_NAME = $FIRST_NAME;
      $this->SOC_SEC_NUM = $SOC_SEC_NUM;
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
      $this->ACCOUNT_BALANCE = $ACCOUNT_BALANCE;
      $this->PENDING_BALANCE = $PENDING_BALANCE;
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
     * @return CLIENTS
     */
    public function setACCOUNT_ID($ACCOUNT_ID)
    {
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCOMPANY_ID()
    {
      return $this->COMPANY_ID;
    }

    /**
     * @param string $COMPANY_ID
     * @return CLIENTS
     */
    public function setCOMPANY_ID($COMPANY_ID)
    {
      $this->COMPANY_ID = $COMPANY_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCLIENT_ID()
    {
      return $this->CLIENT_ID;
    }

    /**
     * @param string $CLIENT_ID
     * @return CLIENTS
     */
    public function setCLIENT_ID($CLIENT_ID)
    {
      $this->CLIENT_ID = $CLIENT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getLAST_NAME()
    {
      return $this->LAST_NAME;
    }

    /**
     * @param string $LAST_NAME
     * @return CLIENTS
     */
    public function setLAST_NAME($LAST_NAME)
    {
      $this->LAST_NAME = $LAST_NAME;
      return $this;
    }

    /**
     * @return string
     */
    public function getFIRST_NAME()
    {
      return $this->FIRST_NAME;
    }

    /**
     * @param string $FIRST_NAME
     * @return CLIENTS
     */
    public function setFIRST_NAME($FIRST_NAME)
    {
      $this->FIRST_NAME = $FIRST_NAME;
      return $this;
    }

    /**
     * @return string
     */
    public function getSOC_SEC_NUM()
    {
      return $this->SOC_SEC_NUM;
    }

    /**
     * @param string $SOC_SEC_NUM
     * @return CLIENTS
     */
    public function setSOC_SEC_NUM($SOC_SEC_NUM)
    {
      $this->SOC_SEC_NUM = $SOC_SEC_NUM;
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
     * @return CLIENTS
     */
    public function setACTIVE_FLAG($ACTIVE_FLAG)
    {
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
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
     * @return CLIENTS
     */
    public function setACCOUNT_BALANCE($ACCOUNT_BALANCE)
    {
      $this->ACCOUNT_BALANCE = $ACCOUNT_BALANCE;
      return $this;
    }

    /**
     * @return float
     */
    public function getPENDING_BALANCE()
    {
      return $this->PENDING_BALANCE;
    }

    /**
     * @param float $PENDING_BALANCE
     * @return CLIENTS
     */
    public function setPENDING_BALANCE($PENDING_BALANCE)
    {
      $this->PENDING_BALANCE = $PENDING_BALANCE;
      return $this;
    }

}
