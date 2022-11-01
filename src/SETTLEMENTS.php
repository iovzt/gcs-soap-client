<?php

class SETTLEMENTS
{

    /**
     * @var string $SETTLEMENT_ID
     */
    protected $SETTLEMENT_ID = null;

    /**
     * @var string $DEBT_ID
     */
    protected $DEBT_ID = null;

    /**
     * @var string $DRC_SETTLEMENT_ID
     */
    protected $DRC_SETTLEMENT_ID = null;

    /**
     * @var string $ACCOUNT_ID
     */
    protected $ACCOUNT_ID = null;

    /**
     * @var string $SETTLEMENT_DESC
     */
    protected $SETTLEMENT_DESC = null;

    /**
     * @var string $SETTLEMENT_AMOUNT
     */
    protected $SETTLEMENT_AMOUNT = null;

    /**
     * @var float $SETTLEMENT_FEE_TOTAL
     */
    protected $SETTLEMENT_FEE_TOTAL = null;

    /**
     * @var string $BALANCE_AT_SETTLEMENT
     */
    protected $BALANCE_AT_SETTLEMENT = null;

    /**
     * @var string $SETTLEMENT_STATUS
     */
    protected $SETTLEMENT_STATUS = null;

    /**
     * @var string $SETTLEMENT_DATE
     */
    protected $SETTLEMENT_DATE = null;

    /**
     * @var string $PAYMENT_TYPE
     */
    protected $PAYMENT_TYPE = null;

    /**
     * @var string $PAYMENT_START_DATE
     */
    protected $PAYMENT_START_DATE = null;

    /**
     * @var int $PAYMENT_OCCURRENCES
     */
    protected $PAYMENT_OCCURRENCES = null;

    /**
     * @var string $PAYMENT_FREQUENCY
     */
    protected $PAYMENT_FREQUENCY = null;

    /**
     * @var float $PAYMENT_AMOUNT
     */
    protected $PAYMENT_AMOUNT = null;

    /**
     * @var string $CREATED_BY
     */
    protected $CREATED_BY = null;

    /**
     * @var string $CREATED_DATE
     */
    protected $CREATED_DATE = null;

    /**
     * @var string $MODIFIED_BY
     */
    protected $MODIFIED_BY = null;

    /**
     * @var string $MODIFIED_DATE
     */
    protected $MODIFIED_DATE = null;

    /**
     * @param string $SETTLEMENT_ID
     * @param string $DEBT_ID
     * @param string $DRC_SETTLEMENT_ID
     * @param string $ACCOUNT_ID
     * @param string $SETTLEMENT_DESC
     * @param string $SETTLEMENT_AMOUNT
     * @param float $SETTLEMENT_FEE_TOTAL
     * @param string $BALANCE_AT_SETTLEMENT
     * @param string $SETTLEMENT_STATUS
     * @param string $SETTLEMENT_DATE
     * @param string $PAYMENT_TYPE
     * @param string $PAYMENT_START_DATE
     * @param int $PAYMENT_OCCURRENCES
     * @param string $PAYMENT_FREQUENCY
     * @param float $PAYMENT_AMOUNT
     * @param string $CREATED_BY
     * @param string $CREATED_DATE
     * @param string $MODIFIED_BY
     * @param string $MODIFIED_DATE
     */
    public function __construct($SETTLEMENT_ID, $DEBT_ID, $DRC_SETTLEMENT_ID, $ACCOUNT_ID, $SETTLEMENT_DESC, $SETTLEMENT_AMOUNT, $SETTLEMENT_FEE_TOTAL, $BALANCE_AT_SETTLEMENT, $SETTLEMENT_STATUS, $SETTLEMENT_DATE, $PAYMENT_TYPE, $PAYMENT_START_DATE, $PAYMENT_OCCURRENCES, $PAYMENT_FREQUENCY, $PAYMENT_AMOUNT, $CREATED_BY, $CREATED_DATE, $MODIFIED_BY, $MODIFIED_DATE)
    {
      $this->SETTLEMENT_ID = $SETTLEMENT_ID;
      $this->DEBT_ID = $DEBT_ID;
      $this->DRC_SETTLEMENT_ID = $DRC_SETTLEMENT_ID;
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      $this->SETTLEMENT_DESC = $SETTLEMENT_DESC;
      $this->SETTLEMENT_AMOUNT = $SETTLEMENT_AMOUNT;
      $this->SETTLEMENT_FEE_TOTAL = $SETTLEMENT_FEE_TOTAL;
      $this->BALANCE_AT_SETTLEMENT = $BALANCE_AT_SETTLEMENT;
      $this->SETTLEMENT_STATUS = $SETTLEMENT_STATUS;
      $this->SETTLEMENT_DATE = $SETTLEMENT_DATE;
      $this->PAYMENT_TYPE = $PAYMENT_TYPE;
      $this->PAYMENT_START_DATE = $PAYMENT_START_DATE;
      $this->PAYMENT_OCCURRENCES = $PAYMENT_OCCURRENCES;
      $this->PAYMENT_FREQUENCY = $PAYMENT_FREQUENCY;
      $this->PAYMENT_AMOUNT = $PAYMENT_AMOUNT;
      $this->CREATED_BY = $CREATED_BY;
      $this->CREATED_DATE = $CREATED_DATE;
      $this->MODIFIED_BY = $MODIFIED_BY;
      $this->MODIFIED_DATE = $MODIFIED_DATE;
    }

    /**
     * @return string
     */
    public function getSETTLEMENT_ID()
    {
      return $this->SETTLEMENT_ID;
    }

    /**
     * @param string $SETTLEMENT_ID
     * @return SETTLEMENTS
     */
    public function setSETTLEMENT_ID($SETTLEMENT_ID)
    {
      $this->SETTLEMENT_ID = $SETTLEMENT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDEBT_ID()
    {
      return $this->DEBT_ID;
    }

    /**
     * @param string $DEBT_ID
     * @return SETTLEMENTS
     */
    public function setDEBT_ID($DEBT_ID)
    {
      $this->DEBT_ID = $DEBT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDRC_SETTLEMENT_ID()
    {
      return $this->DRC_SETTLEMENT_ID;
    }

    /**
     * @param string $DRC_SETTLEMENT_ID
     * @return SETTLEMENTS
     */
    public function setDRC_SETTLEMENT_ID($DRC_SETTLEMENT_ID)
    {
      $this->DRC_SETTLEMENT_ID = $DRC_SETTLEMENT_ID;
      return $this;
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
     * @return SETTLEMENTS
     */
    public function setACCOUNT_ID($ACCOUNT_ID)
    {
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSETTLEMENT_DESC()
    {
      return $this->SETTLEMENT_DESC;
    }

    /**
     * @param string $SETTLEMENT_DESC
     * @return SETTLEMENTS
     */
    public function setSETTLEMENT_DESC($SETTLEMENT_DESC)
    {
      $this->SETTLEMENT_DESC = $SETTLEMENT_DESC;
      return $this;
    }

    /**
     * @return string
     */
    public function getSETTLEMENT_AMOUNT()
    {
      return $this->SETTLEMENT_AMOUNT;
    }

    /**
     * @param string $SETTLEMENT_AMOUNT
     * @return SETTLEMENTS
     */
    public function setSETTLEMENT_AMOUNT($SETTLEMENT_AMOUNT)
    {
      $this->SETTLEMENT_AMOUNT = $SETTLEMENT_AMOUNT;
      return $this;
    }

    /**
     * @return float
     */
    public function getSETTLEMENT_FEE_TOTAL()
    {
      return $this->SETTLEMENT_FEE_TOTAL;
    }

    /**
     * @param float $SETTLEMENT_FEE_TOTAL
     * @return SETTLEMENTS
     */
    public function setSETTLEMENT_FEE_TOTAL($SETTLEMENT_FEE_TOTAL)
    {
      $this->SETTLEMENT_FEE_TOTAL = $SETTLEMENT_FEE_TOTAL;
      return $this;
    }

    /**
     * @return string
     */
    public function getBALANCE_AT_SETTLEMENT()
    {
      return $this->BALANCE_AT_SETTLEMENT;
    }

    /**
     * @param string $BALANCE_AT_SETTLEMENT
     * @return SETTLEMENTS
     */
    public function setBALANCE_AT_SETTLEMENT($BALANCE_AT_SETTLEMENT)
    {
      $this->BALANCE_AT_SETTLEMENT = $BALANCE_AT_SETTLEMENT;
      return $this;
    }

    /**
     * @return string
     */
    public function getSETTLEMENT_STATUS()
    {
      return $this->SETTLEMENT_STATUS;
    }

    /**
     * @param string $SETTLEMENT_STATUS
     * @return SETTLEMENTS
     */
    public function setSETTLEMENT_STATUS($SETTLEMENT_STATUS)
    {
      $this->SETTLEMENT_STATUS = $SETTLEMENT_STATUS;
      return $this;
    }

    /**
     * @return string
     */
    public function getSETTLEMENT_DATE()
    {
      return $this->SETTLEMENT_DATE;
    }

    /**
     * @param string $SETTLEMENT_DATE
     * @return SETTLEMENTS
     */
    public function setSETTLEMENT_DATE($SETTLEMENT_DATE)
    {
      $this->SETTLEMENT_DATE = $SETTLEMENT_DATE;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYMENT_TYPE()
    {
      return $this->PAYMENT_TYPE;
    }

    /**
     * @param string $PAYMENT_TYPE
     * @return SETTLEMENTS
     */
    public function setPAYMENT_TYPE($PAYMENT_TYPE)
    {
      $this->PAYMENT_TYPE = $PAYMENT_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYMENT_START_DATE()
    {
      return $this->PAYMENT_START_DATE;
    }

    /**
     * @param string $PAYMENT_START_DATE
     * @return SETTLEMENTS
     */
    public function setPAYMENT_START_DATE($PAYMENT_START_DATE)
    {
      $this->PAYMENT_START_DATE = $PAYMENT_START_DATE;
      return $this;
    }

    /**
     * @return int
     */
    public function getPAYMENT_OCCURRENCES()
    {
      return $this->PAYMENT_OCCURRENCES;
    }

    /**
     * @param int $PAYMENT_OCCURRENCES
     * @return SETTLEMENTS
     */
    public function setPAYMENT_OCCURRENCES($PAYMENT_OCCURRENCES)
    {
      $this->PAYMENT_OCCURRENCES = $PAYMENT_OCCURRENCES;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYMENT_FREQUENCY()
    {
      return $this->PAYMENT_FREQUENCY;
    }

    /**
     * @param string $PAYMENT_FREQUENCY
     * @return SETTLEMENTS
     */
    public function setPAYMENT_FREQUENCY($PAYMENT_FREQUENCY)
    {
      $this->PAYMENT_FREQUENCY = $PAYMENT_FREQUENCY;
      return $this;
    }

    /**
     * @return float
     */
    public function getPAYMENT_AMOUNT()
    {
      return $this->PAYMENT_AMOUNT;
    }

    /**
     * @param float $PAYMENT_AMOUNT
     * @return SETTLEMENTS
     */
    public function setPAYMENT_AMOUNT($PAYMENT_AMOUNT)
    {
      $this->PAYMENT_AMOUNT = $PAYMENT_AMOUNT;
      return $this;
    }

    /**
     * @return string
     */
    public function getCREATED_BY()
    {
      return $this->CREATED_BY;
    }

    /**
     * @param string $CREATED_BY
     * @return SETTLEMENTS
     */
    public function setCREATED_BY($CREATED_BY)
    {
      $this->CREATED_BY = $CREATED_BY;
      return $this;
    }

    /**
     * @return string
     */
    public function getCREATED_DATE()
    {
      return $this->CREATED_DATE;
    }

    /**
     * @param string $CREATED_DATE
     * @return SETTLEMENTS
     */
    public function setCREATED_DATE($CREATED_DATE)
    {
      $this->CREATED_DATE = $CREATED_DATE;
      return $this;
    }

    /**
     * @return string
     */
    public function getMODIFIED_BY()
    {
      return $this->MODIFIED_BY;
    }

    /**
     * @param string $MODIFIED_BY
     * @return SETTLEMENTS
     */
    public function setMODIFIED_BY($MODIFIED_BY)
    {
      $this->MODIFIED_BY = $MODIFIED_BY;
      return $this;
    }

    /**
     * @return string
     */
    public function getMODIFIED_DATE()
    {
      return $this->MODIFIED_DATE;
    }

    /**
     * @param string $MODIFIED_DATE
     * @return SETTLEMENTS
     */
    public function setMODIFIED_DATE($MODIFIED_DATE)
    {
      $this->MODIFIED_DATE = $MODIFIED_DATE;
      return $this;
    }

}
