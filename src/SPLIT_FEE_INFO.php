<?php

class SPLIT_FEE_INFO
{

    /**
     * @var string $POLICY_GROUP_ID
     */
    protected $POLICY_GROUP_ID = null;

    /**
     * @var string $POLICY_GROUP_DESCRIPTION
     */
    protected $POLICY_GROUP_DESCRIPTION = null;

    /**
     * @var string $FEE_TYPE
     */
    protected $FEE_TYPE = null;

    /**
     * @var string $SUB_TYPE
     */
    protected $SUB_TYPE = null;

    /**
     * @var string $FEE_DESCRIPTION
     */
    protected $FEE_DESCRIPTION = null;

    /**
     * @var string $SPLIT_TYPE
     */
    protected $SPLIT_TYPE = null;

    /**
     * @var string $SPLIT_VALUE
     */
    protected $SPLIT_VALUE = null;

    /**
     * @var string $TO_ACCOUNT_ID
     */
    protected $TO_ACCOUNT_ID = null;

    /**
     * @var string $TO_ACCOUNT_NAME
     */
    protected $TO_ACCOUNT_NAME = null;

    /**
     * @var string $COMPANY_ID
     */
    protected $COMPANY_ID = null;

    /**
     * @var string $SUB_SPLIT_TYPE
     */
    protected $SUB_SPLIT_TYPE = null;

    /**
     * @param string $POLICY_GROUP_ID
     * @param string $POLICY_GROUP_DESCRIPTION
     * @param string $FEE_TYPE
     * @param string $SUB_TYPE
     * @param string $FEE_DESCRIPTION
     * @param string $SPLIT_TYPE
     * @param string $SPLIT_VALUE
     * @param string $TO_ACCOUNT_ID
     * @param string $TO_ACCOUNT_NAME
     * @param string $COMPANY_ID
     * @param string $SUB_SPLIT_TYPE
     */
    public function __construct($POLICY_GROUP_ID, $POLICY_GROUP_DESCRIPTION, $FEE_TYPE, $SUB_TYPE, $FEE_DESCRIPTION, $SPLIT_TYPE, $SPLIT_VALUE, $TO_ACCOUNT_ID, $TO_ACCOUNT_NAME, $COMPANY_ID, $SUB_SPLIT_TYPE)
    {
      $this->POLICY_GROUP_ID = $POLICY_GROUP_ID;
      $this->POLICY_GROUP_DESCRIPTION = $POLICY_GROUP_DESCRIPTION;
      $this->FEE_TYPE = $FEE_TYPE;
      $this->SUB_TYPE = $SUB_TYPE;
      $this->FEE_DESCRIPTION = $FEE_DESCRIPTION;
      $this->SPLIT_TYPE = $SPLIT_TYPE;
      $this->SPLIT_VALUE = $SPLIT_VALUE;
      $this->TO_ACCOUNT_ID = $TO_ACCOUNT_ID;
      $this->TO_ACCOUNT_NAME = $TO_ACCOUNT_NAME;
      $this->COMPANY_ID = $COMPANY_ID;
      $this->SUB_SPLIT_TYPE = $SUB_SPLIT_TYPE;
    }

    /**
     * @return string
     */
    public function getPOLICY_GROUP_ID()
    {
      return $this->POLICY_GROUP_ID;
    }

    /**
     * @param string $POLICY_GROUP_ID
     * @return SPLIT_FEE_INFO
     */
    public function setPOLICY_GROUP_ID($POLICY_GROUP_ID)
    {
      $this->POLICY_GROUP_ID = $POLICY_GROUP_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPOLICY_GROUP_DESCRIPTION()
    {
      return $this->POLICY_GROUP_DESCRIPTION;
    }

    /**
     * @param string $POLICY_GROUP_DESCRIPTION
     * @return SPLIT_FEE_INFO
     */
    public function setPOLICY_GROUP_DESCRIPTION($POLICY_GROUP_DESCRIPTION)
    {
      $this->POLICY_GROUP_DESCRIPTION = $POLICY_GROUP_DESCRIPTION;
      return $this;
    }

    /**
     * @return string
     */
    public function getFEE_TYPE()
    {
      return $this->FEE_TYPE;
    }

    /**
     * @param string $FEE_TYPE
     * @return SPLIT_FEE_INFO
     */
    public function setFEE_TYPE($FEE_TYPE)
    {
      $this->FEE_TYPE = $FEE_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getSUB_TYPE()
    {
      return $this->SUB_TYPE;
    }

    /**
     * @param string $SUB_TYPE
     * @return SPLIT_FEE_INFO
     */
    public function setSUB_TYPE($SUB_TYPE)
    {
      $this->SUB_TYPE = $SUB_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getFEE_DESCRIPTION()
    {
      return $this->FEE_DESCRIPTION;
    }

    /**
     * @param string $FEE_DESCRIPTION
     * @return SPLIT_FEE_INFO
     */
    public function setFEE_DESCRIPTION($FEE_DESCRIPTION)
    {
      $this->FEE_DESCRIPTION = $FEE_DESCRIPTION;
      return $this;
    }

    /**
     * @return string
     */
    public function getSPLIT_TYPE()
    {
      return $this->SPLIT_TYPE;
    }

    /**
     * @param string $SPLIT_TYPE
     * @return SPLIT_FEE_INFO
     */
    public function setSPLIT_TYPE($SPLIT_TYPE)
    {
      $this->SPLIT_TYPE = $SPLIT_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getSPLIT_VALUE()
    {
      return $this->SPLIT_VALUE;
    }

    /**
     * @param string $SPLIT_VALUE
     * @return SPLIT_FEE_INFO
     */
    public function setSPLIT_VALUE($SPLIT_VALUE)
    {
      $this->SPLIT_VALUE = $SPLIT_VALUE;
      return $this;
    }

    /**
     * @return string
     */
    public function getTO_ACCOUNT_ID()
    {
      return $this->TO_ACCOUNT_ID;
    }

    /**
     * @param string $TO_ACCOUNT_ID
     * @return SPLIT_FEE_INFO
     */
    public function setTO_ACCOUNT_ID($TO_ACCOUNT_ID)
    {
      $this->TO_ACCOUNT_ID = $TO_ACCOUNT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTO_ACCOUNT_NAME()
    {
      return $this->TO_ACCOUNT_NAME;
    }

    /**
     * @param string $TO_ACCOUNT_NAME
     * @return SPLIT_FEE_INFO
     */
    public function setTO_ACCOUNT_NAME($TO_ACCOUNT_NAME)
    {
      $this->TO_ACCOUNT_NAME = $TO_ACCOUNT_NAME;
      return $this;
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
     * @return SPLIT_FEE_INFO
     */
    public function setCOMPANY_ID($COMPANY_ID)
    {
      $this->COMPANY_ID = $COMPANY_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSUB_SPLIT_TYPE()
    {
      return $this->SUB_SPLIT_TYPE;
    }

    /**
     * @param string $SUB_SPLIT_TYPE
     * @return SPLIT_FEE_INFO
     */
    public function setSUB_SPLIT_TYPE($SUB_SPLIT_TYPE)
    {
      $this->SUB_SPLIT_TYPE = $SUB_SPLIT_TYPE;
      return $this;
    }

}
