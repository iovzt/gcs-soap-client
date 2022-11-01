<?php

class RESPONSE
{

    /**
     * @var string $EXCEPTION_ID
     */
    protected $EXCEPTION_ID = null;

    /**
     * @var string $RESPONSE_TYPE
     */
    protected $RESPONSE_TYPE = null;

    /**
     * @var string $NOTES
     */
    protected $NOTES = null;

    /**
     * @var string $PAYMENT_ID
     */
    protected $PAYMENT_ID = null;

    /**
     * @var \DateTime $MODIFIED_DATE
     */
    protected $MODIFIED_DATE = null;

    /**
     * @var string $CLIENT_ID
     */
    protected $CLIENT_ID = null;

    /**
     * @param string $EXCEPTION_ID
     * @param string $RESPONSE_TYPE
     * @param string $NOTES
     * @param string $PAYMENT_ID
     * @param \DateTime $MODIFIED_DATE
     * @param string $CLIENT_ID
     */
    public function __construct($EXCEPTION_ID, $RESPONSE_TYPE, $NOTES, $PAYMENT_ID, \DateTime $MODIFIED_DATE, $CLIENT_ID)
    {
      $this->EXCEPTION_ID = $EXCEPTION_ID;
      $this->RESPONSE_TYPE = $RESPONSE_TYPE;
      $this->NOTES = $NOTES;
      $this->PAYMENT_ID = $PAYMENT_ID;
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
      $this->CLIENT_ID = $CLIENT_ID;
    }

    /**
     * @return string
     */
    public function getEXCEPTION_ID()
    {
      return $this->EXCEPTION_ID;
    }

    /**
     * @param string $EXCEPTION_ID
     * @return RESPONSE
     */
    public function setEXCEPTION_ID($EXCEPTION_ID)
    {
      $this->EXCEPTION_ID = $EXCEPTION_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getRESPONSE_TYPE()
    {
      return $this->RESPONSE_TYPE;
    }

    /**
     * @param string $RESPONSE_TYPE
     * @return RESPONSE
     */
    public function setRESPONSE_TYPE($RESPONSE_TYPE)
    {
      $this->RESPONSE_TYPE = $RESPONSE_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getNOTES()
    {
      return $this->NOTES;
    }

    /**
     * @param string $NOTES
     * @return RESPONSE
     */
    public function setNOTES($NOTES)
    {
      $this->NOTES = $NOTES;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYMENT_ID()
    {
      return $this->PAYMENT_ID;
    }

    /**
     * @param string $PAYMENT_ID
     * @return RESPONSE
     */
    public function setPAYMENT_ID($PAYMENT_ID)
    {
      $this->PAYMENT_ID = $PAYMENT_ID;
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
     * @return RESPONSE
     */
    public function setMODIFIED_DATE(\DateTime $MODIFIED_DATE)
    {
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
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
     * @return RESPONSE
     */
    public function setCLIENT_ID($CLIENT_ID)
    {
      $this->CLIENT_ID = $CLIENT_ID;
      return $this;
    }

}
