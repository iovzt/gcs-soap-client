<?php

class ADDRESSES
{

    /**
     * @var float $PAYEE_ADDRESS_ID
     */
    protected $PAYEE_ADDRESS_ID = null;

    /**
     * @var float $PAYEE_ID
     */
    protected $PAYEE_ID = null;

    /**
     * @var string $ADDRESS1
     */
    protected $ADDRESS1 = null;

    /**
     * @var string $ADDRESS2
     */
    protected $ADDRESS2 = null;

    /**
     * @var string $CITY
     */
    protected $CITY = null;

    /**
     * @var string $STATE
     */
    protected $STATE = null;

    /**
     * @var string $COUNTRY
     */
    protected $COUNTRY = null;

    /**
     * @var string $ZIPCODE
     */
    protected $ZIPCODE = null;

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
     * @var float $ORIGINAL_ID
     */
    protected $ORIGINAL_ID = null;

    /**
     * @param float $PAYEE_ADDRESS_ID
     * @param float $PAYEE_ID
     * @param string $ADDRESS1
     * @param string $ADDRESS2
     * @param string $CITY
     * @param string $STATE
     * @param string $COUNTRY
     * @param string $ZIPCODE
     * @param string $ACTIVE_FLAG
     * @param \DateTime $MODIFIED_DATE
     * @param \DateTime $CREATION_DATE
     * @param string $MODIFIED_BY
     * @param float $ORIGINAL_ID
     */
    public function __construct($PAYEE_ADDRESS_ID, $PAYEE_ID, $ADDRESS1, $ADDRESS2, $CITY, $STATE, $COUNTRY, $ZIPCODE, $ACTIVE_FLAG, \DateTime $MODIFIED_DATE, \DateTime $CREATION_DATE, $MODIFIED_BY, $ORIGINAL_ID)
    {
      $this->PAYEE_ADDRESS_ID = $PAYEE_ADDRESS_ID;
      $this->PAYEE_ID = $PAYEE_ID;
      $this->ADDRESS1 = $ADDRESS1;
      $this->ADDRESS2 = $ADDRESS2;
      $this->CITY = $CITY;
      $this->STATE = $STATE;
      $this->COUNTRY = $COUNTRY;
      $this->ZIPCODE = $ZIPCODE;
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
      $this->CREATION_DATE = $CREATION_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_BY = $MODIFIED_BY;
      $this->ORIGINAL_ID = $ORIGINAL_ID;
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
     * @return ADDRESSES
     */
    public function setPAYEE_ADDRESS_ID($PAYEE_ADDRESS_ID)
    {
      $this->PAYEE_ADDRESS_ID = $PAYEE_ADDRESS_ID;
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
     * @return ADDRESSES
     */
    public function setPAYEE_ID($PAYEE_ID)
    {
      $this->PAYEE_ID = $PAYEE_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getADDRESS1()
    {
      return $this->ADDRESS1;
    }

    /**
     * @param string $ADDRESS1
     * @return ADDRESSES
     */
    public function setADDRESS1($ADDRESS1)
    {
      $this->ADDRESS1 = $ADDRESS1;
      return $this;
    }

    /**
     * @return string
     */
    public function getADDRESS2()
    {
      return $this->ADDRESS2;
    }

    /**
     * @param string $ADDRESS2
     * @return ADDRESSES
     */
    public function setADDRESS2($ADDRESS2)
    {
      $this->ADDRESS2 = $ADDRESS2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCITY()
    {
      return $this->CITY;
    }

    /**
     * @param string $CITY
     * @return ADDRESSES
     */
    public function setCITY($CITY)
    {
      $this->CITY = $CITY;
      return $this;
    }

    /**
     * @return string
     */
    public function getSTATE()
    {
      return $this->STATE;
    }

    /**
     * @param string $STATE
     * @return ADDRESSES
     */
    public function setSTATE($STATE)
    {
      $this->STATE = $STATE;
      return $this;
    }

    /**
     * @return string
     */
    public function getCOUNTRY()
    {
      return $this->COUNTRY;
    }

    /**
     * @param string $COUNTRY
     * @return ADDRESSES
     */
    public function setCOUNTRY($COUNTRY)
    {
      $this->COUNTRY = $COUNTRY;
      return $this;
    }

    /**
     * @return string
     */
    public function getZIPCODE()
    {
      return $this->ZIPCODE;
    }

    /**
     * @param string $ZIPCODE
     * @return ADDRESSES
     */
    public function setZIPCODE($ZIPCODE)
    {
      $this->ZIPCODE = $ZIPCODE;
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
     * @return ADDRESSES
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
     * @return ADDRESSES
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
     * @return ADDRESSES
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
     * @return ADDRESSES
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
     * @return ADDRESSES
     */
    public function setORIGINAL_ID($ORIGINAL_ID)
    {
      $this->ORIGINAL_ID = $ORIGINAL_ID;
      return $this;
    }

}
