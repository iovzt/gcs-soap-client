<?php

class BANKACCOUNTSTATUS
{

    /**
     * @var string $ROUTING_NUMBER
     */
    protected $ROUTING_NUMBER = null;

    /**
     * @var string $ACCOUNT_NUMBER
     */
    protected $ACCOUNT_NUMBER = null;

    /**
     * @var string $STATUS
     */
    protected $STATUS = null;

    /**
     * @var string $CODE
     */
    protected $CODE = null;

    /**
     * @var string $MESSAGE
     */
    protected $MESSAGE = null;

    /**
     * @param string $ROUTING_NUMBER
     * @param string $ACCOUNT_NUMBER
     * @param string $STATUS
     * @param string $CODE
     * @param string $MESSAGE
     */
    public function __construct($ROUTING_NUMBER, $ACCOUNT_NUMBER, $STATUS, $CODE, $MESSAGE)
    {
      $this->ROUTING_NUMBER = $ROUTING_NUMBER;
      $this->ACCOUNT_NUMBER = $ACCOUNT_NUMBER;
      $this->STATUS = $STATUS;
      $this->CODE = $CODE;
      $this->MESSAGE = $MESSAGE;
    }

    /**
     * @return string
     */
    public function getROUTING_NUMBER()
    {
      return $this->ROUTING_NUMBER;
    }

    /**
     * @param string $ROUTING_NUMBER
     * @return BANKACCOUNTSTATUS
     */
    public function setROUTING_NUMBER($ROUTING_NUMBER)
    {
      $this->ROUTING_NUMBER = $ROUTING_NUMBER;
      return $this;
    }

    /**
     * @return string
     */
    public function getACCOUNT_NUMBER()
    {
      return $this->ACCOUNT_NUMBER;
    }

    /**
     * @param string $ACCOUNT_NUMBER
     * @return BANKACCOUNTSTATUS
     */
    public function setACCOUNT_NUMBER($ACCOUNT_NUMBER)
    {
      $this->ACCOUNT_NUMBER = $ACCOUNT_NUMBER;
      return $this;
    }

    /**
     * @return string
     */
    public function getSTATUS()
    {
      return $this->STATUS;
    }

    /**
     * @param string $STATUS
     * @return BANKACCOUNTSTATUS
     */
    public function setSTATUS($STATUS)
    {
      $this->STATUS = $STATUS;
      return $this;
    }

    /**
     * @return string
     */
    public function getCODE()
    {
      return $this->CODE;
    }

    /**
     * @param string $CODE
     * @return BANKACCOUNTSTATUS
     */
    public function setCODE($CODE)
    {
      $this->CODE = $CODE;
      return $this;
    }

    /**
     * @return string
     */
    public function getMESSAGE()
    {
      return $this->MESSAGE;
    }

    /**
     * @param string $MESSAGE
     * @return BANKACCOUNTSTATUS
     */
    public function setMESSAGE($MESSAGE)
    {
      $this->MESSAGE = $MESSAGE;
      return $this;
    }

}
