<?php

class CHARGES_DEBITS_LINK
{

    /**
     * @var string $LINK_ID
     */
    protected $LINK_ID = null;

    /**
     * @var string $CHARGE_ID
     */
    protected $CHARGE_ID = null;

    /**
     * @var string $DEBIT_ID
     */
    protected $DEBIT_ID = null;

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
     * @param string $LINK_ID
     * @param string $CHARGE_ID
     * @param string $DEBIT_ID
     * @param string $CREATED_BY
     * @param \DateTime $CREATED_DATE
     * @param string $MODIFIED_BY
     * @param \DateTime $MODIFIED_DATE
     */
    public function __construct($LINK_ID, $CHARGE_ID, $DEBIT_ID, $CREATED_BY, \DateTime $CREATED_DATE, $MODIFIED_BY, \DateTime $MODIFIED_DATE)
    {
      $this->LINK_ID = $LINK_ID;
      $this->CHARGE_ID = $CHARGE_ID;
      $this->DEBIT_ID = $DEBIT_ID;
      $this->CREATED_BY = $CREATED_BY;
      $this->CREATED_DATE = $CREATED_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_BY = $MODIFIED_BY;
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getLINK_ID()
    {
      return $this->LINK_ID;
    }

    /**
     * @param string $LINK_ID
     * @return CHARGES_DEBITS_LINK
     */
    public function setLINK_ID($LINK_ID)
    {
      $this->LINK_ID = $LINK_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCHARGE_ID()
    {
      return $this->CHARGE_ID;
    }

    /**
     * @param string $CHARGE_ID
     * @return CHARGES_DEBITS_LINK
     */
    public function setCHARGE_ID($CHARGE_ID)
    {
      $this->CHARGE_ID = $CHARGE_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDEBIT_ID()
    {
      return $this->DEBIT_ID;
    }

    /**
     * @param string $DEBIT_ID
     * @return CHARGES_DEBITS_LINK
     */
    public function setDEBIT_ID($DEBIT_ID)
    {
      $this->DEBIT_ID = $DEBIT_ID;
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
     * @return CHARGES_DEBITS_LINK
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
     * @return CHARGES_DEBITS_LINK
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
     * @return CHARGES_DEBITS_LINK
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
     * @return CHARGES_DEBITS_LINK
     */
    public function setMODIFIED_DATE(\DateTime $MODIFIED_DATE)
    {
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
      return $this;
    }

}
