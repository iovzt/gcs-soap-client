<?php

class TRANSFERS
{

    /**
     * @var float $TRANSFER_ID
     */
    protected $TRANSFER_ID = null;

    /**
     * @var string $CLIENT_ID
     */
    protected $CLIENT_ID = null;

    /**
     * @var string $TRANSACTION_TYPE
     */
    protected $TRANSACTION_TYPE = null;

    /**
     * @var \DateTime $EFFECTIVE_DATE
     */
    protected $EFFECTIVE_DATE = null;

    /**
     * @var float $AMOUNT
     */
    protected $AMOUNT = null;

    /**
     * @var string $ACTIVE_FLAG
     */
    protected $ACTIVE_FLAG = null;

    /**
     * @var string $STATUS
     */
    protected $STATUS = null;

    /**
     * @var string $DRC_TRANSACTION_ID
     */
    protected $DRC_TRANSACTION_ID = null;

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
     * @param float $TRANSFER_ID
     * @param string $CLIENT_ID
     * @param string $TRANSACTION_TYPE
     * @param \DateTime $EFFECTIVE_DATE
     * @param float $AMOUNT
     * @param string $ACTIVE_FLAG
     * @param string $STATUS
     * @param string $DRC_TRANSACTION_ID
     * @param string $CREATED_BY
     * @param \DateTime $CREATED_DATE
     * @param string $MODIFIED_BY
     * @param \DateTime $MODIFIED_DATE
     */
    public function __construct($TRANSFER_ID, $CLIENT_ID, $TRANSACTION_TYPE, \DateTime $EFFECTIVE_DATE, $AMOUNT, $ACTIVE_FLAG, $STATUS, $DRC_TRANSACTION_ID, $CREATED_BY, \DateTime $CREATED_DATE, $MODIFIED_BY, \DateTime $MODIFIED_DATE)
    {
      $this->TRANSFER_ID = $TRANSFER_ID;
      $this->CLIENT_ID = $CLIENT_ID;
      $this->TRANSACTION_TYPE = $TRANSACTION_TYPE;
      $this->EFFECTIVE_DATE = $EFFECTIVE_DATE->format(\DateTime::ATOM);
      $this->AMOUNT = $AMOUNT;
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
      $this->STATUS = $STATUS;
      $this->DRC_TRANSACTION_ID = $DRC_TRANSACTION_ID;
      $this->CREATED_BY = $CREATED_BY;
      $this->CREATED_DATE = $CREATED_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_BY = $MODIFIED_BY;
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
    }

    /**
     * @return float
     */
    public function getTRANSFER_ID()
    {
      return $this->TRANSFER_ID;
    }

    /**
     * @param float $TRANSFER_ID
     * @return TRANSFERS
     */
    public function setTRANSFER_ID($TRANSFER_ID)
    {
      $this->TRANSFER_ID = $TRANSFER_ID;
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
     * @return TRANSFERS
     */
    public function setCLIENT_ID($CLIENT_ID)
    {
      $this->CLIENT_ID = $CLIENT_ID;
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
     * @return TRANSFERS
     */
    public function setTRANSACTION_TYPE($TRANSACTION_TYPE)
    {
      $this->TRANSACTION_TYPE = $TRANSACTION_TYPE;
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
     * @return TRANSFERS
     */
    public function setEFFECTIVE_DATE(\DateTime $EFFECTIVE_DATE)
    {
      $this->EFFECTIVE_DATE = $EFFECTIVE_DATE->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getAMOUNT()
    {
      return $this->AMOUNT;
    }

    /**
     * @param float $AMOUNT
     * @return TRANSFERS
     */
    public function setAMOUNT($AMOUNT)
    {
      $this->AMOUNT = $AMOUNT;
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
     * @return TRANSFERS
     */
    public function setACTIVE_FLAG($ACTIVE_FLAG)
    {
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
      return $this;
    }

    /**
     * @return string
     */
    public function getSTATUS()
    {
      return $this->STATUS;
    }

    /**
     * @param string $STATUS
     * @return TRANSFERS
     */
    public function setSTATUS($STATUS)
    {
      $this->STATUS = $STATUS;
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
     * @return TRANSFERS
     */
    public function setDRC_TRANSACTION_ID($DRC_TRANSACTION_ID)
    {
      $this->DRC_TRANSACTION_ID = $DRC_TRANSACTION_ID;
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
     * @return TRANSFERS
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
     * @return TRANSFERS
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
     * @return TRANSFERS
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
     * @return TRANSFERS
     */
    public function setMODIFIED_DATE(\DateTime $MODIFIED_DATE)
    {
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
      return $this;
    }

}
