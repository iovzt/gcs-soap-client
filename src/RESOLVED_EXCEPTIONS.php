<?php

class RESOLVED_EXCEPTIONS
{

    /**
     * @var string $EXCEPTION_ID
     */
    protected $EXCEPTION_ID = null;

    /**
     * @var string $ACCOUNT_ID
     */
    protected $ACCOUNT_ID = null;

    /**
     * @var string $CLIENT_ID
     */
    protected $CLIENT_ID = null;

    /**
     * @var string $PAYMENT_ID
     */
    protected $PAYMENT_ID = null;

    /**
     * @var float $PRESENTED_AMOUNT
     */
    protected $PRESENTED_AMOUNT = null;

    /**
     * @var \DateTime $DUE_DATE
     */
    protected $DUE_DATE = null;

    /**
     * @var string $EXCEPTION_TYPE
     */
    protected $EXCEPTION_TYPE = null;

    /**
     * @var \DateTime $CREATION_DATE
     */
    protected $CREATION_DATE = null;

    /**
     * @var \DateTime $PRESENTED_ITEM_DATE
     */
    protected $PRESENTED_ITEM_DATE = null;

    /**
     * @var string $ITEM_TYPE
     */
    protected $ITEM_TYPE = null;

    /**
     * @var string $PRIORITY_INDICATOR
     */
    protected $PRIORITY_INDICATOR = null;

    /**
     * @var string $PRESENTED_CLIENT_NAME
     */
    protected $PRESENTED_CLIENT_NAME = null;

    /**
     * @var string $PRESENTED_CREDITOR
     */
    protected $PRESENTED_CREDITOR = null;

    /**
     * @var string $PRESENTED_INDIVIDUAL_ID
     */
    protected $PRESENTED_INDIVIDUAL_ID = null;

    /**
     * @var string $REFERENCE_NUMBER
     */
    protected $REFERENCE_NUMBER = null;

    /**
     * @var string $SEC_CODE
     */
    protected $SEC_CODE = null;

    /**
     * @var float $CHECK_NUMBER
     */
    protected $CHECK_NUMBER = null;

    /**
     * @var boolean $ACKNOWLEDGED
     */
    protected $ACKNOWLEDGED = null;

    /**
     * @var \DateTime $RESOLVED_DATE
     */
    protected $RESOLVED_DATE = null;

    /**
     * @param string $EXCEPTION_ID
     * @param string $ACCOUNT_ID
     * @param string $CLIENT_ID
     * @param string $PAYMENT_ID
     * @param float $PRESENTED_AMOUNT
     * @param \DateTime $DUE_DATE
     * @param string $EXCEPTION_TYPE
     * @param \DateTime $CREATION_DATE
     * @param \DateTime $PRESENTED_ITEM_DATE
     * @param string $ITEM_TYPE
     * @param string $PRIORITY_INDICATOR
     * @param string $PRESENTED_CLIENT_NAME
     * @param string $PRESENTED_CREDITOR
     * @param string $PRESENTED_INDIVIDUAL_ID
     * @param string $REFERENCE_NUMBER
     * @param string $SEC_CODE
     * @param float $CHECK_NUMBER
     * @param boolean $ACKNOWLEDGED
     * @param \DateTime $RESOLVED_DATE
     */
    public function __construct($EXCEPTION_ID, $ACCOUNT_ID, $CLIENT_ID, $PAYMENT_ID, $PRESENTED_AMOUNT, \DateTime $DUE_DATE, $EXCEPTION_TYPE, \DateTime $CREATION_DATE, \DateTime $PRESENTED_ITEM_DATE, $ITEM_TYPE, $PRIORITY_INDICATOR, $PRESENTED_CLIENT_NAME, $PRESENTED_CREDITOR, $PRESENTED_INDIVIDUAL_ID, $REFERENCE_NUMBER, $SEC_CODE, $CHECK_NUMBER, $ACKNOWLEDGED, \DateTime $RESOLVED_DATE)
    {
      $this->EXCEPTION_ID = $EXCEPTION_ID;
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      $this->CLIENT_ID = $CLIENT_ID;
      $this->PAYMENT_ID = $PAYMENT_ID;
      $this->PRESENTED_AMOUNT = $PRESENTED_AMOUNT;
      $this->DUE_DATE = $DUE_DATE->format(\DateTime::ATOM);
      $this->EXCEPTION_TYPE = $EXCEPTION_TYPE;
      $this->CREATION_DATE = $CREATION_DATE->format(\DateTime::ATOM);
      $this->PRESENTED_ITEM_DATE = $PRESENTED_ITEM_DATE->format(\DateTime::ATOM);
      $this->ITEM_TYPE = $ITEM_TYPE;
      $this->PRIORITY_INDICATOR = $PRIORITY_INDICATOR;
      $this->PRESENTED_CLIENT_NAME = $PRESENTED_CLIENT_NAME;
      $this->PRESENTED_CREDITOR = $PRESENTED_CREDITOR;
      $this->PRESENTED_INDIVIDUAL_ID = $PRESENTED_INDIVIDUAL_ID;
      $this->REFERENCE_NUMBER = $REFERENCE_NUMBER;
      $this->SEC_CODE = $SEC_CODE;
      $this->CHECK_NUMBER = $CHECK_NUMBER;
      $this->ACKNOWLEDGED = $ACKNOWLEDGED;
      $this->RESOLVED_DATE = $RESOLVED_DATE->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getEXCEPTION_ID()
    {
      return $this->EXCEPTION_ID;
    }

    /**
     * @param string $EXCEPTION_ID
     * @return RESOLVED_EXCEPTIONS
     */
    public function setEXCEPTION_ID($EXCEPTION_ID)
    {
      $this->EXCEPTION_ID = $EXCEPTION_ID;
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
     * @return RESOLVED_EXCEPTIONS
     */
    public function setACCOUNT_ID($ACCOUNT_ID)
    {
      $this->ACCOUNT_ID = $ACCOUNT_ID;
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
     * @return RESOLVED_EXCEPTIONS
     */
    public function setCLIENT_ID($CLIENT_ID)
    {
      $this->CLIENT_ID = $CLIENT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYMENT_ID()
    {
      return $this->PAYMENT_ID;
    }

    /**
     * @param string $PAYMENT_ID
     * @return RESOLVED_EXCEPTIONS
     */
    public function setPAYMENT_ID($PAYMENT_ID)
    {
      $this->PAYMENT_ID = $PAYMENT_ID;
      return $this;
    }

    /**
     * @return float
     */
    public function getPRESENTED_AMOUNT()
    {
      return $this->PRESENTED_AMOUNT;
    }

    /**
     * @param float $PRESENTED_AMOUNT
     * @return RESOLVED_EXCEPTIONS
     */
    public function setPRESENTED_AMOUNT($PRESENTED_AMOUNT)
    {
      $this->PRESENTED_AMOUNT = $PRESENTED_AMOUNT;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDUE_DATE()
    {
      if ($this->DUE_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DUE_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DUE_DATE
     * @return RESOLVED_EXCEPTIONS
     */
    public function setDUE_DATE(\DateTime $DUE_DATE)
    {
      $this->DUE_DATE = $DUE_DATE->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getEXCEPTION_TYPE()
    {
      return $this->EXCEPTION_TYPE;
    }

    /**
     * @param string $EXCEPTION_TYPE
     * @return RESOLVED_EXCEPTIONS
     */
    public function setEXCEPTION_TYPE($EXCEPTION_TYPE)
    {
      $this->EXCEPTION_TYPE = $EXCEPTION_TYPE;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCREATION_DATE()
    {
      if ($this->CREATION_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CREATION_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CREATION_DATE
     * @return RESOLVED_EXCEPTIONS
     */
    public function setCREATION_DATE(\DateTime $CREATION_DATE)
    {
      $this->CREATION_DATE = $CREATION_DATE->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPRESENTED_ITEM_DATE()
    {
      if ($this->PRESENTED_ITEM_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PRESENTED_ITEM_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PRESENTED_ITEM_DATE
     * @return RESOLVED_EXCEPTIONS
     */
    public function setPRESENTED_ITEM_DATE(\DateTime $PRESENTED_ITEM_DATE)
    {
      $this->PRESENTED_ITEM_DATE = $PRESENTED_ITEM_DATE->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getITEM_TYPE()
    {
      return $this->ITEM_TYPE;
    }

    /**
     * @param string $ITEM_TYPE
     * @return RESOLVED_EXCEPTIONS
     */
    public function setITEM_TYPE($ITEM_TYPE)
    {
      $this->ITEM_TYPE = $ITEM_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getPRIORITY_INDICATOR()
    {
      return $this->PRIORITY_INDICATOR;
    }

    /**
     * @param string $PRIORITY_INDICATOR
     * @return RESOLVED_EXCEPTIONS
     */
    public function setPRIORITY_INDICATOR($PRIORITY_INDICATOR)
    {
      $this->PRIORITY_INDICATOR = $PRIORITY_INDICATOR;
      return $this;
    }

    /**
     * @return string
     */
    public function getPRESENTED_CLIENT_NAME()
    {
      return $this->PRESENTED_CLIENT_NAME;
    }

    /**
     * @param string $PRESENTED_CLIENT_NAME
     * @return RESOLVED_EXCEPTIONS
     */
    public function setPRESENTED_CLIENT_NAME($PRESENTED_CLIENT_NAME)
    {
      $this->PRESENTED_CLIENT_NAME = $PRESENTED_CLIENT_NAME;
      return $this;
    }

    /**
     * @return string
     */
    public function getPRESENTED_CREDITOR()
    {
      return $this->PRESENTED_CREDITOR;
    }

    /**
     * @param string $PRESENTED_CREDITOR
     * @return RESOLVED_EXCEPTIONS
     */
    public function setPRESENTED_CREDITOR($PRESENTED_CREDITOR)
    {
      $this->PRESENTED_CREDITOR = $PRESENTED_CREDITOR;
      return $this;
    }

    /**
     * @return string
     */
    public function getPRESENTED_INDIVIDUAL_ID()
    {
      return $this->PRESENTED_INDIVIDUAL_ID;
    }

    /**
     * @param string $PRESENTED_INDIVIDUAL_ID
     * @return RESOLVED_EXCEPTIONS
     */
    public function setPRESENTED_INDIVIDUAL_ID($PRESENTED_INDIVIDUAL_ID)
    {
      $this->PRESENTED_INDIVIDUAL_ID = $PRESENTED_INDIVIDUAL_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getREFERENCE_NUMBER()
    {
      return $this->REFERENCE_NUMBER;
    }

    /**
     * @param string $REFERENCE_NUMBER
     * @return RESOLVED_EXCEPTIONS
     */
    public function setREFERENCE_NUMBER($REFERENCE_NUMBER)
    {
      $this->REFERENCE_NUMBER = $REFERENCE_NUMBER;
      return $this;
    }

    /**
     * @return string
     */
    public function getSEC_CODE()
    {
      return $this->SEC_CODE;
    }

    /**
     * @param string $SEC_CODE
     * @return RESOLVED_EXCEPTIONS
     */
    public function setSEC_CODE($SEC_CODE)
    {
      $this->SEC_CODE = $SEC_CODE;
      return $this;
    }

    /**
     * @return float
     */
    public function getCHECK_NUMBER()
    {
      return $this->CHECK_NUMBER;
    }

    /**
     * @param float $CHECK_NUMBER
     * @return RESOLVED_EXCEPTIONS
     */
    public function setCHECK_NUMBER($CHECK_NUMBER)
    {
      $this->CHECK_NUMBER = $CHECK_NUMBER;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getACKNOWLEDGED()
    {
      return $this->ACKNOWLEDGED;
    }

    /**
     * @param boolean $ACKNOWLEDGED
     * @return RESOLVED_EXCEPTIONS
     */
    public function setACKNOWLEDGED($ACKNOWLEDGED)
    {
      $this->ACKNOWLEDGED = $ACKNOWLEDGED;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRESOLVED_DATE()
    {
      if ($this->RESOLVED_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RESOLVED_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RESOLVED_DATE
     * @return RESOLVED_EXCEPTIONS
     */
    public function setRESOLVED_DATE(\DateTime $RESOLVED_DATE)
    {
      $this->RESOLVED_DATE = $RESOLVED_DATE->format(\DateTime::ATOM);
      return $this;
    }

}
