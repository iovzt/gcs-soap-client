<?php

class PAYMENTS
{

    /**
     * @var float $PAYMENT_ID
     */
    protected $PAYMENT_ID = null;

    /**
     * @var string $COMPANY_ID
     */
    protected $COMPANY_ID = null;

    /**
     * @var string $ACCOUNT_ID
     */
    protected $ACCOUNT_ID = null;

    /**
     * @var string $PAYMENT_CLASS
     */
    protected $PAYMENT_CLASS = null;

    /**
     * @var string $PAYMENT_TYPE
     */
    protected $PAYMENT_TYPE = null;

    /**
     * @var \DateTime $EFFECTIVE_DATE
     */
    protected $EFFECTIVE_DATE = null;

    /**
     * @var float $PAYMENT_AMOUNT
     */
    protected $PAYMENT_AMOUNT = null;

    /**
     * @var float $FEE_AMOUNT
     */
    protected $FEE_AMOUNT = null;

    /**
     * @var float $FAIRSHARE_AMOUNT
     */
    protected $FAIRSHARE_AMOUNT = null;

    /**
     * @var string $ACTIVE_FLAG
     */
    protected $ACTIVE_FLAG = null;

    /**
     * @var string $PAYMENT_STATUS
     */
    protected $PAYMENT_STATUS = null;

    /**
     * @var string $PAYMENT_AUTHORIZED
     */
    protected $PAYMENT_AUTHORIZED = null;

    /**
     * @var string $PAYMENT_AUTHORIZED_BY
     */
    protected $PAYMENT_AUTHORIZED_BY = null;

    /**
     * @var float $PAYEE_ID
     */
    protected $PAYEE_ID = null;

    /**
     * @var float $PAYEE_ADDRESS_ID
     */
    protected $PAYEE_ADDRESS_ID = null;

    /**
     * @var float $PAYEE_BANK_ID
     */
    protected $PAYEE_BANK_ID = null;

    /**
     * @var float $PAYEE_CONTACT_ID
     */
    protected $PAYEE_CONTACT_ID = null;

    /**
     * @var string $PAYEE_CLIENT_NUM
     */
    protected $PAYEE_CLIENT_NUM = null;

    /**
     * @var string $TRACKING_NUMBER
     */
    protected $TRACKING_NUMBER = null;

    /**
     * @var float $CHECK_NUMBER
     */
    protected $CHECK_NUMBER = null;

    /**
     * @var string $MEMO_1
     */
    protected $MEMO_1 = null;

    /**
     * @var string $MEMO_2
     */
    protected $MEMO_2 = null;

    /**
     * @var string $MEMO_3
     */
    protected $MEMO_3 = null;

    /**
     * @var float $CLEARED_FLAG
     */
    protected $CLEARED_FLAG = null;

    /**
     * @var \DateTime $CLEARED_DATE
     */
    protected $CLEARED_DATE = null;

    /**
     * @var string $DRC_TRANSACTION_ID
     */
    protected $DRC_TRANSACTION_ID = null;

    /**
     * @var \DateTime $CREATION_DATE
     */
    protected $CREATION_DATE = null;

    /**
     * @var \DateTime $MODIFIED_DATE
     */
    protected $MODIFIED_DATE = null;

    /**
     * @var string $MODIFIED_BY
     */
    protected $MODIFIED_BY = null;

    /**
     * @var float $ORIGINAL_ID
     */
    protected $ORIGINAL_ID = null;

    /**
     * @var \DateTime $AUTHORIZE_BY_DATE
     */
    protected $AUTHORIZE_BY_DATE = null;

    /**
     * @var string $PAYEE_NAME
     */
    protected $PAYEE_NAME = null;

    /**
     * @var int $ROW_NUMBER
     */
    protected $ROW_NUMBER = null;

    /**
     * @var string $CUSTOM1
     */
    protected $CUSTOM1 = null;

    /**
     * @var string $CUSTOM2
     */
    protected $CUSTOM2 = null;

    /**
     * @var string $CUSTOM3
     */
    protected $CUSTOM3 = null;

    /**
     * @var string $CUSTOM4
     */
    protected $CUSTOM4 = null;

    /**
     * @var string $CUSTOM5
     */
    protected $CUSTOM5 = null;

    /**
     * @var string $CUSTOM6
     */
    protected $CUSTOM6 = null;

    /**
     * @param float $PAYMENT_ID
     * @param string $COMPANY_ID
     * @param string $ACCOUNT_ID
     * @param string $PAYMENT_CLASS
     * @param string $PAYMENT_TYPE
     * @param \DateTime $EFFECTIVE_DATE
     * @param float $PAYMENT_AMOUNT
     * @param float $FEE_AMOUNT
     * @param float $FAIRSHARE_AMOUNT
     * @param string $ACTIVE_FLAG
     * @param string $PAYMENT_STATUS
     * @param string $PAYMENT_AUTHORIZED
     * @param string $PAYMENT_AUTHORIZED_BY
     * @param float $PAYEE_ID
     * @param float $PAYEE_ADDRESS_ID
     * @param float $PAYEE_BANK_ID
     * @param float $PAYEE_CONTACT_ID
     * @param string $PAYEE_CLIENT_NUM
     * @param string $TRACKING_NUMBER
     * @param float $CHECK_NUMBER
     * @param string $MEMO_1
     * @param string $MEMO_2
     * @param string $MEMO_3
     * @param float $CLEARED_FLAG
     * @param \DateTime $CLEARED_DATE
     * @param string $DRC_TRANSACTION_ID
     * @param \DateTime $CREATION_DATE
     * @param \DateTime $MODIFIED_DATE
     * @param string $MODIFIED_BY
     * @param float $ORIGINAL_ID
     * @param \DateTime $AUTHORIZE_BY_DATE
     * @param string $PAYEE_NAME
     * @param int $ROW_NUMBER
     * @param string $CUSTOM1
     * @param string $CUSTOM2
     * @param string $CUSTOM3
     * @param string $CUSTOM4
     * @param string $CUSTOM5
     * @param string $CUSTOM6
     */
    public function __construct($PAYMENT_ID, $COMPANY_ID, $ACCOUNT_ID, $PAYMENT_CLASS, $PAYMENT_TYPE, \DateTime $EFFECTIVE_DATE, $PAYMENT_AMOUNT, $FEE_AMOUNT, $FAIRSHARE_AMOUNT, $ACTIVE_FLAG, $PAYMENT_STATUS, $PAYMENT_AUTHORIZED, $PAYMENT_AUTHORIZED_BY, $PAYEE_ID, $PAYEE_ADDRESS_ID, $PAYEE_BANK_ID, $PAYEE_CONTACT_ID, $PAYEE_CLIENT_NUM, $TRACKING_NUMBER, $CHECK_NUMBER, $MEMO_1, $MEMO_2, $MEMO_3, $CLEARED_FLAG, \DateTime $CLEARED_DATE, $DRC_TRANSACTION_ID, \DateTime $CREATION_DATE, \DateTime $MODIFIED_DATE, $MODIFIED_BY, $ORIGINAL_ID, \DateTime $AUTHORIZE_BY_DATE, $PAYEE_NAME, $ROW_NUMBER, $CUSTOM1, $CUSTOM2, $CUSTOM3, $CUSTOM4, $CUSTOM5, $CUSTOM6)
    {
      $this->PAYMENT_ID = $PAYMENT_ID;
      $this->COMPANY_ID = $COMPANY_ID;
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      $this->PAYMENT_CLASS = $PAYMENT_CLASS;
      $this->PAYMENT_TYPE = $PAYMENT_TYPE;
      $this->EFFECTIVE_DATE = $EFFECTIVE_DATE->format(\DateTime::ATOM);
      $this->PAYMENT_AMOUNT = $PAYMENT_AMOUNT;
      $this->FEE_AMOUNT = $FEE_AMOUNT;
      $this->FAIRSHARE_AMOUNT = $FAIRSHARE_AMOUNT;
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
      $this->PAYMENT_STATUS = $PAYMENT_STATUS;
      $this->PAYMENT_AUTHORIZED = $PAYMENT_AUTHORIZED;
      $this->PAYMENT_AUTHORIZED_BY = $PAYMENT_AUTHORIZED_BY;
      $this->PAYEE_ID = $PAYEE_ID;
      $this->PAYEE_ADDRESS_ID = $PAYEE_ADDRESS_ID;
      $this->PAYEE_BANK_ID = $PAYEE_BANK_ID;
      $this->PAYEE_CONTACT_ID = $PAYEE_CONTACT_ID;
      $this->PAYEE_CLIENT_NUM = $PAYEE_CLIENT_NUM;
      $this->TRACKING_NUMBER = $TRACKING_NUMBER;
      $this->CHECK_NUMBER = $CHECK_NUMBER;
      $this->MEMO_1 = $MEMO_1;
      $this->MEMO_2 = $MEMO_2;
      $this->MEMO_3 = $MEMO_3;
      $this->CLEARED_FLAG = $CLEARED_FLAG;
      $this->CLEARED_DATE = $CLEARED_DATE->format(\DateTime::ATOM);
      $this->DRC_TRANSACTION_ID = $DRC_TRANSACTION_ID;
      $this->CREATION_DATE = $CREATION_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_BY = $MODIFIED_BY;
      $this->ORIGINAL_ID = $ORIGINAL_ID;
      $this->AUTHORIZE_BY_DATE = $AUTHORIZE_BY_DATE->format(\DateTime::ATOM);
      $this->PAYEE_NAME = $PAYEE_NAME;
      $this->ROW_NUMBER = $ROW_NUMBER;
      $this->CUSTOM1 = $CUSTOM1;
      $this->CUSTOM2 = $CUSTOM2;
      $this->CUSTOM3 = $CUSTOM3;
      $this->CUSTOM4 = $CUSTOM4;
      $this->CUSTOM5 = $CUSTOM5;
      $this->CUSTOM6 = $CUSTOM6;
    }

    /**
     * @return float
     */
    public function getPAYMENT_ID()
    {
      return $this->PAYMENT_ID;
    }

    /**
     * @param float $PAYMENT_ID
     * @return PAYMENTS
     */
    public function setPAYMENT_ID($PAYMENT_ID)
    {
      $this->PAYMENT_ID = $PAYMENT_ID;
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
     * @return PAYMENTS
     */
    public function setCOMPANY_ID($COMPANY_ID)
    {
      $this->COMPANY_ID = $COMPANY_ID;
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
     * @return PAYMENTS
     */
    public function setACCOUNT_ID($ACCOUNT_ID)
    {
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      return $this;
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
     * @return PAYMENTS
     */
    public function setPAYMENT_CLASS($PAYMENT_CLASS)
    {
      $this->PAYMENT_CLASS = $PAYMENT_CLASS;
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
     * @return PAYMENTS
     */
    public function setPAYMENT_TYPE($PAYMENT_TYPE)
    {
      $this->PAYMENT_TYPE = $PAYMENT_TYPE;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEFFECTIVE_DATE()
    {
      if ($this->EFFECTIVE_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EFFECTIVE_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EFFECTIVE_DATE
     * @return PAYMENTS
     */
    public function setEFFECTIVE_DATE(\DateTime $EFFECTIVE_DATE)
    {
      $this->EFFECTIVE_DATE = $EFFECTIVE_DATE->format(\DateTime::ATOM);
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
     * @return PAYMENTS
     */
    public function setPAYMENT_AMOUNT($PAYMENT_AMOUNT)
    {
      $this->PAYMENT_AMOUNT = $PAYMENT_AMOUNT;
      return $this;
    }

    /**
     * @return float
     */
    public function getFEE_AMOUNT()
    {
      return $this->FEE_AMOUNT;
    }

    /**
     * @param float $FEE_AMOUNT
     * @return PAYMENTS
     */
    public function setFEE_AMOUNT($FEE_AMOUNT)
    {
      $this->FEE_AMOUNT = $FEE_AMOUNT;
      return $this;
    }

    /**
     * @return float
     */
    public function getFAIRSHARE_AMOUNT()
    {
      return $this->FAIRSHARE_AMOUNT;
    }

    /**
     * @param float $FAIRSHARE_AMOUNT
     * @return PAYMENTS
     */
    public function setFAIRSHARE_AMOUNT($FAIRSHARE_AMOUNT)
    {
      $this->FAIRSHARE_AMOUNT = $FAIRSHARE_AMOUNT;
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
     * @return PAYMENTS
     */
    public function setACTIVE_FLAG($ACTIVE_FLAG)
    {
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
      return $this;
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
     * @return PAYMENTS
     */
    public function setPAYMENT_STATUS($PAYMENT_STATUS)
    {
      $this->PAYMENT_STATUS = $PAYMENT_STATUS;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYMENT_AUTHORIZED()
    {
      return $this->PAYMENT_AUTHORIZED;
    }

    /**
     * @param string $PAYMENT_AUTHORIZED
     * @return PAYMENTS
     */
    public function setPAYMENT_AUTHORIZED($PAYMENT_AUTHORIZED)
    {
      $this->PAYMENT_AUTHORIZED = $PAYMENT_AUTHORIZED;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYMENT_AUTHORIZED_BY()
    {
      return $this->PAYMENT_AUTHORIZED_BY;
    }

    /**
     * @param string $PAYMENT_AUTHORIZED_BY
     * @return PAYMENTS
     */
    public function setPAYMENT_AUTHORIZED_BY($PAYMENT_AUTHORIZED_BY)
    {
      $this->PAYMENT_AUTHORIZED_BY = $PAYMENT_AUTHORIZED_BY;
      return $this;
    }

    /**
     * @return float
     */
    public function getPAYEE_ID()
    {
      return $this->PAYEE_ID;
    }

    /**
     * @param float $PAYEE_ID
     * @return PAYMENTS
     */
    public function setPAYEE_ID($PAYEE_ID)
    {
      $this->PAYEE_ID = $PAYEE_ID;
      return $this;
    }

    /**
     * @return float
     */
    public function getPAYEE_ADDRESS_ID()
    {
      return $this->PAYEE_ADDRESS_ID;
    }

    /**
     * @param float $PAYEE_ADDRESS_ID
     * @return PAYMENTS
     */
    public function setPAYEE_ADDRESS_ID($PAYEE_ADDRESS_ID)
    {
      $this->PAYEE_ADDRESS_ID = $PAYEE_ADDRESS_ID;
      return $this;
    }

    /**
     * @return float
     */
    public function getPAYEE_BANK_ID()
    {
      return $this->PAYEE_BANK_ID;
    }

    /**
     * @param float $PAYEE_BANK_ID
     * @return PAYMENTS
     */
    public function setPAYEE_BANK_ID($PAYEE_BANK_ID)
    {
      $this->PAYEE_BANK_ID = $PAYEE_BANK_ID;
      return $this;
    }

    /**
     * @return float
     */
    public function getPAYEE_CONTACT_ID()
    {
      return $this->PAYEE_CONTACT_ID;
    }

    /**
     * @param float $PAYEE_CONTACT_ID
     * @return PAYMENTS
     */
    public function setPAYEE_CONTACT_ID($PAYEE_CONTACT_ID)
    {
      $this->PAYEE_CONTACT_ID = $PAYEE_CONTACT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYEE_CLIENT_NUM()
    {
      return $this->PAYEE_CLIENT_NUM;
    }

    /**
     * @param string $PAYEE_CLIENT_NUM
     * @return PAYMENTS
     */
    public function setPAYEE_CLIENT_NUM($PAYEE_CLIENT_NUM)
    {
      $this->PAYEE_CLIENT_NUM = $PAYEE_CLIENT_NUM;
      return $this;
    }

    /**
     * @return string
     */
    public function getTRACKING_NUMBER()
    {
      return $this->TRACKING_NUMBER;
    }

    /**
     * @param string $TRACKING_NUMBER
     * @return PAYMENTS
     */
    public function setTRACKING_NUMBER($TRACKING_NUMBER)
    {
      $this->TRACKING_NUMBER = $TRACKING_NUMBER;
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
     * @return PAYMENTS
     */
    public function setCHECK_NUMBER($CHECK_NUMBER)
    {
      $this->CHECK_NUMBER = $CHECK_NUMBER;
      return $this;
    }

    /**
     * @return string
     */
    public function getMEMO_1()
    {
      return $this->MEMO_1;
    }

    /**
     * @param string $MEMO_1
     * @return PAYMENTS
     */
    public function setMEMO_1($MEMO_1)
    {
      $this->MEMO_1 = $MEMO_1;
      return $this;
    }

    /**
     * @return string
     */
    public function getMEMO_2()
    {
      return $this->MEMO_2;
    }

    /**
     * @param string $MEMO_2
     * @return PAYMENTS
     */
    public function setMEMO_2($MEMO_2)
    {
      $this->MEMO_2 = $MEMO_2;
      return $this;
    }

    /**
     * @return string
     */
    public function getMEMO_3()
    {
      return $this->MEMO_3;
    }

    /**
     * @param string $MEMO_3
     * @return PAYMENTS
     */
    public function setMEMO_3($MEMO_3)
    {
      $this->MEMO_3 = $MEMO_3;
      return $this;
    }

    /**
     * @return float
     */
    public function getCLEARED_FLAG()
    {
      return $this->CLEARED_FLAG;
    }

    /**
     * @param float $CLEARED_FLAG
     * @return PAYMENTS
     */
    public function setCLEARED_FLAG($CLEARED_FLAG)
    {
      $this->CLEARED_FLAG = $CLEARED_FLAG;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCLEARED_DATE()
    {
      if ($this->CLEARED_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CLEARED_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CLEARED_DATE
     * @return PAYMENTS
     */
    public function setCLEARED_DATE(\DateTime $CLEARED_DATE)
    {
      $this->CLEARED_DATE = $CLEARED_DATE->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getDRC_TRANSACTION_ID()
    {
      return $this->DRC_TRANSACTION_ID;
    }

    /**
     * @param string $DRC_TRANSACTION_ID
     * @return PAYMENTS
     */
    public function setDRC_TRANSACTION_ID($DRC_TRANSACTION_ID)
    {
      $this->DRC_TRANSACTION_ID = $DRC_TRANSACTION_ID;
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
     * @return PAYMENTS
     */
    public function setCREATION_DATE(\DateTime $CREATION_DATE)
    {
      $this->CREATION_DATE = $CREATION_DATE->format(\DateTime::ATOM);
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
     * @return PAYMENTS
     */
    public function setMODIFIED_DATE(\DateTime $MODIFIED_DATE)
    {
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
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
     * @return PAYMENTS
     */
    public function setMODIFIED_BY($MODIFIED_BY)
    {
      $this->MODIFIED_BY = $MODIFIED_BY;
      return $this;
    }

    /**
     * @return float
     */
    public function getORIGINAL_ID()
    {
      return $this->ORIGINAL_ID;
    }

    /**
     * @param float $ORIGINAL_ID
     * @return PAYMENTS
     */
    public function setORIGINAL_ID($ORIGINAL_ID)
    {
      $this->ORIGINAL_ID = $ORIGINAL_ID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAUTHORIZE_BY_DATE()
    {
      if ($this->AUTHORIZE_BY_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AUTHORIZE_BY_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AUTHORIZE_BY_DATE
     * @return PAYMENTS
     */
    public function setAUTHORIZE_BY_DATE(\DateTime $AUTHORIZE_BY_DATE)
    {
      $this->AUTHORIZE_BY_DATE = $AUTHORIZE_BY_DATE->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYEE_NAME()
    {
      return $this->PAYEE_NAME;
    }

    /**
     * @param string $PAYEE_NAME
     * @return PAYMENTS
     */
    public function setPAYEE_NAME($PAYEE_NAME)
    {
      $this->PAYEE_NAME = $PAYEE_NAME;
      return $this;
    }

    /**
     * @return int
     */
    public function getROW_NUMBER()
    {
      return $this->ROW_NUMBER;
    }

    /**
     * @param int $ROW_NUMBER
     * @return PAYMENTS
     */
    public function setROW_NUMBER($ROW_NUMBER)
    {
      $this->ROW_NUMBER = $ROW_NUMBER;
      return $this;
    }

    /**
     * @return string
     */
    public function getCUSTOM1()
    {
      return $this->CUSTOM1;
    }

    /**
     * @param string $CUSTOM1
     * @return PAYMENTS
     */
    public function setCUSTOM1($CUSTOM1)
    {
      $this->CUSTOM1 = $CUSTOM1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCUSTOM2()
    {
      return $this->CUSTOM2;
    }

    /**
     * @param string $CUSTOM2
     * @return PAYMENTS
     */
    public function setCUSTOM2($CUSTOM2)
    {
      $this->CUSTOM2 = $CUSTOM2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCUSTOM3()
    {
      return $this->CUSTOM3;
    }

    /**
     * @param string $CUSTOM3
     * @return PAYMENTS
     */
    public function setCUSTOM3($CUSTOM3)
    {
      $this->CUSTOM3 = $CUSTOM3;
      return $this;
    }

    /**
     * @return string
     */
    public function getCUSTOM4()
    {
      return $this->CUSTOM4;
    }

    /**
     * @param string $CUSTOM4
     * @return PAYMENTS
     */
    public function setCUSTOM4($CUSTOM4)
    {
      $this->CUSTOM4 = $CUSTOM4;
      return $this;
    }

    /**
     * @return string
     */
    public function getCUSTOM5()
    {
      return $this->CUSTOM5;
    }

    /**
     * @param string $CUSTOM5
     * @return PAYMENTS
     */
    public function setCUSTOM5($CUSTOM5)
    {
      $this->CUSTOM5 = $CUSTOM5;
      return $this;
    }

    /**
     * @return string
     */
    public function getCUSTOM6()
    {
      return $this->CUSTOM6;
    }

    /**
     * @param string $CUSTOM6
     * @return PAYMENTS
     */
    public function setCUSTOM6($CUSTOM6)
    {
      $this->CUSTOM6 = $CUSTOM6;
      return $this;
    }

}
