<?php

class PhonePayAckActiveExceptionsWSDS
{

    /**
     * @var ERRORS $ERRORS
     */
    protected $ERRORS = null;

    /**
     * @var META_INFO $META_INFO
     */
    protected $META_INFO = null;

    /**
     * @var ACK_ACTIVE_EXCEPTIONS $ACK_ACTIVE_EXCEPTIONS
     */
    protected $ACK_ACTIVE_EXCEPTIONS = null;

    /**
     * @param ERRORS $ERRORS
     * @param META_INFO $META_INFO
     * @param ACK_ACTIVE_EXCEPTIONS $ACK_ACTIVE_EXCEPTIONS
     */
    public function __construct($ERRORS, $META_INFO, $ACK_ACTIVE_EXCEPTIONS)
    {
      $this->ERRORS = $ERRORS;
      $this->META_INFO = $META_INFO;
      $this->ACK_ACTIVE_EXCEPTIONS = $ACK_ACTIVE_EXCEPTIONS;
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
     * @return PhonePayAckActiveExceptionsWSDS
     */
    public function setERRORS($ERRORS)
    {
      $this->ERRORS = $ERRORS;
      return $this;
    }

    /**
     * @return META_INFO
     */
    public function getMETA_INFO()
    {
      return $this->META_INFO;
    }

    /**
     * @param META_INFO $META_INFO
     * @return PhonePayAckActiveExceptionsWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

    /**
     * @return ACK_ACTIVE_EXCEPTIONS
     */
    public function getACK_ACTIVE_EXCEPTIONS()
    {
      return $this->ACK_ACTIVE_EXCEPTIONS;
    }

    /**
     * @param ACK_ACTIVE_EXCEPTIONS $ACK_ACTIVE_EXCEPTIONS
     * @return PhonePayAckActiveExceptionsWSDS
     */
    public function setACK_ACTIVE_EXCEPTIONS($ACK_ACTIVE_EXCEPTIONS)
    {
      $this->ACK_ACTIVE_EXCEPTIONS = $ACK_ACTIVE_EXCEPTIONS;
      return $this;
    }

}
