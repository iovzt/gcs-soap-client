<?php

class SettlementsSetADO
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
     * @var settlementDataADO $settlementDataADO
     */
    protected $settlementDataADO = null;

    /**
     * @param string $userName
     * @param string $password
     * @param settlementDataADO $settlementDataADO
     */
    public function __construct($userName, $password, $settlementDataADO)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->settlementDataADO = $settlementDataADO;
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
     * @return SettlementsSetADO
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
     * @return SettlementsSetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return settlementDataADO
     */
    public function getSettlementDataADO()
    {
      return $this->settlementDataADO;
    }

    /**
     * @param settlementDataADO $settlementDataADO
     * @return SettlementsSetADO
     */
    public function setSettlementDataADO($settlementDataADO)
    {
      $this->settlementDataADO = $settlementDataADO;
      return $this;
    }

}
