<?php

class PhonePayAckResolvedExceptionsWSDS
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
     * @var ACK_RESOLVED_EXCEPTIONS $ACK_RESOLVED_EXCEPTIONS
     */
    protected $ACK_RESOLVED_EXCEPTIONS = null;

    /**
     * @param ERRORS $ERRORS
     * @param META_INFO $META_INFO
     * @param ACK_RESOLVED_EXCEPTIONS $ACK_RESOLVED_EXCEPTIONS
     */
    public function __construct($ERRORS, $META_INFO, $ACK_RESOLVED_EXCEPTIONS)
    {
      $this->ERRORS = $ERRORS;
      $this->META_INFO = $META_INFO;
      $this->ACK_RESOLVED_EXCEPTIONS = $ACK_RESOLVED_EXCEPTIONS;
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
     * @return PhonePayAckResolvedExceptionsWSDS
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
     * @return PhonePayAckResolvedExceptionsWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

    /**
     * @return ACK_RESOLVED_EXCEPTIONS
     */
    public function getACK_RESOLVED_EXCEPTIONS()
    {
      return $this->ACK_RESOLVED_EXCEPTIONS;
    }

    /**
     * @param ACK_RESOLVED_EXCEPTIONS $ACK_RESOLVED_EXCEPTIONS
     * @return PhonePayAckResolvedExceptionsWSDS
     */
    public function setACK_RESOLVED_EXCEPTIONS($ACK_RESOLVED_EXCEPTIONS)
    {
      $this->ACK_RESOLVED_EXCEPTIONS = $ACK_RESOLVED_EXCEPTIONS;
      return $this;
    }

}
