<?php

class DraftInfoGetXML
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
     * @return DraftInfoGetXML
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
     * @return DraftInfoGetXML
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
     * @return DraftInfoGetXML
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
     * @return DraftInfoGetXML
     */
    public function setDebitType($debitType)
    {
      $this->debitType = $debitType;
      return $this;
    }

}
