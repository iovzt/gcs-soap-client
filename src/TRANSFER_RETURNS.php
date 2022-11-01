<?php

class TRANSFER_RETURNS
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
     * @var string $DRC_TRANSACTION_ID
     */
    protected $DRC_TRANSACTION_ID = null;

    /**
     * @var string $PARENT_TRANSFER_ID
     */
    protected $PARENT_TRANSFER_ID = null;

    /**
     * @var string $MODIFIED_BY
     */
    protected $MODIFIED_BY = null;

    /**
     * @param float $TRANSFER_ID
     * @param string $CLIENT_ID
     * @param string $TRANSACTION_TYPE
     * @param \DateTime $EFFECTIVE_DATE
     * @param float $AMOUNT
     * @param string $ACTIVE_FLAG
     * @param string $DRC_TRANSACTION_ID
     * @param string $PARENT_TRANSFER_ID
     * @param string $MODIFIED_BY
     */
    public function __construct($TRANSFER_ID, $CLIENT_ID, $TRANSACTION_TYPE, \DateTime $EFFECTIVE_DATE, $AMOUNT, $ACTIVE_FLAG, $DRC_TRANSACTION_ID, $PARENT_TRANSFER_ID, $MODIFIED_BY)
    {
      $this->TRANSFER_ID = $TRANSFER_ID;
      $this->CLIENT_ID = $CLIENT_ID;
      $this->TRANSACTION_TYPE = $TRANSACTION_TYPE;
      $this->EFFECTIVE_DATE = $EFFECTIVE_DATE->format(\DateTime::ATOM);
      $this->AMOUNT = $AMOUNT;
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
      $this->DRC_TRANSACTION_ID = $DRC_TRANSACTION_ID;
      $this->PARENT_TRANSFER_ID = $PARENT_TRANSFER_ID;
      $this->MODIFIED_BY = $MODIFIED_BY;
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
     * @return TRANSFER_RETURNS
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
     * @return TRANSFER_RETURNS
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
     * @return TRANSFER_RETURNS
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
     * @return TRANSFER_RETURNS
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
     * @return TRANSFER_RETURNS
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
     * @return TRANSFER_RETURNS
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
     * @return TRANSFER_RETURNS
     */
    public function setDRC_TRANSACTION_ID($DRC_TRANSACTION_ID)
    {
      $this->DRC_TRANSACTION_ID = $DRC_TRANSACTION_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPARENT_TRANSFER_ID()
    {
      return $this->PARENT_TRANSFER_ID;
    }

    /**
     * @param string $PARENT_TRANSFER_ID
     * @return TRANSFER_RETURNS
     */
    public function setPARENT_TRANSFER_ID($PARENT_TRANSFER_ID)
    {
      $this->PARENT_TRANSFER_ID = $PARENT_TRANSFER_ID;
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
     * @return TRANSFER_RETURNS
     */
    public function setMODIFIED_BY($MODIFIED_BY)
    {
      $this->MODIFIED_BY = $MODIFIED_BY;
      return $this;
    }

}
