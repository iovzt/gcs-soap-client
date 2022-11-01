<?php

class EXCEPTION_TYPES
{

    /**
     * @var string $EXCEPTION_TYPE
     */
    protected $EXCEPTION_TYPE = null;

    /**
     * @var string $EXCEPTION_DESCRIPTION
     */
    protected $EXCEPTION_DESCRIPTION = null;

    /**
     * @param string $EXCEPTION_TYPE
     * @param string $EXCEPTION_DESCRIPTION
     */
    public function __construct($EXCEPTION_TYPE, $EXCEPTION_DESCRIPTION)
    {
      $this->EXCEPTION_TYPE = $EXCEPTION_TYPE;
      $this->EXCEPTION_DESCRIPTION = $EXCEPTION_DESCRIPTION;
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
     * @return EXCEPTION_TYPES
     */
    public function setEXCEPTION_TYPE($EXCEPTION_TYPE)
    {
      $this->EXCEPTION_TYPE = $EXCEPTION_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getEXCEPTION_DESCRIPTION()
    {
      return $this->EXCEPTION_DESCRIPTION;
    }

    /**
     * @param string $EXCEPTION_DESCRIPTION
     * @return EXCEPTION_TYPES
     */
    public function setEXCEPTION_DESCRIPTION($EXCEPTION_DESCRIPTION)
    {
      $this->EXCEPTION_DESCRIPTION = $EXCEPTION_DESCRIPTION;
      return $this;
    }

}
