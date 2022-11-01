<?php

class DEPOSITS
{

    /**
     * @var float $DEPOSIT_ID
     */
    protected $DEPOSIT_ID = null;

    /**
     * @var string $ACCOUNT_ID
     */
    protected $ACCOUNT_ID = null;

    /**
     * @var string $DEPOSIT_TYPE
     */
    protected $DEPOSIT_TYPE = null;

    /**
     * @var \DateTime $CHECK_DATE
     */
    protected $CHECK_DATE = null;

    /**
     * @var float $CHECK_NUMBER
     */
    protected $CHECK_NUMBER = null;

    /**
     * @var float $DEPOSIT_AMOUNT
     */
    protected $DEPOSIT_AMOUNT = null;

    /**
     * @var string $DEPOSIT_STATUS
     */
    protected $DEPOSIT_STATUS = null;

    /**
     * @var string $NSF_CODE
     */
    protected $NSF_CODE = null;

    /**
     * @var string $NSF_REASON
     */
    protected $NSF_REASON = null;

    /**
     * @var \DateTime $NSF_DATE
     */
    protected $NSF_DATE = null;

    /**
     * @var \DateTime $NSF_ENTERED_DATE
     */
    protected $NSF_ENTERED_DATE = null;

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
     * @var \DateTime $EST_POST_DATE
     */
    protected $EST_POST_DATE = null;

    /**
     * @param float $DEPOSIT_ID
     * @param string $ACCOUNT_ID
     * @param string $DEPOSIT_TYPE
     * @param \DateTime $CHECK_DATE
     * @param float $CHECK_NUMBER
     * @param float $DEPOSIT_AMOUNT
     * @param string $DEPOSIT_STATUS
     * @param string $NSF_CODE
     * @param string $NSF_REASON
     * @param \DateTime $NSF_DATE
     * @param \DateTime $NSF_ENTERED_DATE
     * @param \DateTime $CREATION_DATE
     * @param \DateTime $MODIFIED_DATE
     * @param string $MODIFIED_BY
     * @param \DateTime $EST_POST_DATE
     */
    public function __construct($DEPOSIT_ID, $ACCOUNT_ID, $DEPOSIT_TYPE, \DateTime $CHECK_DATE, $CHECK_NUMBER, $DEPOSIT_AMOUNT, $DEPOSIT_STATUS, $NSF_CODE, $NSF_REASON, \DateTime $NSF_DATE, \DateTime $NSF_ENTERED_DATE, \DateTime $CREATION_DATE, \DateTime $MODIFIED_DATE, $MODIFIED_BY, \DateTime $EST_POST_DATE)
    {
      $this->DEPOSIT_ID = $DEPOSIT_ID;
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      $this->DEPOSIT_TYPE = $DEPOSIT_TYPE;
      $this->CHECK_DATE = $CHECK_DATE->format(\DateTime::ATOM);
      $this->CHECK_NUMBER = $CHECK_NUMBER;
      $this->DEPOSIT_AMOUNT = $DEPOSIT_AMOUNT;
      $this->DEPOSIT_STATUS = $DEPOSIT_STATUS;
      $this->NSF_CODE = $NSF_CODE;
      $this->NSF_REASON = $NSF_REASON;
      $this->NSF_DATE = $NSF_DATE->format(\DateTime::ATOM);
      $this->NSF_ENTERED_DATE = $NSF_ENTERED_DATE->format(\DateTime::ATOM);
      $this->CREATION_DATE = $CREATION_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_BY = $MODIFIED_BY;
      $this->EST_POST_DATE = $EST_POST_DATE->format(\DateTime::ATOM);
    }

    /**
     * @return float
     */
    public function getDEPOSIT_ID()
    {
      return $this->DEPOSIT_ID;
    }

    /**
     * @param float $DEPOSIT_ID
     * @return DEPOSITS
     */
    public function setDEPOSIT_ID($DEPOSIT_ID)
    {
      $this->DEPOSIT_ID = $DEPOSIT_ID;
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
     * @return DEPOSITS
     */
    public function setACCOUNT_ID($ACCOUNT_ID)
    {
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDEPOSIT_TYPE()
    {
      return $this->DEPOSIT_TYPE;
    }

    /**
     * @param string $DEPOSIT_TYPE
     * @return DEPOSITS
     */
    public function setDEPOSIT_TYPE($DEPOSIT_TYPE)
    {
      $this->DEPOSIT_TYPE = $DEPOSIT_TYPE;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCHECK_DATE()
    {
      if ($this->CHECK_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CHECK_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CHECK_DATE
     * @return DEPOSITS
     */
    public function setCHECK_DATE(\DateTime $CHECK_DATE)
    {
      $this->CHECK_DATE = $CHECK_DATE->format(\DateTime::ATOM);
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
     * @return DEPOSITS
     */
    public function setCHECK_NUMBER($CHECK_NUMBER)
    {
      $this->CHECK_NUMBER = $CHECK_NUMBER;
      return $this;
    }

    /**
     * @return float
     */
    public function getDEPOSIT_AMOUNT()
    {
      return $this->DEPOSIT_AMOUNT;
    }

    /**
     * @param float $DEPOSIT_AMOUNT
     * @return DEPOSITS
     */
    public function setDEPOSIT_AMOUNT($DEPOSIT_AMOUNT)
    {
      $this->DEPOSIT_AMOUNT = $DEPOSIT_AMOUNT;
      return $this;
    }

    /**
     * @return string
     */
    public function getDEPOSIT_STATUS()
    {
      return $this->DEPOSIT_STATUS;
    }

    /**
     * @param string $DEPOSIT_STATUS
     * @return DEPOSITS
     */
    public function setDEPOSIT_STATUS($DEPOSIT_STATUS)
    {
      $this->DEPOSIT_STATUS = $DEPOSIT_STATUS;
      return $this;
    }

    /**
     * @return string
     */
    public function getNSF_CODE()
    {
      return $this->NSF_CODE;
    }

    /**
     * @param string $NSF_CODE
     * @return DEPOSITS
     */
    public function setNSF_CODE($NSF_CODE)
    {
      $this->NSF_CODE = $NSF_CODE;
      return $this;
    }

    /**
     * @return string
     */
    public function getNSF_REASON()
    {
      return $this->NSF_REASON;
    }

    /**
     * @param string $NSF_REASON
     * @return DEPOSITS
     */
    public function setNSF_REASON($NSF_REASON)
    {
      $this->NSF_REASON = $NSF_REASON;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNSF_DATE()
    {
      if ($this->NSF_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->NSF_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $NSF_DATE
     * @return DEPOSITS
     */
    public function setNSF_DATE(\DateTime $NSF_DATE)
    {
      $this->NSF_DATE = $NSF_DATE->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNSF_ENTERED_DATE()
    {
      if ($this->NSF_ENTERED_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->NSF_ENTERED_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $NSF_ENTERED_DATE
     * @return DEPOSITS
     */
    public function setNSF_ENTERED_DATE(\DateTime $NSF_ENTERED_DATE)
    {
      $this->NSF_ENTERED_DATE = $NSF_ENTERED_DATE->format(\DateTime::ATOM);
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
     * @return DEPOSITS
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
     * @return DEPOSITS
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
     * @return DEPOSITS
     */
    public function setMODIFIED_BY($MODIFIED_BY)
    {
      $this->MODIFIED_BY = $MODIFIED_BY;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEST_POST_DATE()
    {
      if ($this->EST_POST_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EST_POST_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EST_POST_DATE
     * @return DEPOSITS
     */
    public function setEST_POST_DATE(\DateTime $EST_POST_DATE)
    {
      $this->EST_POST_DATE = $EST_POST_DATE->format(\DateTime::ATOM);
      return $this;
    }

}
