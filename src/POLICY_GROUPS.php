<?php

class POLICY_GROUPS
{

    /**
     * @var float $POLICY_GROUP_ID
     */
    protected $POLICY_GROUP_ID = null;

    /**
     * @var DESCRIPTION $DESCRIPTION
     */
    protected $DESCRIPTION = null;

    /**
     * @var ACTIVE_FLAG $ACTIVE_FLAG
     */
    protected $ACTIVE_FLAG = null;

    /**
     * @param float $POLICY_GROUP_ID
     * @param DESCRIPTION $DESCRIPTION
     * @param ACTIVE_FLAG $ACTIVE_FLAG
     */
    public function __construct($POLICY_GROUP_ID, $DESCRIPTION, $ACTIVE_FLAG)
    {
      $this->POLICY_GROUP_ID = $POLICY_GROUP_ID;
      $this->DESCRIPTION = $DESCRIPTION;
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
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
     * @return POLICY_GROUPS
     */
    public function setPOLICY_GROUP_ID($POLICY_GROUP_ID)
    {
      $this->POLICY_GROUP_ID = $POLICY_GROUP_ID;
      return $this;
    }

    /**
     * @return DESCRIPTION
     */
    public function getDESCRIPTION()
    {
      return $this->DESCRIPTION;
    }

    /**
     * @param DESCRIPTION $DESCRIPTION
     * @return POLICY_GROUPS
     */
    public function setDESCRIPTION($DESCRIPTION)
    {
      $this->DESCRIPTION = $DESCRIPTION;
      return $this;
    }

    /**
     * @return ACTIVE_FLAG
     */
    public function getACTIVE_FLAG()
    {
      return $this->ACTIVE_FLAG;
    }

    /**
     * @param ACTIVE_FLAG $ACTIVE_FLAG
     * @return POLICY_GROUPS
     */
    public function setACTIVE_FLAG($ACTIVE_FLAG)
    {
      $this->ACTIVE_FLAG = $ACTIVE_FLAG;
      return $this;
    }

}
