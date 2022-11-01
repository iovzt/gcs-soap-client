<?php

class DEBIT_TYPES
{

    /**
     * @var string $DEBIT_TYPE
     */
    protected $DEBIT_TYPE = null;

    /**
     * @var string $DEBIT_TYPE_DESCRIPTION
     */
    protected $DEBIT_TYPE_DESCRIPTION = null;

    /**
     * @var float $POLICY_GROUP_ID
     */
    protected $POLICY_GROUP_ID = null;

    /**
     * @param string $DEBIT_TYPE
     * @param string $DEBIT_TYPE_DESCRIPTION
     * @param float $POLICY_GROUP_ID
     */
    public function __construct($DEBIT_TYPE, $DEBIT_TYPE_DESCRIPTION, $POLICY_GROUP_ID)
    {
      $this->DEBIT_TYPE = $DEBIT_TYPE;
      $this->DEBIT_TYPE_DESCRIPTION = $DEBIT_TYPE_DESCRIPTION;
      $this->POLICY_GROUP_ID = $POLICY_GROUP_ID;
    }

    /**
     * @return string
     */
    public function getDEBIT_TYPE()
    {
      return $this->DEBIT_TYPE;
    }

    /**
     * @param string $DEBIT_TYPE
     * @return DEBIT_TYPES
     */
    public function setDEBIT_TYPE($DEBIT_TYPE)
    {
      $this->DEBIT_TYPE = $DEBIT_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getDEBIT_TYPE_DESCRIPTION()
    {
      return $this->DEBIT_TYPE_DESCRIPTION;
    }

    /**
     * @param string $DEBIT_TYPE_DESCRIPTION
     * @return DEBIT_TYPES
     */
    public function setDEBIT_TYPE_DESCRIPTION($DEBIT_TYPE_DESCRIPTION)
    {
      $this->DEBIT_TYPE_DESCRIPTION = $DEBIT_TYPE_DESCRIPTION;
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
     * @return DEBIT_TYPES
     */
    public function setPOLICY_GROUP_ID($POLICY_GROUP_ID)
    {
      $this->POLICY_GROUP_ID = $POLICY_GROUP_ID;
      return $this;
    }

}
