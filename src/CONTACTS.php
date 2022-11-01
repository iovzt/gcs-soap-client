<?php

class CONTACTS
{

    /**
     * @var float $PAYEE_CONTACT_ID
     */
    protected $PAYEE_CONTACT_ID = null;

    /**
     * @var float $PAYEE_ID
     */
    protected $PAYEE_ID = null;

    /**
     * @var string $NAME
     */
    protected $NAME = null;

    /**
     * @var string $PHONE_NUMBER
     */
    protected $PHONE_NUMBER = null;

    /**
     * @var string $EMAIL_ADDRESS
     */
    protected $EMAIL_ADDRESS = null;

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
     * @param float $PAYEE_CONTACT_ID
     * @param float $PAYEE_ID
     * @param string $NAME
     * @param string $PHONE_NUMBER
     * @param string $EMAIL_ADDRESS
     * @param string $ACTIVE_FLAG
     * @param \DateTime $CREATION_DATE
     * @param \DateTime $MODIFIED_DATE
     * @param string $MODIFIED_BY
     * @param float $ORIGINAL_ID
     */
    public function __construct($PAYEE_CONTACT_ID, $PAYEE_ID, $NAME, $PHONE_NUMBER, $EMAIL_ADDRESS, $ACTIVE_FLAG, \DateTime $CREATION_DATE, \DateTime $MODIFIED_DATE, $MODIFIED_BY, $ORIGINAL_ID)
    {
      $this->PAYEE_CONTACT_ID = $PAYEE_CONTACT_ID;
      $this->PAYEE_ID = $PAYEE_ID;
      $this->NAME = $NAME;
      $this->PHONE_NUMBER = $PHONE_NUMBER;
      $this->EMAIL_ADDRESS = $EMAIL_ADDRESS;
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
      $this->CREATION_DATE = $CREATION_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_BY = $MODIFIED_BY;
      $this->ORIGINAL_ID = $ORIGINAL_ID;
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
     * @return CONTACTS
     */
    public function setPAYEE_CONTACT_ID($PAYEE_CONTACT_ID)
    {
      $this->PAYEE_CONTACT_ID = $PAYEE_CONTACT_ID;
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
     * @return CONTACTS
     */
    public function setPAYEE_ID($PAYEE_ID)
    {
      $this->PAYEE_ID = $PAYEE_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getNAME()
    {
      return $this->NAME;
    }

    /**
     * @param string $NAME
     * @return CONTACTS
     */
    public function setNAME($NAME)
    {
      $this->NAME = $NAME;
      return $this;
    }

    /**
     * @return string
     */
    public function getPHONE_NUMBER()
    {
      return $this->PHONE_NUMBER;
    }

    /**
     * @param string $PHONE_NUMBER
     * @return CONTACTS
     */
    public function setPHONE_NUMBER($PHONE_NUMBER)
    {
      $this->PHONE_NUMBER = $PHONE_NUMBER;
      return $this;
    }

    /**
     * @return string
     */
    public function getEMAIL_ADDRESS()
    {
      return $this->EMAIL_ADDRESS;
    }

    /**
     * @param string $EMAIL_ADDRESS
     * @return CONTACTS
     */
    public function setEMAIL_ADDRESS($EMAIL_ADDRESS)
    {
      $this->EMAIL_ADDRESS = $EMAIL_ADDRESS;
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
     * @return CONTACTS
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
     * @return CONTACTS
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
     * @return CONTACTS
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
     * @return CONTACTS
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
     * @return CONTACTS
     */
    public function setORIGINAL_ID($ORIGINAL_ID)
    {
      $this->ORIGINAL_ID = $ORIGINAL_ID;
      return $this;
    }

}
