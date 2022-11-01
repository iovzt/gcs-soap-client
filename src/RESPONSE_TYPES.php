<?php

class RESPONSE_TYPES
{

    /**
     * @var string $RESPONSE_TYPE
     */
    protected $RESPONSE_TYPE = null;

    /**
     * @var string $RESPONSE_DESCRIPTION
     */
    protected $RESPONSE_DESCRIPTION = null;

    /**
     * @var string $EXCEPTION_TYPE
     */
    protected $EXCEPTION_TYPE = null;

    /**
     * @param string $RESPONSE_TYPE
     * @param string $RESPONSE_DESCRIPTION
     * @param string $EXCEPTION_TYPE
     */
    public function __construct($RESPONSE_TYPE, $RESPONSE_DESCRIPTION, $EXCEPTION_TYPE)
    {
      $this->RESPONSE_TYPE = $RESPONSE_TYPE;
      $this->RESPONSE_DESCRIPTION = $RESPONSE_DESCRIPTION;
      $this->EXCEPTION_TYPE = $EXCEPTION_TYPE;
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
     * @return RESPONSE_TYPES
     */
    public function setRESPONSE_TYPE($RESPONSE_TYPE)
    {
      $this->RESPONSE_TYPE = $RESPONSE_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getRESPONSE_DESCRIPTION()
    {
      return $this->RESPONSE_DESCRIPTION;
    }

    /**
     * @param string $RESPONSE_DESCRIPTION
     * @return RESPONSE_TYPES
     */
    public function setRESPONSE_DESCRIPTION($RESPONSE_DESCRIPTION)
    {
      $this->RESPONSE_DESCRIPTION = $RESPONSE_DESCRIPTION;
      return $this;
    }

    /**
     * @return string
     */
    public function getEXCEPTION_TYPE()
    {
      return $this->EXCEPTION_TYPE;
    }

    /**
     * @param string $EXCEPTION_TYPE
     * @return RESPONSE_TYPES
     */
    public function setEXCEPTION_TYPE($EXCEPTION_TYPE)
    {
      $this->EXCEPTION_TYPE = $EXCEPTION_TYPE;
      return $this;
    }

}
