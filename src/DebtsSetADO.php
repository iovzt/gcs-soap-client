<?php

class DebtsSetADO
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
     * @var debtsDataADO $debtsDataADO
     */
    protected $debtsDataADO = null;

    /**
     * @param string $userName
     * @param string $password
     * @param debtsDataADO $debtsDataADO
     */
    public function __construct($userName, $password, $debtsDataADO)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->debtsDataADO = $debtsDataADO;
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
     * @return DebtsSetADO
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
     * @return DebtsSetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return debtsDataADO
     */
    public function getDebtsDataADO()
    {
      return $this->debtsDataADO;
    }

    /**
     * @param debtsDataADO $debtsDataADO
     * @return DebtsSetADO
     */
    public function setDebtsDataADO($debtsDataADO)
    {
      $this->debtsDataADO = $debtsDataADO;
      return $this;
    }

}
