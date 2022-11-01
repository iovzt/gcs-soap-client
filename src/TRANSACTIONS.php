<?php

class TRANSACTIONS
{

    /**
     * @var float $TRANSACTION_ID
     */
    protected $TRANSACTION_ID = null;

    /**
     * @var string $ACCOUNT_ID
     */
    protected $ACCOUNT_ID = null;

    /**
     * @var \DateTime $TRANSACTION_DATE
     */
    protected $TRANSACTION_DATE = null;

    /**
     * @var \DateTime $DEBIT_DATE
     */
    protected $DEBIT_DATE = null;

    /**
     * @var \DateTime $POST_DATE
     */
    protected $POST_DATE = null;

    /**
     * @var float $DAY_OF_MONTH
     */
    protected $DAY_OF_MONTH = null;

    /**
     * @var string $TRANSACTION_CLASS
     */
    protected $TRANSACTION_CLASS = null;

    /**
     * @var string $TRANSACTION_CLASS_DESCRIPTION
     */
    protected $TRANSACTION_CLASS_DESCRIPTION = null;

    /**
     * @var string $TRANSACTION_TYPE
     */
    protected $TRANSACTION_TYPE = null;

    /**
     * @var string $TRANSACTION_TYPE_DESCRIPTION
     */
    protected $TRANSACTION_TYPE_DESCRIPTION = null;

    /**
     * @var string $TRANSACTION_STATUS
     */
    protected $TRANSACTION_STATUS = null;

    /**
     * @var string $TRANSACTION_STATUS_DESCRIPTION
     */
    protected $TRANSACTION_STATUS_DESCRIPTION = null;

    /**
     * @var float $TRANSACTION_AMOUNT
     */
    protected $TRANSACTION_AMOUNT = null;

    /**
     * @var float $EVALUCHECK_ID
     */
    protected $EVALUCHECK_ID = null;

    /**
     * @var float $REFERENCE_ID
     */
    protected $REFERENCE_ID = null;

    /**
     * @var string $FROM_ACCOUNT
     */
    protected $FROM_ACCOUNT = null;

    /**
     * @var string $TO_ACCOUNT
     */
    protected $TO_ACCOUNT = null;

    /**
     * @var string $MEMO
     */
    protected $MEMO = null;

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
     * @param float $TRANSACTION_ID
     * @param string $ACCOUNT_ID
     * @param \DateTime $TRANSACTION_DATE
     * @param \DateTime $DEBIT_DATE
     * @param \DateTime $POST_DATE
     * @param float $DAY_OF_MONTH
     * @param string $TRANSACTION_CLASS
     * @param string $TRANSACTION_CLASS_DESCRIPTION
     * @param string $TRANSACTION_TYPE
     * @param string $TRANSACTION_TYPE_DESCRIPTION
     * @param string $TRANSACTION_STATUS
     * @param string $TRANSACTION_STATUS_DESCRIPTION
     * @param float $TRANSACTION_AMOUNT
     * @param float $EVALUCHECK_ID
     * @param float $REFERENCE_ID
     * @param string $FROM_ACCOUNT
     * @param string $TO_ACCOUNT
     * @param string $MEMO
     * @param \DateTime $CREATION_DATE
     * @param \DateTime $MODIFIED_DATE
     * @param string $MODIFIED_BY
     */
    public function __construct($TRANSACTION_ID, $ACCOUNT_ID, \DateTime $TRANSACTION_DATE, \DateTime $DEBIT_DATE, \DateTime $POST_DATE, $DAY_OF_MONTH, $TRANSACTION_CLASS, $TRANSACTION_CLASS_DESCRIPTION, $TRANSACTION_TYPE, $TRANSACTION_TYPE_DESCRIPTION, $TRANSACTION_STATUS, $TRANSACTION_STATUS_DESCRIPTION, $TRANSACTION_AMOUNT, $EVALUCHECK_ID, $REFERENCE_ID, $FROM_ACCOUNT, $TO_ACCOUNT, $MEMO, \DateTime $CREATION_DATE, \DateTime $MODIFIED_DATE, $MODIFIED_BY)
    {
      $this->TRANSACTION_ID = $TRANSACTION_ID;
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      $this->TRANSACTION_DATE = $TRANSACTION_DATE->format(\DateTime::ATOM);
      $this->DEBIT_DATE = $DEBIT_DATE->format(\DateTime::ATOM);
      $this->POST_DATE = $POST_DATE->format(\DateTime::ATOM);
      $this->DAY_OF_MONTH = $DAY_OF_MONTH;
      $this->TRANSACTION_CLASS = $TRANSACTION_CLASS;
      $this->TRANSACTION_CLASS_DESCRIPTION = $TRANSACTION_CLASS_DESCRIPTION;
      $this->TRANSACTION_TYPE = $TRANSACTION_TYPE;
      $this->TRANSACTION_TYPE_DESCRIPTION = $TRANSACTION_TYPE_DESCRIPTION;
      $this->TRANSACTION_STATUS = $TRANSACTION_STATUS;
      $this->TRANSACTION_STATUS_DESCRIPTION = $TRANSACTION_STATUS_DESCRIPTION;
      $this->TRANSACTION_AMOUNT = $TRANSACTION_AMOUNT;
      $this->EVALUCHECK_ID = $EVALUCHECK_ID;
      $this->REFERENCE_ID = $REFERENCE_ID;
      $this->FROM_ACCOUNT = $FROM_ACCOUNT;
      $this->TO_ACCOUNT = $TO_ACCOUNT;
      $this->MEMO = $MEMO;
      $this->CREATION_DATE = $CREATION_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_BY = $MODIFIED_BY;
    }

    /**
     * @return float
     */
    public function getTRANSACTION_ID()
    {
      return $this->TRANSACTION_ID;
    }

    /**
     * @param float $TRANSACTION_ID
     * @return TRANSACTIONS
     */
    public function setTRANSACTION_ID($TRANSACTION_ID)
    {
      $this->TRANSACTION_ID = $TRANSACTION_ID;
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
     * @return TRANSACTIONS
     */
    public function setACCOUNT_ID($ACCOUNT_ID)
    {
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTRANSACTION_DATE()
    {
      if ($this->TRANSACTION_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TRANSACTION_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TRANSACTION_DATE
     * @return TRANSACTIONS
     */
    public function setTRANSACTION_DATE(\DateTime $TRANSACTION_DATE)
    {
      $this->TRANSACTION_DATE = $TRANSACTION_DATE->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDEBIT_DATE()
    {
      if ($this->DEBIT_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DEBIT_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DEBIT_DATE
     * @return TRANSACTIONS
     */
    public function setDEBIT_DATE(\DateTime $DEBIT_DATE)
    {
      $this->DEBIT_DATE = $DEBIT_DATE->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPOST_DATE()
    {
      if ($this->POST_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->POST_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $POST_DATE
     * @return TRANSACTIONS
     */
    public function setPOST_DATE(\DateTime $POST_DATE)
    {
      $this->POST_DATE = $POST_DATE->format(\DateTime::ATOM);
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
     * @return TRANSACTIONS
     */
    public function setDAY_OF_MONTH($DAY_OF_MONTH)
    {
      $this->DAY_OF_MONTH = $DAY_OF_MONTH;
      return $this;
    }

    /**
     * @return string
     */
    public function getTRANSACTION_CLASS()
    {
      return $this->TRANSACTION_CLASS;
    }

    /**
     * @param string $TRANSACTION_CLASS
     * @return TRANSACTIONS
     */
    public function setTRANSACTION_CLASS($TRANSACTION_CLASS)
    {
      $this->TRANSACTION_CLASS = $TRANSACTION_CLASS;
      return $this;
    }

    /**
     * @return string
     */
    public function getTRANSACTION_CLASS_DESCRIPTION()
    {
      return $this->TRANSACTION_CLASS_DESCRIPTION;
    }

    /**
     * @param string $TRANSACTION_CLASS_DESCRIPTION
     * @return TRANSACTIONS
     */
    public function setTRANSACTION_CLASS_DESCRIPTION($TRANSACTION_CLASS_DESCRIPTION)
    {
      $this->TRANSACTION_CLASS_DESCRIPTION = $TRANSACTION_CLASS_DESCRIPTION;
      return $this;
    }

    /**
     * @return string
     */
    public function getTRANSACTION_TYPE()
    {
      return $this->TRANSACTION_TYPE;
    }

    /**
     * @param string $TRANSACTION_TYPE
     * @return TRANSACTIONS
     */
    public function setTRANSACTION_TYPE($TRANSACTION_TYPE)
    {
      $this->TRANSACTION_TYPE = $TRANSACTION_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getTRANSACTION_TYPE_DESCRIPTION()
    {
      return $this->TRANSACTION_TYPE_DESCRIPTION;
    }

    /**
     * @param string $TRANSACTION_TYPE_DESCRIPTION
     * @return TRANSACTIONS
     */
    public function setTRANSACTION_TYPE_DESCRIPTION($TRANSACTION_TYPE_DESCRIPTION)
    {
      $this->TRANSACTION_TYPE_DESCRIPTION = $TRANSACTION_TYPE_DESCRIPTION;
      return $this;
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
     * @return TRANSACTIONS
     */
    public function setTRANSACTION_STATUS($TRANSACTION_STATUS)
    {
      $this->TRANSACTION_STATUS = $TRANSACTION_STATUS;
      return $this;
    }

    /**
     * @return string
     */
    public function getTRANSACTION_STATUS_DESCRIPTION()
    {
      return $this->TRANSACTION_STATUS_DESCRIPTION;
    }

    /**
     * @param string $TRANSACTION_STATUS_DESCRIPTION
     * @return TRANSACTIONS
     */
    public function setTRANSACTION_STATUS_DESCRIPTION($TRANSACTION_STATUS_DESCRIPTION)
    {
      $this->TRANSACTION_STATUS_DESCRIPTION = $TRANSACTION_STATUS_DESCRIPTION;
      return $this;
    }

    /**
     * @return float
     */
    public function getTRANSACTION_AMOUNT()
    {
      return $this->TRANSACTION_AMOUNT;
    }

    /**
     * @param float $TRANSACTION_AMOUNT
     * @return TRANSACTIONS
     */
    public function setTRANSACTION_AMOUNT($TRANSACTION_AMOUNT)
    {
      $this->TRANSACTION_AMOUNT = $TRANSACTION_AMOUNT;
      return $this;
    }

    /**
     * @return float
     */
    public function getEVALUCHECK_ID()
    {
      return $this->EVALUCHECK_ID;
    }

    /**
     * @param float $EVALUCHECK_ID
     * @return TRANSACTIONS
     */
    public function setEVALUCHECK_ID($EVALUCHECK_ID)
    {
      $this->EVALUCHECK_ID = $EVALUCHECK_ID;
      return $this;
    }

    /**
     * @return float
     */
    public function getREFERENCE_ID()
    {
      return $this->REFERENCE_ID;
    }

    /**
     * @param float $REFERENCE_ID
     * @return TRANSACTIONS
     */
    public function setREFERENCE_ID($REFERENCE_ID)
    {
      $this->REFERENCE_ID = $REFERENCE_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getFROM_ACCOUNT()
    {
      return $this->FROM_ACCOUNT;
    }

    /**
     * @param string $FROM_ACCOUNT
     * @return TRANSACTIONS
     */
    public function setFROM_ACCOUNT($FROM_ACCOUNT)
    {
      $this->FROM_ACCOUNT = $FROM_ACCOUNT;
      return $this;
    }

    /**
     * @return string
     */
    public function getTO_ACCOUNT()
    {
      return $this->TO_ACCOUNT;
    }

    /**
     * @param string $TO_ACCOUNT
     * @return TRANSACTIONS
     */
    public function setTO_ACCOUNT($TO_ACCOUNT)
    {
      $this->TO_ACCOUNT = $TO_ACCOUNT;
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
     * @return TRANSACTIONS
     */
    public function setMEMO($MEMO)
    {
      $this->MEMO = $MEMO;
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
     * @return TRANSACTIONS
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
     * @return TRANSACTIONS
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
     * @return TRANSACTIONS
     */
    public function setMODIFIED_BY($MODIFIED_BY)
    {
      $this->MODIFIED_BY = $MODIFIED_BY;
      return $this;
    }

}
