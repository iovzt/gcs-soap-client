<?php

class DEBTS
{

    /**
     * @var string $DEBT_ID
     */
    protected $DEBT_ID = null;

    /**
     * @var string $DRC_DEBT_ID
     */
    protected $DRC_DEBT_ID = null;

    /**
     * @var string $ACCOUNT_ID
     */
    protected $ACCOUNT_ID = null;

    /**
     * @var string $DEBT_DESC
     */
    protected $DEBT_DESC = null;

    /**
     * @var \DateTime $ENROLLED_DATE
     */
    protected $ENROLLED_DATE = null;

    /**
     * @var float $ORIGINAL_BALANCE
     */
    protected $ORIGINAL_BALANCE = null;

    /**
     * @var float $ENROLLED_BALANCE
     */
    protected $ENROLLED_BALANCE = null;

    /**
     * @var string $ORIGINAL_CREDITOR_NAME
     */
    protected $ORIGINAL_CREDITOR_NAME = null;

    /**
     * @var string $CURRENT_CREDITOR_NAME
     */
    protected $CURRENT_CREDITOR_NAME = null;

    /**
     * @var string $ORIGINAL_ACCOUNT_NUMBER
     */
    protected $ORIGINAL_ACCOUNT_NUMBER = null;

    /**
     * @var string $CURRENT_ACCOUNT_NUMBER
     */
    protected $CURRENT_ACCOUNT_NUMBER = null;

    /**
     * @var string $ALTERNATE_ACCOUNT_NUMBER
     */
    protected $ALTERNATE_ACCOUNT_NUMBER = null;

    /**
     * @var string $DEBT_TYPE
     */
    protected $DEBT_TYPE = null;

    /**
     * @var string $DEBT_STATUS
     */
    protected $DEBT_STATUS = null;

    /**
     * @var string $FEE_CALCULATION_METHOD
     */
    protected $FEE_CALCULATION_METHOD = null;

    /**
     * @var string $FEE_CALCULATION_VALUE
     */
    protected $FEE_CALCULATION_VALUE = null;

    /**
     * @var string $CREATED_BY
     */
    protected $CREATED_BY = null;

    /**
     * @var \DateTime $CREATED_DATE
     */
    protected $CREATED_DATE = null;

    /**
     * @var string $MODIFIED_BY
     */
    protected $MODIFIED_BY = null;

    /**
     * @var \DateTime $MODIFIED_DATE
     */
    protected $MODIFIED_DATE = null;

    /**
     * @var OFF_SYSTEM_PAYMENT $OFF_SYSTEM_PAYMENT
     */
    protected $OFF_SYSTEM_PAYMENT = null;

    /**
     * @param string $DEBT_ID
     * @param string $DRC_DEBT_ID
     * @param string $ACCOUNT_ID
     * @param string $DEBT_DESC
     * @param \DateTime $ENROLLED_DATE
     * @param float $ORIGINAL_BALANCE
     * @param float $ENROLLED_BALANCE
     * @param string $ORIGINAL_CREDITOR_NAME
     * @param string $CURRENT_CREDITOR_NAME
     * @param string $ORIGINAL_ACCOUNT_NUMBER
     * @param string $CURRENT_ACCOUNT_NUMBER
     * @param string $ALTERNATE_ACCOUNT_NUMBER
     * @param string $DEBT_TYPE
     * @param string $DEBT_STATUS
     * @param string $FEE_CALCULATION_METHOD
     * @param string $FEE_CALCULATION_VALUE
     * @param string $CREATED_BY
     * @param \DateTime $CREATED_DATE
     * @param string $MODIFIED_BY
     * @param \DateTime $MODIFIED_DATE
     * @param OFF_SYSTEM_PAYMENT $OFF_SYSTEM_PAYMENT
     */
    public function __construct($DEBT_ID, $DRC_DEBT_ID, $ACCOUNT_ID, $DEBT_DESC, \DateTime $ENROLLED_DATE, $ORIGINAL_BALANCE, $ENROLLED_BALANCE, $ORIGINAL_CREDITOR_NAME, $CURRENT_CREDITOR_NAME, $ORIGINAL_ACCOUNT_NUMBER, $CURRENT_ACCOUNT_NUMBER, $ALTERNATE_ACCOUNT_NUMBER, $DEBT_TYPE, $DEBT_STATUS, $FEE_CALCULATION_METHOD, $FEE_CALCULATION_VALUE, $CREATED_BY, \DateTime $CREATED_DATE, $MODIFIED_BY, \DateTime $MODIFIED_DATE, $OFF_SYSTEM_PAYMENT)
    {
      $this->DEBT_ID = $DEBT_ID;
      $this->DRC_DEBT_ID = $DRC_DEBT_ID;
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      $this->DEBT_DESC = $DEBT_DESC;
      $this->ENROLLED_DATE = $ENROLLED_DATE->format(\DateTime::ATOM);
      $this->ORIGINAL_BALANCE = $ORIGINAL_BALANCE;
      $this->ENROLLED_BALANCE = $ENROLLED_BALANCE;
      $this->ORIGINAL_CREDITOR_NAME = $ORIGINAL_CREDITOR_NAME;
      $this->CURRENT_CREDITOR_NAME = $CURRENT_CREDITOR_NAME;
      $this->ORIGINAL_ACCOUNT_NUMBER = $ORIGINAL_ACCOUNT_NUMBER;
      $this->CURRENT_ACCOUNT_NUMBER = $CURRENT_ACCOUNT_NUMBER;
      $this->ALTERNATE_ACCOUNT_NUMBER = $ALTERNATE_ACCOUNT_NUMBER;
      $this->DEBT_TYPE = $DEBT_TYPE;
      $this->DEBT_STATUS = $DEBT_STATUS;
      $this->FEE_CALCULATION_METHOD = $FEE_CALCULATION_METHOD;
      $this->FEE_CALCULATION_VALUE = $FEE_CALCULATION_VALUE;
      $this->CREATED_BY = $CREATED_BY;
      $this->CREATED_DATE = $CREATED_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_BY = $MODIFIED_BY;
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
      $this->OFF_SYSTEM_PAYMENT = $OFF_SYSTEM_PAYMENT;
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
     * @return DEBTS
     */
    public function setDEBT_ID($DEBT_ID)
    {
      $this->DEBT_ID = $DEBT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDRC_DEBT_ID()
    {
      return $this->DRC_DEBT_ID;
    }

    /**
     * @param string $DRC_DEBT_ID
     * @return DEBTS
     */
    public function setDRC_DEBT_ID($DRC_DEBT_ID)
    {
      $this->DRC_DEBT_ID = $DRC_DEBT_ID;
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
     * @return DEBTS
     */
    public function setACCOUNT_ID($ACCOUNT_ID)
    {
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDEBT_DESC()
    {
      return $this->DEBT_DESC;
    }

    /**
     * @param string $DEBT_DESC
     * @return DEBTS
     */
    public function setDEBT_DESC($DEBT_DESC)
    {
      $this->DEBT_DESC = $DEBT_DESC;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getENROLLED_DATE()
    {
      if ($this->ENROLLED_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ENROLLED_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ENROLLED_DATE
     * @return DEBTS
     */
    public function setENROLLED_DATE(\DateTime $ENROLLED_DATE)
    {
      $this->ENROLLED_DATE = $ENROLLED_DATE->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getORIGINAL_BALANCE()
    {
      return $this->ORIGINAL_BALANCE;
    }

    /**
     * @param float $ORIGINAL_BALANCE
     * @return DEBTS
     */
    public function setORIGINAL_BALANCE($ORIGINAL_BALANCE)
    {
      $this->ORIGINAL_BALANCE = $ORIGINAL_BALANCE;
      return $this;
    }

    /**
     * @return float
     */
    public function getENROLLED_BALANCE()
    {
      return $this->ENROLLED_BALANCE;
    }

    /**
     * @param float $ENROLLED_BALANCE
     * @return DEBTS
     */
    public function setENROLLED_BALANCE($ENROLLED_BALANCE)
    {
      $this->ENROLLED_BALANCE = $ENROLLED_BALANCE;
      return $this;
    }

    /**
     * @return string
     */
    public function getORIGINAL_CREDITOR_NAME()
    {
      return $this->ORIGINAL_CREDITOR_NAME;
    }

    /**
     * @param string $ORIGINAL_CREDITOR_NAME
     * @return DEBTS
     */
    public function setORIGINAL_CREDITOR_NAME($ORIGINAL_CREDITOR_NAME)
    {
      $this->ORIGINAL_CREDITOR_NAME = $ORIGINAL_CREDITOR_NAME;
      return $this;
    }

    /**
     * @return string
     */
    public function getCURRENT_CREDITOR_NAME()
    {
      return $this->CURRENT_CREDITOR_NAME;
    }

    /**
     * @param string $CURRENT_CREDITOR_NAME
     * @return DEBTS
     */
    public function setCURRENT_CREDITOR_NAME($CURRENT_CREDITOR_NAME)
    {
      $this->CURRENT_CREDITOR_NAME = $CURRENT_CREDITOR_NAME;
      return $this;
    }

    /**
     * @return string
     */
    public function getORIGINAL_ACCOUNT_NUMBER()
    {
      return $this->ORIGINAL_ACCOUNT_NUMBER;
    }

    /**
     * @param string $ORIGINAL_ACCOUNT_NUMBER
     * @return DEBTS
     */
    public function setORIGINAL_ACCOUNT_NUMBER($ORIGINAL_ACCOUNT_NUMBER)
    {
      $this->ORIGINAL_ACCOUNT_NUMBER = $ORIGINAL_ACCOUNT_NUMBER;
      return $this;
    }

    /**
     * @return string
     */
    public function getCURRENT_ACCOUNT_NUMBER()
    {
      return $this->CURRENT_ACCOUNT_NUMBER;
    }

    /**
     * @param string $CURRENT_ACCOUNT_NUMBER
     * @return DEBTS
     */
    public function setCURRENT_ACCOUNT_NUMBER($CURRENT_ACCOUNT_NUMBER)
    {
      $this->CURRENT_ACCOUNT_NUMBER = $CURRENT_ACCOUNT_NUMBER;
      return $this;
    }

    /**
     * @return string
     */
    public function getALTERNATE_ACCOUNT_NUMBER()
    {
      return $this->ALTERNATE_ACCOUNT_NUMBER;
    }

    /**
     * @param string $ALTERNATE_ACCOUNT_NUMBER
     * @return DEBTS
     */
    public function setALTERNATE_ACCOUNT_NUMBER($ALTERNATE_ACCOUNT_NUMBER)
    {
      $this->ALTERNATE_ACCOUNT_NUMBER = $ALTERNATE_ACCOUNT_NUMBER;
      return $this;
    }

    /**
     * @return string
     */
    public function getDEBT_TYPE()
    {
      return $this->DEBT_TYPE;
    }

    /**
     * @param string $DEBT_TYPE
     * @return DEBTS
     */
    public function setDEBT_TYPE($DEBT_TYPE)
    {
      $this->DEBT_TYPE = $DEBT_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getDEBT_STATUS()
    {
      return $this->DEBT_STATUS;
    }

    /**
     * @param string $DEBT_STATUS
     * @return DEBTS
     */
    public function setDEBT_STATUS($DEBT_STATUS)
    {
      $this->DEBT_STATUS = $DEBT_STATUS;
      return $this;
    }

    /**
     * @return string
     */
    public function getFEE_CALCULATION_METHOD()
    {
      return $this->FEE_CALCULATION_METHOD;
    }

    /**
     * @param string $FEE_CALCULATION_METHOD
     * @return DEBTS
     */
    public function setFEE_CALCULATION_METHOD($FEE_CALCULATION_METHOD)
    {
      $this->FEE_CALCULATION_METHOD = $FEE_CALCULATION_METHOD;
      return $this;
    }

    /**
     * @return string
     */
    public function getFEE_CALCULATION_VALUE()
    {
      return $this->FEE_CALCULATION_VALUE;
    }

    /**
     * @param string $FEE_CALCULATION_VALUE
     * @return DEBTS
     */
    public function setFEE_CALCULATION_VALUE($FEE_CALCULATION_VALUE)
    {
      $this->FEE_CALCULATION_VALUE = $FEE_CALCULATION_VALUE;
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
     * @return DEBTS
     */
    public function setCREATED_BY($CREATED_BY)
    {
      $this->CREATED_BY = $CREATED_BY;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCREATED_DATE()
    {
      if ($this->CREATED_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CREATED_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CREATED_DATE
     * @return DEBTS
     */
    public function setCREATED_DATE(\DateTime $CREATED_DATE)
    {
      $this->CREATED_DATE = $CREATED_DATE->format(\DateTime::ATOM);
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
     * @return DEBTS
     */
    public function setMODIFIED_BY($MODIFIED_BY)
    {
      $this->MODIFIED_BY = $MODIFIED_BY;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMODIFIED_DATE()
    {
      if ($this->MODIFIED_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->MODIFIED_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $MODIFIED_DATE
     * @return DEBTS
     */
    public function setMODIFIED_DATE(\DateTime $MODIFIED_DATE)
    {
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return OFF_SYSTEM_PAYMENT
     */
    public function getOFF_SYSTEM_PAYMENT()
    {
      return $this->OFF_SYSTEM_PAYMENT;
    }

    /**
     * @param OFF_SYSTEM_PAYMENT $OFF_SYSTEM_PAYMENT
     * @return DEBTS
     */
    public function setOFF_SYSTEM_PAYMENT($OFF_SYSTEM_PAYMENT)
    {
      $this->OFF_SYSTEM_PAYMENT = $OFF_SYSTEM_PAYMENT;
      return $this;
    }

}
