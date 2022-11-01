<?php

class TRACKING_INFO
{

    /**
     * @var string $TRACKING_NUMBER
     */
    protected $TRACKING_NUMBER = null;

    /**
     * @var string $ACCOUNT_ID
     */
    protected $ACCOUNT_ID = null;

    /**
     * @var string $PAYMENT_ID
     */
    protected $PAYMENT_ID = null;

    /**
     * @var string $POST_DATE
     */
    protected $POST_DATE = null;

    /**
     * @var string $PAYMENT_TYPE
     */
    protected $PAYMENT_TYPE = null;

    /**
     * @var string $PAYEE_ID
     */
    protected $PAYEE_ID = null;

    /**
     * @var string $PAYEE_NAME
     */
    protected $PAYEE_NAME = null;

    /**
     * @var string $PAYEE_ADDRESS1
     */
    protected $PAYEE_ADDRESS1 = null;

    /**
     * @var string $PAYEE_ADDRESS2
     */
    protected $PAYEE_ADDRESS2 = null;

    /**
     * @var string $PAYEE_CITY
     */
    protected $PAYEE_CITY = null;

    /**
     * @var string $PAYEE_STATE
     */
    protected $PAYEE_STATE = null;

    /**
     * @var string $PAYEE_ZIP
     */
    protected $PAYEE_ZIP = null;

    /**
     * @var string $PAYMENT_NOTES
     */
    protected $PAYMENT_NOTES = null;

    /**
     * @param string $TRACKING_NUMBER
     * @param string $ACCOUNT_ID
     * @param string $PAYMENT_ID
     * @param string $POST_DATE
     * @param string $PAYMENT_TYPE
     * @param string $PAYEE_ID
     * @param string $PAYEE_NAME
     * @param string $PAYEE_ADDRESS1
     * @param string $PAYEE_ADDRESS2
     * @param string $PAYEE_CITY
     * @param string $PAYEE_STATE
     * @param string $PAYEE_ZIP
     * @param string $PAYMENT_NOTES
     */
    public function __construct($TRACKING_NUMBER, $ACCOUNT_ID, $PAYMENT_ID, $POST_DATE, $PAYMENT_TYPE, $PAYEE_ID, $PAYEE_NAME, $PAYEE_ADDRESS1, $PAYEE_ADDRESS2, $PAYEE_CITY, $PAYEE_STATE, $PAYEE_ZIP, $PAYMENT_NOTES)
    {
      $this->TRACKING_NUMBER = $TRACKING_NUMBER;
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      $this->PAYMENT_ID = $PAYMENT_ID;
      $this->POST_DATE = $POST_DATE;
      $this->PAYMENT_TYPE = $PAYMENT_TYPE;
      $this->PAYEE_ID = $PAYEE_ID;
      $this->PAYEE_NAME = $PAYEE_NAME;
      $this->PAYEE_ADDRESS1 = $PAYEE_ADDRESS1;
      $this->PAYEE_ADDRESS2 = $PAYEE_ADDRESS2;
      $this->PAYEE_CITY = $PAYEE_CITY;
      $this->PAYEE_STATE = $PAYEE_STATE;
      $this->PAYEE_ZIP = $PAYEE_ZIP;
      $this->PAYMENT_NOTES = $PAYMENT_NOTES;
    }

    /**
     * @return string
     */
    public function getTRACKING_NUMBER()
    {
      return $this->TRACKING_NUMBER;
    }

    /**
     * @param string $TRACKING_NUMBER
     * @return TRACKING_INFO
     */
    public function setTRACKING_NUMBER($TRACKING_NUMBER)
    {
      $this->TRACKING_NUMBER = $TRACKING_NUMBER;
      return $this;
    }

    /**
     * @return string
     */
    public function getACCOUNT_ID()
    {
      return $this->ACCOUNT_ID;
    }

    /**
     * @param string $ACCOUNT_ID
     * @return TRACKING_INFO
     */
    public function setACCOUNT_ID($ACCOUNT_ID)
    {
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYMENT_ID()
    {
      return $this->PAYMENT_ID;
    }

    /**
     * @param string $PAYMENT_ID
     * @return TRACKING_INFO
     */
    public function setPAYMENT_ID($PAYMENT_ID)
    {
      $this->PAYMENT_ID = $PAYMENT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPOST_DATE()
    {
      return $this->POST_DATE;
    }

    /**
     * @param string $POST_DATE
     * @return TRACKING_INFO
     */
    public function setPOST_DATE($POST_DATE)
    {
      $this->POST_DATE = $POST_DATE;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYMENT_TYPE()
    {
      return $this->PAYMENT_TYPE;
    }

    /**
     * @param string $PAYMENT_TYPE
     * @return TRACKING_INFO
     */
    public function setPAYMENT_TYPE($PAYMENT_TYPE)
    {
      $this->PAYMENT_TYPE = $PAYMENT_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYEE_ID()
    {
      return $this->PAYEE_ID;
    }

    /**
     * @param string $PAYEE_ID
     * @return TRACKING_INFO
     */
    public function setPAYEE_ID($PAYEE_ID)
    {
      $this->PAYEE_ID = $PAYEE_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYEE_NAME()
    {
      return $this->PAYEE_NAME;
    }

    /**
     * @param string $PAYEE_NAME
     * @return TRACKING_INFO
     */
    public function setPAYEE_NAME($PAYEE_NAME)
    {
      $this->PAYEE_NAME = $PAYEE_NAME;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYEE_ADDRESS1()
    {
      return $this->PAYEE_ADDRESS1;
    }

    /**
     * @param string $PAYEE_ADDRESS1
     * @return TRACKING_INFO
     */
    public function setPAYEE_ADDRESS1($PAYEE_ADDRESS1)
    {
      $this->PAYEE_ADDRESS1 = $PAYEE_ADDRESS1;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYEE_ADDRESS2()
    {
      return $this->PAYEE_ADDRESS2;
    }

    /**
     * @param string $PAYEE_ADDRESS2
     * @return TRACKING_INFO
     */
    public function setPAYEE_ADDRESS2($PAYEE_ADDRESS2)
    {
      $this->PAYEE_ADDRESS2 = $PAYEE_ADDRESS2;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYEE_CITY()
    {
      return $this->PAYEE_CITY;
    }

    /**
     * @param string $PAYEE_CITY
     * @return TRACKING_INFO
     */
    public function setPAYEE_CITY($PAYEE_CITY)
    {
      $this->PAYEE_CITY = $PAYEE_CITY;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYEE_STATE()
    {
      return $this->PAYEE_STATE;
    }

    /**
     * @param string $PAYEE_STATE
     * @return TRACKING_INFO
     */
    public function setPAYEE_STATE($PAYEE_STATE)
    {
      $this->PAYEE_STATE = $PAYEE_STATE;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYEE_ZIP()
    {
      return $this->PAYEE_ZIP;
    }

    /**
     * @param string $PAYEE_ZIP
     * @return TRACKING_INFO
     */
    public function setPAYEE_ZIP($PAYEE_ZIP)
    {
      $this->PAYEE_ZIP = $PAYEE_ZIP;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYMENT_NOTES()
    {
      return $this->PAYMENT_NOTES;
    }

    /**
     * @param string $PAYMENT_NOTES
     * @return TRACKING_INFO
     */
    public function setPAYMENT_NOTES($PAYMENT_NOTES)
    {
      $this->PAYMENT_NOTES = $PAYMENT_NOTES;
      return $this;
    }

}
