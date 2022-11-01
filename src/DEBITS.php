<?php

class DEBITS
{

    /**
     * @var float $DEBIT_ID
     */
    protected $DEBIT_ID = null;

    /**
     * @var string $ACCOUNT_ID
     */
    protected $ACCOUNT_ID = null;

    /**
     * @var \DateTime $EFFECTIVE_DATE
     */
    protected $EFFECTIVE_DATE = null;

    /**
     * @var float $DAY_OF_MONTH
     */
    protected $DAY_OF_MONTH = null;

    /**
     * @var string $DEBIT_TYPE
     */
    protected $DEBIT_TYPE = null;

    /**
     * @var float $OCCURS_NUM
     */
    protected $OCCURS_NUM = null;

    /**
     * @var float $DEBIT_AMOUNT
     */
    protected $DEBIT_AMOUNT = null;

    /**
     * @var string $MEMO
     */
    protected $MEMO = null;

    /**
     * @var string $ACTIVE_FLAG
     */
    protected $ACTIVE_FLAG = null;

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
     * @var string $DEBIT_AUTHORIZED
     */
    protected $DEBIT_AUTHORIZED = null;

    /**
     * @var string $DEBIT_AUTHORIZED_BY
     */
    protected $DEBIT_AUTHORIZED_BY = null;

    /**
     * @var \DateTime $NEXT_OCCURRENCE_DATE
     */
    protected $NEXT_OCCURRENCE_DATE = null;

    /**
     * @var float $REMAINING_OCCURRENCES
     */
    protected $REMAINING_OCCURRENCES = null;

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
     * @param float $DEBIT_ID
     * @param string $ACCOUNT_ID
     * @param \DateTime $EFFECTIVE_DATE
     * @param float $DAY_OF_MONTH
     * @param string $DEBIT_TYPE
     * @param float $OCCURS_NUM
     * @param float $DEBIT_AMOUNT
     * @param string $MEMO
     * @param string $ACTIVE_FLAG
     * @param string $DRC_TRANSACTION_ID
     * @param \DateTime $CREATION_DATE
     * @param \DateTime $MODIFIED_DATE
     * @param string $MODIFIED_BY
     * @param float $ORIGINAL_ID
     * @param string $DEBIT_AUTHORIZED
     * @param string $DEBIT_AUTHORIZED_BY
     * @param \DateTime $NEXT_OCCURRENCE_DATE
     * @param float $REMAINING_OCCURRENCES
     * @param string $CUSTOM1
     * @param string $CUSTOM2
     * @param string $CUSTOM3
     * @param string $CUSTOM4
     * @param string $CUSTOM5
     * @param string $CUSTOM6
     */
    public function __construct($DEBIT_ID, $ACCOUNT_ID, \DateTime $EFFECTIVE_DATE, $DAY_OF_MONTH, $DEBIT_TYPE, $OCCURS_NUM, $DEBIT_AMOUNT, $MEMO, $ACTIVE_FLAG, $DRC_TRANSACTION_ID, \DateTime $CREATION_DATE, \DateTime $MODIFIED_DATE, $MODIFIED_BY, $ORIGINAL_ID, $DEBIT_AUTHORIZED, $DEBIT_AUTHORIZED_BY, \DateTime $NEXT_OCCURRENCE_DATE, $REMAINING_OCCURRENCES, $CUSTOM1, $CUSTOM2, $CUSTOM3, $CUSTOM4, $CUSTOM5, $CUSTOM6)
    {
      $this->DEBIT_ID = $DEBIT_ID;
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      $this->EFFECTIVE_DATE = $EFFECTIVE_DATE->format(\DateTime::ATOM);
      $this->DAY_OF_MONTH = $DAY_OF_MONTH;
      $this->DEBIT_TYPE = $DEBIT_TYPE;
      $this->OCCURS_NUM = $OCCURS_NUM;
      $this->DEBIT_AMOUNT = $DEBIT_AMOUNT;
      $this->MEMO = $MEMO;
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
      $this->DRC_TRANSACTION_ID = $DRC_TRANSACTION_ID;
      $this->CREATION_DATE = $CREATION_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_BY = $MODIFIED_BY;
      $this->ORIGINAL_ID = $ORIGINAL_ID;
      $this->DEBIT_AUTHORIZED = $DEBIT_AUTHORIZED;
      $this->DEBIT_AUTHORIZED_BY = $DEBIT_AUTHORIZED_BY;
      $this->NEXT_OCCURRENCE_DATE = $NEXT_OCCURRENCE_DATE->format(\DateTime::ATOM);
      $this->REMAINING_OCCURRENCES = $REMAINING_OCCURRENCES;
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
    public function getDEBIT_ID()
    {
      return $this->DEBIT_ID;
    }

    /**
     * @param float $DEBIT_ID
     * @return DEBITS
     */
    public function setDEBIT_ID($DEBIT_ID)
    {
      $this->DEBIT_ID = $DEBIT_ID;
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
     * @return DEBITS
     */
    public function setACCOUNT_ID($ACCOUNT_ID)
    {
      $this->ACCOUNT_ID = $ACCOUNT_ID;
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
     * @return DEBITS
     */
    public function setEFFECTIVE_DATE(\DateTime $EFFECTIVE_DATE)
    {
      $this->EFFECTIVE_DATE = $EFFECTIVE_DATE->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getDAY_OF_MONTH()
    {
      return $this->DAY_OF_MONTH;
    }

    /**
     * @param float $DAY_OF_MONTH
     * @return DEBITS
     */
    public function setDAY_OF_MONTH($DAY_OF_MONTH)
    {
      $this->DAY_OF_MONTH = $DAY_OF_MONTH;
      return $this;
    }

    /**
     * @return string
     */
    public function getDEBIT_TYPE()
    {
      return $this->DEBIT_TYPE;
    }

    /**
     * @param string $DEBIT_TYPE
     * @return DEBITS
     */
    public function setDEBIT_TYPE($DEBIT_TYPE)
    {
      $this->DEBIT_TYPE = $DEBIT_TYPE;
      return $this;
    }

    /**
     * @return float
     */
    public function getOCCURS_NUM()
    {
      return $this->OCCURS_NUM;
    }

    /**
     * @param float $OCCURS_NUM
     * @return DEBITS
     */
    public function setOCCURS_NUM($OCCURS_NUM)
    {
      $this->OCCURS_NUM = $OCCURS_NUM;
      return $this;
    }

    /**
     * @return float
     */
    public function getDEBIT_AMOUNT()
    {
      return $this->DEBIT_AMOUNT;
    }

    /**
     * @param float $DEBIT_AMOUNT
     * @return DEBITS
     */
    public function setDEBIT_AMOUNT($DEBIT_AMOUNT)
    {
      $this->DEBIT_AMOUNT = $DEBIT_AMOUNT;
      return $this;
    }

    /**
     * @return string
     */
    public function getMEMO()
    {
      return $this->MEMO;
    }

    /**
     * @param string $MEMO
     * @return DEBITS
     */
    public function setMEMO($MEMO)
    {
      $this->MEMO = $MEMO;
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
     * @return DEBITS
     */
    public function setACTIVE_FLAG($ACTIVE_FLAG)
    {
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
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
     * @return DEBITS
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
     * @return DEBITS
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
     * @return DEBITS
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
     * @return DEBITS
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
     * @return DEBITS
     */
    public function setORIGINAL_ID($ORIGINAL_ID)
    {
      $this->ORIGINAL_ID = $ORIGINAL_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDEBIT_AUTHORIZED()
    {
      return $this->DEBIT_AUTHORIZED;
    }

    /**
     * @param string $DEBIT_AUTHORIZED
     * @return DEBITS
     */
    public function setDEBIT_AUTHORIZED($DEBIT_AUTHORIZED)
    {
      $this->DEBIT_AUTHORIZED = $DEBIT_AUTHORIZED;
      return $this;
    }

    /**
     * @return string
     */
    public function getDEBIT_AUTHORIZED_BY()
    {
      return $this->DEBIT_AUTHORIZED_BY;
    }

    /**
     * @param string $DEBIT_AUTHORIZED_BY
     * @return DEBITS
     */
    public function setDEBIT_AUTHORIZED_BY($DEBIT_AUTHORIZED_BY)
    {
      $this->DEBIT_AUTHORIZED_BY = $DEBIT_AUTHORIZED_BY;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNEXT_OCCURRENCE_DATE()
    {
      if ($this->NEXT_OCCURRENCE_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->NEXT_OCCURRENCE_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $NEXT_OCCURRENCE_DATE
     * @return DEBITS
     */
    public function setNEXT_OCCURRENCE_DATE(\DateTime $NEXT_OCCURRENCE_DATE)
    {
      $this->NEXT_OCCURRENCE_DATE = $NEXT_OCCURRENCE_DATE->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getREMAINING_OCCURRENCES()
    {
      return $this->REMAINING_OCCURRENCES;
    }

    /**
     * @param float $REMAINING_OCCURRENCES
     * @return DEBITS
     */
    public function setREMAINING_OCCURRENCES($REMAINING_OCCURRENCES)
    {
      $this->REMAINING_OCCURRENCES = $REMAINING_OCCURRENCES;
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
     * @return DEBITS
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
     * @return DEBITS
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
     * @return DEBITS
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
     * @return DEBITS
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
     * @return DEBITS
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
     * @return DEBITS
     */
    public function setCUSTOM6($CUSTOM6)
    {
      $this->CUSTOM6 = $CUSTOM6;
      return $this;
    }

}
