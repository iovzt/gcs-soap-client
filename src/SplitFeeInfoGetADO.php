<?php

class SplitFeeInfoGetADO
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
     * @var string $PolicyGroupId
     */
    protected $PolicyGroupId = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $PolicyGroupId
     */
    public function __construct($userName, $password, $PolicyGroupId)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->PolicyGroupId = $PolicyGroupId;
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
     * @return SplitFeeInfoGetADO
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
     * @return SplitFeeInfoGetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getPolicyGroupId()
    {
      return $this->PolicyGroupId;
    }

    /**
     * @param string $PolicyGroupId
     * @return SplitFeeInfoGetADO
     */
    public function setPolicyGroupId($PolicyGroupId)
    {
      $this->PolicyGroupId = $PolicyGroupId;
      return $this;
    }

}
