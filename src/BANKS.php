<?php

class BANKS
{

    /**
     * @var float $PAYEE_BANK_ID
     */
    protected $PAYEE_BANK_ID = null;

    /**
     * @var float $PAYEE_ID
     */
    protected $PAYEE_ID = null;

    /**
     * @var string $BANK_ROUTING_NUM
     */
    protected $BANK_ROUTING_NUM = null;

    /**
     * @var string $BANK_ACCOUNT_NUM
     */
    protected $BANK_ACCOUNT_NUM = null;

    /**
     * @var string $BANK_ACCOUNT_TYPE
     */
    protected $BANK_ACCOUNT_TYPE = null;

    /**
     * @var string $ACTIVE_FLAG
     */
    protected $ACTIVE_FLAG = null;

    /**
     * @var \DateTime $MODIFIED_DATE
     */
    protected $MODIFIED_DATE = null;

    /**
     * @var \DateTime $CREATION_DATE
     */
    protected $CREATION_DATE = null;

    /**
     * @var string $MODIFIED_BY
     */
    protected $MODIFIED_BY = null;

    /**
     * @var string $BANK_TYPE
     */
    protected $BANK_TYPE = null;

    /**
     * @var float $ORIGINAL_ID
     */
    protected $ORIGINAL_ID = null;

    /**
     * @param float $PAYEE_BANK_ID
     * @param float $PAYEE_ID
     * @param string $BANK_ROUTING_NUM
     * @param string $BANK_ACCOUNT_NUM
     * @param string $BANK_ACCOUNT_TYPE
     * @param string $ACTIVE_FLAG
     * @param \DateTime $MODIFIED_DATE
     * @param \DateTime $CREATION_DATE
     * @param string $MODIFIED_BY
     * @param string $BANK_TYPE
     * @param float $ORIGINAL_ID
     */
    public function __construct($PAYEE_BANK_ID, $PAYEE_ID, $BANK_ROUTING_NUM, $BANK_ACCOUNT_NUM, $BANK_ACCOUNT_TYPE, $ACTIVE_FLAG, \DateTime $MODIFIED_DATE, \DateTime $CREATION_DATE, $MODIFIED_BY, $BANK_TYPE, $ORIGINAL_ID)
    {
      $this->PAYEE_BANK_ID = $PAYEE_BANK_ID;
      $this->PAYEE_ID = $PAYEE_ID;
      $this->BANK_ROUTING_NUM = $BANK_ROUTING_NUM;
      $this->BANK_ACCOUNT_NUM = $BANK_ACCOUNT_NUM;
      $this->BANK_ACCOUNT_TYPE = $BANK_ACCOUNT_TYPE;
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
      $this->CREATION_DATE = $CREATION_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_BY = $MODIFIED_BY;
      $this->BANK_TYPE = $BANK_TYPE;
      $this->ORIGINAL_ID = $ORIGINAL_ID;
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
     * @return BANKS
     */
    public function setPAYEE_BANK_ID($PAYEE_BANK_ID)
    {
      $this->PAYEE_BANK_ID = $PAYEE_BANK_ID;
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
     * @return BANKS
     */
    public function setPAYEE_ID($PAYEE_ID)
    {
      $this->PAYEE_ID = $PAYEE_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBANK_ROUTING_NUM()
    {
      return $this->BANK_ROUTING_NUM;
    }

    /**
     * @param string $BANK_ROUTING_NUM
     * @return BANKS
     */
    public function setBANK_ROUTING_NUM($BANK_ROUTING_NUM)
    {
      $this->BANK_ROUTING_NUM = $BANK_ROUTING_NUM;
      return $this;
    }

    /**
     * @return string
     */
    public function getBANK_ACCOUNT_NUM()
    {
      return $this->BANK_ACCOUNT_NUM;
    }

    /**
     * @param string $BANK_ACCOUNT_NUM
     * @return BANKS
     */
    public function setBANK_ACCOUNT_NUM($BANK_ACCOUNT_NUM)
    {
      $this->BANK_ACCOUNT_NUM = $BANK_ACCOUNT_NUM;
      return $this;
    }

    /**
     * @return string
     */
    public function getBANK_ACCOUNT_TYPE()
    {
      return $this->BANK_ACCOUNT_TYPE;
    }

    /**
     * @param string $BANK_ACCOUNT_TYPE
     * @return BANKS
     */
    public function setBANK_ACCOUNT_TYPE($BANK_ACCOUNT_TYPE)
    {
      $this->BANK_ACCOUNT_TYPE = $BANK_ACCOUNT_TYPE;
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
     * @return BANKS
     */
    public function setACTIVE_FLAG($ACTIVE_FLAG)
    {
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
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
     * @return BANKS
     */
    public function setMODIFIED_DATE(\DateTime $MODIFIED_DATE)
    {
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
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
     * @return BANKS
     */
    public function setCREATION_DATE(\DateTime $CREATION_DATE)
    {
      $this->CREATION_DATE = $CREATION_DATE->format(\DateTime::ATOM);
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
     * @return BANKS
     */
    public function setMODIFIED_BY($MODIFIED_BY)
    {
      $this->MODIFIED_BY = $MODIFIED_BY;
      return $this;
    }

    /**
     * @return string
     */
    public function getBANK_TYPE()
    {
      return $this->BANK_TYPE;
    }

    /**
     * @param string $BANK_TYPE
     * @return BANKS
     */
    public function setBANK_TYPE($BANK_TYPE)
    {
      $this->BANK_TYPE = $BANK_TYPE;
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
     * @return BANKS
     */
    public function setORIGINAL_ID($ORIGINAL_ID)
    {
      $this->ORIGINAL_ID = $ORIGINAL_ID;
      return $this;
    }

}
