<?php

class RESPONSE_STATUS
{

    /**
     * @var string $EXCEPTION_ID
     */
    protected $EXCEPTION_ID = null;

    /**
     * @var string $RESPONSE_STATUS
     */
    protected $RESPONSE_STATUS = null;

    /**
     * @param string $EXCEPTION_ID
     * @param string $RESPONSE_STATUS
     */
    public function __construct($EXCEPTION_ID, $RESPONSE_STATUS)
    {
      $this->EXCEPTION_ID = $EXCEPTION_ID;
      $this->RESPONSE_STATUS = $RESPONSE_STATUS;
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
     * @return RESPONSE_STATUS
     */
    public function setEXCEPTION_ID($EXCEPTION_ID)
    {
      $this->EXCEPTION_ID = $EXCEPTION_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getRESPONSE_STATUS()
    {
      return $this->RESPONSE_STATUS;
    }

    /**
     * @param string $RESPONSE_STATUS
     * @return RESPONSE_STATUS
     */
    public function setRESPONSE_STATUS($RESPONSE_STATUS)
    {
      $this->RESPONSE_STATUS = $RESPONSE_STATUS;
      return $this;
    }

}
