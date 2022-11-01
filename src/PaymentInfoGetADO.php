<?php

class PaymentInfoGetADO
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
     * @var int $policyGroupId
     */
    protected $policyGroupId = null;

    /**
     * @param string $userName
     * @param string $password
     * @param int $policyGroupId
     */
    public function __construct($userName, $password, $policyGroupId)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->policyGroupId = $policyGroupId;
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
     * @return PaymentInfoGetADO
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
     * @return PaymentInfoGetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getPolicyGroupId()
    {
      return $this->policyGroupId;
    }

    /**
     * @param int $policyGroupId
     * @return PaymentInfoGetADO
     */
    public function setPolicyGroupId($policyGroupId)
    {
      $this->policyGroupId = $policyGroupId;
      return $this;
    }

}
