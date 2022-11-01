<?php

class VANClientDetailsWSDS
{

    /**
     * @var ERRORS $ERRORS
     */
    protected $ERRORS = null;

    /**
     * @var VAN_CLIENT_DETAILS $VAN_CLIENT_DETAILS
     */
    protected $VAN_CLIENT_DETAILS = null;

    /**
     * @param ERRORS $ERRORS
     * @param VAN_CLIENT_DETAILS $VAN_CLIENT_DETAILS
     */
    public function __construct($ERRORS, $VAN_CLIENT_DETAILS)
    {
      $this->ERRORS = $ERRORS;
      $this->VAN_CLIENT_DETAILS = $VAN_CLIENT_DETAILS;
    }

    /**
     * @return ERRORS
     */
    public function getERRORS()
    {
      return $this->ERRORS;
    }

    /**
     * @param ERRORS $ERRORS
     * @return VANClientDetailsWSDS
     */
    public function setERRORS($ERRORS)
    {
      $this->ERRORS = $ERRORS;
      return $this;
    }

    /**
     * @return VAN_CLIENT_DETAILS
     */
    public function getVAN_CLIENT_DETAILS()
    {
      return $this->VAN_CLIENT_DETAILS;
    }

    /**
     * @param VAN_CLIENT_DETAILS $VAN_CLIENT_DETAILS
     * @return VANClientDetailsWSDS
     */
    public function setVAN_CLIENT_DETAILS($VAN_CLIENT_DETAILS)
    {
      $this->VAN_CLIENT_DETAILS = $VAN_CLIENT_DETAILS;
      return $this;
    }

}
