<?php

class PAYEES
{

    /**
     * @var float $PAYEE_ID
     */
    protected $PAYEE_ID = null;

    /**
     * @var string $COMPANY_ID
     */
    protected $COMPANY_ID = null;

    /**
     * @var string $DRC_PAYEE_ID
     */
    protected $DRC_PAYEE_ID = null;

    /**
     * @var string $PAYEE_NAME
     */
    protected $PAYEE_NAME = null;

    /**
     * @var string $ACTIVE_FLAG
     */
    protected $ACTIVE_FLAG = null;

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
     * @param float $PAYEE_ID
     * @param string $COMPANY_ID
     * @param string $DRC_PAYEE_ID
     * @param string $PAYEE_NAME
     * @param string $ACTIVE_FLAG
     * @param \DateTime $CREATION_DATE
     * @param \DateTime $MODIFIED_DATE
     * @param string $MODIFIED_BY
     * @param float $ORIGINAL_ID
     */
    public function __construct($PAYEE_ID, $COMPANY_ID, $DRC_PAYEE_ID, $PAYEE_NAME, $ACTIVE_FLAG, \DateTime $CREATION_DATE, \DateTime $MODIFIED_DATE, $MODIFIED_BY, $ORIGINAL_ID)
    {
      $this->PAYEE_ID = $PAYEE_ID;
      $this->COMPANY_ID = $COMPANY_ID;
      $this->DRC_PAYEE_ID = $DRC_PAYEE_ID;
      $this->PAYEE_NAME = $PAYEE_NAME;
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
      $this->CREATION_DATE = $CREATION_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_BY = $MODIFIED_BY;
      $this->ORIGINAL_ID = $ORIGINAL_ID;
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
     * @return PAYEES
     */
    public function setPAYEE_ID($PAYEE_ID)
    {
      $this->PAYEE_ID = $PAYEE_ID;
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
     * @return PAYEES
     */
    public function setCOMPANY_ID($COMPANY_ID)
    {
      $this->COMPANY_ID = $COMPANY_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDRC_PAYEE_ID()
    {
      return $this->DRC_PAYEE_ID;
    }

    /**
     * @param string $DRC_PAYEE_ID
     * @return PAYEES
     */
    public function setDRC_PAYEE_ID($DRC_PAYEE_ID)
    {
      $this->DRC_PAYEE_ID = $DRC_PAYEE_ID;
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
     * @return PAYEES
     */
    public function setPAYEE_NAME($PAYEE_NAME)
    {
      $this->PAYEE_NAME = $PAYEE_NAME;
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
     * @return PAYEES
     */
    public function setACTIVE_FLAG($ACTIVE_FLAG)
    {
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
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
     * @return PAYEES
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
     * @return PAYEES
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
     * @return PAYEES
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
     * @return PAYEES
     */
    public function setORIGINAL_ID($ORIGINAL_ID)
    {
      $this->ORIGINAL_ID = $ORIGINAL_ID;
      return $this;
    }

}
