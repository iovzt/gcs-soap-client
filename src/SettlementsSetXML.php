<?php

class SettlementsSetXML
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
     * @var settlementNodeIn $settlementNodeIn
     */
    protected $settlementNodeIn = null;

    /**
     * @param string $userName
     * @param string $password
     * @param settlementNodeIn $settlementNodeIn
     */
    public function __construct($userName, $password, $settlementNodeIn)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->settlementNodeIn = $settlementNodeIn;
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
     * @return SettlementsSetXML
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
     * @return SettlementsSetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return settlementNodeIn
     */
    public function getSettlementNodeIn()
    {
      return $this->settlementNodeIn;
    }

    /**
     * @param settlementNodeIn $settlementNodeIn
     * @return SettlementsSetXML
     */
    public function setSettlementNodeIn($settlementNodeIn)
    {
      $this->settlementNodeIn = $settlementNodeIn;
      return $this;
    }

}
