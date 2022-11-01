<?php

class SettlementTransactionLinksSetADO
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
     * @var settlementTransactionLinksDataADO $settlementTransactionLinksDataADO
     */
    protected $settlementTransactionLinksDataADO = null;

    /**
     * @param string $userName
     * @param string $password
     * @param settlementTransactionLinksDataADO $settlementTransactionLinksDataADO
     */
    public function __construct($userName, $password, $settlementTransactionLinksDataADO)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->settlementTransactionLinksDataADO = $settlementTransactionLinksDataADO;
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
     * @return SettlementTransactionLinksSetADO
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
     * @return SettlementTransactionLinksSetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return settlementTransactionLinksDataADO
     */
    public function getSettlementTransactionLinksDataADO()
    {
      return $this->settlementTransactionLinksDataADO;
    }

    /**
     * @param settlementTransactionLinksDataADO $settlementTransactionLinksDataADO
     * @return SettlementTransactionLinksSetADO
     */
    public function setSettlementTransactionLinksDataADO($settlementTransactionLinksDataADO)
    {
      $this->settlementTransactionLinksDataADO = $settlementTransactionLinksDataADO;
      return $this;
    }

}
