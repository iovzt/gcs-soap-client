<?php

class SettlementTransactionLinksSetXML
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
     * @var settlementTransactionLinksNodeIn $settlementTransactionLinksNodeIn
     */
    protected $settlementTransactionLinksNodeIn = null;

    /**
     * @param string $userName
     * @param string $password
     * @param settlementTransactionLinksNodeIn $settlementTransactionLinksNodeIn
     */
    public function __construct($userName, $password, $settlementTransactionLinksNodeIn)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->settlementTransactionLinksNodeIn = $settlementTransactionLinksNodeIn;
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
     * @return SettlementTransactionLinksSetXML
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
     * @return SettlementTransactionLinksSetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return settlementTransactionLinksNodeIn
     */
    public function getSettlementTransactionLinksNodeIn()
    {
      return $this->settlementTransactionLinksNodeIn;
    }

    /**
     * @param settlementTransactionLinksNodeIn $settlementTransactionLinksNodeIn
     * @return SettlementTransactionLinksSetXML
     */
    public function setSettlementTransactionLinksNodeIn($settlementTransactionLinksNodeIn)
    {
      $this->settlementTransactionLinksNodeIn = $settlementTransactionLinksNodeIn;
      return $this;
    }

}
