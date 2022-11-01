<?php

class COUNTRIES
{

    /**
     * @var string $COUNTRY_CODE
     */
    protected $COUNTRY_CODE = null;

    /**
     * @var string $COUNTRY_DESCRIPTION
     */
    protected $COUNTRY_DESCRIPTION = null;

    /**
     * @param string $COUNTRY_CODE
     * @param string $COUNTRY_DESCRIPTION
     */
    public function __construct($COUNTRY_CODE, $COUNTRY_DESCRIPTION)
    {
      $this->COUNTRY_CODE = $COUNTRY_CODE;
      $this->COUNTRY_DESCRIPTION = $COUNTRY_DESCRIPTION;
    }

    /**
     * @return string
     */
    public function getCOUNTRY_CODE()
    {
      return $this->COUNTRY_CODE;
    }

    /**
     * @param string $COUNTRY_CODE
     * @return COUNTRIES
     */
    public function setCOUNTRY_CODE($COUNTRY_CODE)
    {
      $this->COUNTRY_CODE = $COUNTRY_CODE;
      return $this;
    }

    /**
     * @return string
     */
    public function getCOUNTRY_DESCRIPTION()
    {
      return $this->COUNTRY_DESCRIPTION;
    }

    /**
     * @param string $COUNTRY_DESCRIPTION
     * @return COUNTRIES
     */
    public function setCOUNTRY_DESCRIPTION($COUNTRY_DESCRIPTION)
    {
      $this->COUNTRY_DESCRIPTION = $COUNTRY_DESCRIPTION;
      return $this;
    }

}
