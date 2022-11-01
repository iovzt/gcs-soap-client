<?php

class STATES
{

    /**
     * @var string $STATE_CODE
     */
    protected $STATE_CODE = null;

    /**
     * @var string $COUNTRY_CODE
     */
    protected $COUNTRY_CODE = null;

    /**
     * @var string $STATE_DESCRIPTION
     */
    protected $STATE_DESCRIPTION = null;

    /**
     * @param string $STATE_CODE
     * @param string $COUNTRY_CODE
     * @param string $STATE_DESCRIPTION
     */
    public function __construct($STATE_CODE, $COUNTRY_CODE, $STATE_DESCRIPTION)
    {
      $this->STATE_CODE = $STATE_CODE;
      $this->COUNTRY_CODE = $COUNTRY_CODE;
      $this->STATE_DESCRIPTION = $STATE_DESCRIPTION;
    }

    /**
     * @return string
     */
    public function getSTATE_CODE()
    {
      return $this->STATE_CODE;
    }

    /**
     * @param string $STATE_CODE
     * @return STATES
     */
    public function setSTATE_CODE($STATE_CODE)
    {
      $this->STATE_CODE = $STATE_CODE;
      return $this;
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
     * @return STATES
     */
    public function setCOUNTRY_CODE($COUNTRY_CODE)
    {
      $this->COUNTRY_CODE = $COUNTRY_CODE;
      return $this;
    }

    /**
     * @return string
     */
    public function getSTATE_DESCRIPTION()
    {
      return $this->STATE_DESCRIPTION;
    }

    /**
     * @param string $STATE_DESCRIPTION
     * @return STATES
     */
    public function setSTATE_DESCRIPTION($STATE_DESCRIPTION)
    {
      $this->STATE_DESCRIPTION = $STATE_DESCRIPTION;
      return $this;
    }

}
