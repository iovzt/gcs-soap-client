<?php

class VAN_CLIENT_DETAILS
{

    /**
     * @var string $COMPANY_ID
     */
    protected $COMPANY_ID = null;

    /**
     * @var string $CLIENT_ID
     */
    protected $CLIENT_ID = null;

    /**
     * @var string $GCS_DISB_ACCT
     */
    protected $GCS_DISB_ACCT = null;

    /**
     * @var string $ACCOUNT_TYPE
     */
    protected $ACCOUNT_TYPE = null;

    /**
     * @var string $ACCOUNT_PURPOSE
     */
    protected $ACCOUNT_PURPOSE = null;

    /**
     * @var string $VAN_ROUTING_NUMBER
     */
    protected $VAN_ROUTING_NUMBER = null;

    /**
     * @var string $VAN_ACCOUNT_NUMBER
     */
    protected $VAN_ACCOUNT_NUMBER = null;

    /**
     * @var string $CLEARING_ACCOUNT_NUMBER
     */
    protected $CLEARING_ACCOUNT_NUMBER = null;

    /**
     * @param string $COMPANY_ID
     * @param string $CLIENT_ID
     * @param string $GCS_DISB_ACCT
     * @param string $ACCOUNT_TYPE
     * @param string $ACCOUNT_PURPOSE
     * @param string $VAN_ROUTING_NUMBER
     * @param string $VAN_ACCOUNT_NUMBER
     * @param string $CLEARING_ACCOUNT_NUMBER
     */
    public function __construct($COMPANY_ID, $CLIENT_ID, $GCS_DISB_ACCT, $ACCOUNT_TYPE, $ACCOUNT_PURPOSE, $VAN_ROUTING_NUMBER, $VAN_ACCOUNT_NUMBER, $CLEARING_ACCOUNT_NUMBER)
    {
      $this->COMPANY_ID = $COMPANY_ID;
      $this->CLIENT_ID = $CLIENT_ID;
      $this->GCS_DISB_ACCT = $GCS_DISB_ACCT;
      $this->ACCOUNT_TYPE = $ACCOUNT_TYPE;
      $this->ACCOUNT_PURPOSE = $ACCOUNT_PURPOSE;
      $this->VAN_ROUTING_NUMBER = $VAN_ROUTING_NUMBER;
      $this->VAN_ACCOUNT_NUMBER = $VAN_ACCOUNT_NUMBER;
      $this->CLEARING_ACCOUNT_NUMBER = $CLEARING_ACCOUNT_NUMBER;
    }

    /**
     * @return string
     */
    public function getCOMPANY_ID()
    {
      return $this->COMPANY_ID;
    }

    /**
     * @param string $COMPANY_ID
     * @return VAN_CLIENT_DETAILS
     */
    public function setCOMPANY_ID($COMPANY_ID)
    {
      $this->COMPANY_ID = $COMPANY_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCLIENT_ID()
    {
      return $this->CLIENT_ID;
    }

    /**
     * @param string $CLIENT_ID
     * @return VAN_CLIENT_DETAILS
     */
    public function setCLIENT_ID($CLIENT_ID)
    {
      $this->CLIENT_ID = $CLIENT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getGCS_DISB_ACCT()
    {
      return $this->GCS_DISB_ACCT;
    }

    /**
     * @param string $GCS_DISB_ACCT
     * @return VAN_CLIENT_DETAILS
     */
    public function setGCS_DISB_ACCT($GCS_DISB_ACCT)
    {
      $this->GCS_DISB_ACCT = $GCS_DISB_ACCT;
      return $this;
    }

    /**
     * @return string
     */
    public function getACCOUNT_TYPE()
    {
      return $this->ACCOUNT_TYPE;
    }

    /**
     * @param string $ACCOUNT_TYPE
     * @return VAN_CLIENT_DETAILS
     */
    public function setACCOUNT_TYPE($ACCOUNT_TYPE)
    {
      $this->ACCOUNT_TYPE = $ACCOUNT_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getACCOUNT_PURPOSE()
    {
      return $this->ACCOUNT_PURPOSE;
    }

    /**
     * @param string $ACCOUNT_PURPOSE
     * @return VAN_CLIENT_DETAILS
     */
    public function setACCOUNT_PURPOSE($ACCOUNT_PURPOSE)
    {
      $this->ACCOUNT_PURPOSE = $ACCOUNT_PURPOSE;
      return $this;
    }

    /**
     * @return string
     */
    public function getVAN_ROUTING_NUMBER()
    {
      return $this->VAN_ROUTING_NUMBER;
    }

    /**
     * @param string $VAN_ROUTING_NUMBER
     * @return VAN_CLIENT_DETAILS
     */
    public function setVAN_ROUTING_NUMBER($VAN_ROUTING_NUMBER)
    {
      $this->VAN_ROUTING_NUMBER = $VAN_ROUTING_NUMBER;
      return $this;
    }

    /**
     * @return string
     */
    public function getVAN_ACCOUNT_NUMBER()
    {
      return $this->VAN_ACCOUNT_NUMBER;
    }

    /**
     * @param string $VAN_ACCOUNT_NUMBER
     * @return VAN_CLIENT_DETAILS
     */
    public function setVAN_ACCOUNT_NUMBER($VAN_ACCOUNT_NUMBER)
    {
      $this->VAN_ACCOUNT_NUMBER = $VAN_ACCOUNT_NUMBER;
      return $this;
    }

    /**
     * @return string
     */
    public function getCLEARING_ACCOUNT_NUMBER()
    {
      return $this->CLEARING_ACCOUNT_NUMBER;
    }

    /**
     * @param string $CLEARING_ACCOUNT_NUMBER
     * @return VAN_CLIENT_DETAILS
     */
    public function setCLEARING_ACCOUNT_NUMBER($CLEARING_ACCOUNT_NUMBER)
    {
      $this->CLEARING_ACCOUNT_NUMBER = $CLEARING_ACCOUNT_NUMBER;
      return $this;
    }

}
