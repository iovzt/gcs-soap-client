<?php

class PolicyGroupsGetADO
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
     * @var string $activeFlag
     */
    protected $activeFlag = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $activeFlag
     */
    public function __construct($userName, $password, $activeFlag)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->activeFlag = $activeFlag;
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
     * @return PolicyGroupsGetADO
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
     * @return PolicyGroupsGetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getActiveFlag()
    {
      return $this->activeFlag;
    }

    /**
     * @param string $activeFlag
     * @return PolicyGroupsGetADO
     */
    public function setActiveFlag($activeFlag)
    {
      $this->activeFlag = $activeFlag;
      return $this;
    }

}
