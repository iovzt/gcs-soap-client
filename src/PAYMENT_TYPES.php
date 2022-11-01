<?php

class PAYMENT_TYPES
{

    /**
     * @var string $PAYMENT_CLASS
     */
    protected $PAYMENT_CLASS = null;

    /**
     * @var string $PAYMENT_TYPE
     */
    protected $PAYMENT_TYPE = null;

    /**
     * @var string $PAYMENT_TYPE_DESC
     */
    protected $PAYMENT_TYPE_DESC = null;

    /**
     * @var float $POLICY_GROUP_ID
     */
    protected $POLICY_GROUP_ID = null;

    /**
     * @var string $ACTIVE_FLAG
     */
    protected $ACTIVE_FLAG = null;

    /**
     * @param string $PAYMENT_CLASS
     * @param string $PAYMENT_TYPE
     * @param string $PAYMENT_TYPE_DESC
     * @param float $POLICY_GROUP_ID
     * @param string $ACTIVE_FLAG
     */
    public function __construct($PAYMENT_CLASS, $PAYMENT_TYPE, $PAYMENT_TYPE_DESC, $POLICY_GROUP_ID, $ACTIVE_FLAG)
    {
      $this->PAYMENT_CLASS = $PAYMENT_CLASS;
      $this->PAYMENT_TYPE = $PAYMENT_TYPE;
      $this->PAYMENT_TYPE_DESC = $PAYMENT_TYPE_DESC;
      $this->POLICY_GROUP_ID = $POLICY_GROUP_ID;
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
    }

    /**
     * @return string
     */
    public function getPAYMENT_CLASS()
    {
      return $this->PAYMENT_CLASS;
    }

    /**
     * @param string $PAYMENT_CLASS
     * @return PAYMENT_TYPES
     */
    public function setPAYMENT_CLASS($PAYMENT_CLASS)
    {
      $this->PAYMENT_CLASS = $PAYMENT_CLASS;
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
     * @return PAYMENT_TYPES
     */
    public function setPAYMENT_TYPE($PAYMENT_TYPE)
    {
      $this->PAYMENT_TYPE = $PAYMENT_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getPAYMENT_TYPE_DESC()
    {
      return $this->PAYMENT_TYPE_DESC;
    }

    /**
     * @param string $PAYMENT_TYPE_DESC
     * @return PAYMENT_TYPES
     */
    public function setPAYMENT_TYPE_DESC($PAYMENT_TYPE_DESC)
    {
      $this->PAYMENT_TYPE_DESC = $PAYMENT_TYPE_DESC;
      return $this;
    }

    /**
     * @return float
     */
    public function getPOLICY_GROUP_ID()
    {
      return $this->POLICY_GROUP_ID;
    }

    /**
     * @param float $POLICY_GROUP_ID
     * @return PAYMENT_TYPES
     */
    public function setPOLICY_GROUP_ID($POLICY_GROUP_ID)
    {
      $this->POLICY_GROUP_ID = $POLICY_GROUP_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getACTIVE_FLAG()
    {
      return $this->ACTIVE_FLAG;
    }

    /**
     * @param string $ACTIVE_FLAG
     * @return PAYMENT_TYPES
     */
    public function setACTIVE_FLAG($ACTIVE_FLAG)
    {
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
      return $this;
    }

}
