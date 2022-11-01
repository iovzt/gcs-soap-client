<?php

class ACK_RESOLVED_EXCEPTIONS
{

    /**
     * @var string $EXCEPTION_ID
     */
    protected $EXCEPTION_ID = null;

    /**
     * @var boolean $ACKNOWLEDGED
     */
    protected $ACKNOWLEDGED = null;

    /**
     * @param string $EXCEPTION_ID
     * @param boolean $ACKNOWLEDGED
     */
    public function __construct($EXCEPTION_ID, $ACKNOWLEDGED)
    {
      $this->EXCEPTION_ID = $EXCEPTION_ID;
      $this->ACKNOWLEDGED = $ACKNOWLEDGED;
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
     * @return ACK_RESOLVED_EXCEPTIONS
     */
    public function setEXCEPTION_ID($EXCEPTION_ID)
    {
      $this->EXCEPTION_ID = $EXCEPTION_ID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getACKNOWLEDGED()
    {
      return $this->ACKNOWLEDGED;
    }

    /**
     * @param boolean $ACKNOWLEDGED
     * @return ACK_RESOLVED_EXCEPTIONS
     */
    public function setACKNOWLEDGED($ACKNOWLEDGED)
    {
      $this->ACKNOWLEDGED = $ACKNOWLEDGED;
      return $this;
    }

}
