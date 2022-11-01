<?php

class DraftInfoGetADO
{

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $policyGroupID
     */
    protected $policyGroupID = null;

    /**
     * @var string $debitType
     */
    protected $debitType = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $policyGroupID
     * @param string $debitType
     */
    public function __construct($userName, $password, $policyGroupID, $debitType)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->policyGroupID = $policyGroupID;
      $this->debitType = $debitType;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->userName;
    }

    /**
     * @param string $userName
     * @return DraftInfoGetADO
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return DraftInfoGetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getPolicyGroupID()
    {
      return $this->policyGroupID;
    }

    /**
     * @param string $policyGroupID
     * @return DraftInfoGetADO
     */
    public function setPolicyGroupID($policyGroupID)
    {
      $this->policyGroupID = $policyGroupID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebitType()
    {
      return $this->debitType;
    }

    /**
     * @param string $debitType
     * @return DraftInfoGetADO
     */
    public function setDebitType($debitType)
    {
      $this->debitType = $debitType;
      return $this;
    }

}
