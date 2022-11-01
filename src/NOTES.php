<?php

class NOTES
{

    /**
     * @var float $NOTE_ID
     */
    protected $NOTE_ID = null;

    /**
     * @var string $ACCOUNT_ID
     */
    protected $ACCOUNT_ID = null;

    /**
     * @var string $NOTE
     */
    protected $NOTE = null;

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
     * @param float $NOTE_ID
     * @param string $ACCOUNT_ID
     * @param string $NOTE
     * @param \DateTime $CREATION_DATE
     * @param \DateTime $MODIFIED_DATE
     * @param string $MODIFIED_BY
     * @param float $ORIGINAL_ID
     */
    public function __construct($NOTE_ID, $ACCOUNT_ID, $NOTE, \DateTime $CREATION_DATE, \DateTime $MODIFIED_DATE, $MODIFIED_BY, $ORIGINAL_ID)
    {
      $this->NOTE_ID = $NOTE_ID;
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      $this->NOTE = $NOTE;
      $this->CREATION_DATE = $CREATION_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_BY = $MODIFIED_BY;
      $this->ORIGINAL_ID = $ORIGINAL_ID;
    }

    /**
     * @return float
     */
    public function getNOTE_ID()
    {
      return $this->NOTE_ID;
    }

    /**
     * @param float $NOTE_ID
     * @return NOTES
     */
    public function setNOTE_ID($NOTE_ID)
    {
      $this->NOTE_ID = $NOTE_ID;
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
     * @return NOTES
     */
    public function setACCOUNT_ID($ACCOUNT_ID)
    {
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getNOTE()
    {
      return $this->NOTE;
    }

    /**
     * @param string $NOTE
     * @return NOTES
     */
    public function setNOTE($NOTE)
    {
      $this->NOTE = $NOTE;
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
     * @return NOTES
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
     * @return NOTES
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
     * @return NOTES
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
     * @return NOTES
     */
    public function setORIGINAL_ID($ORIGINAL_ID)
    {
      $this->ORIGINAL_ID = $ORIGINAL_ID;
      return $this;
    }

}
