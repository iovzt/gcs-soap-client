<?php

class TransferReturnsSetADO
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
     * @var transferReturnsDataADO $transferReturnsDataADO
     */
    protected $transferReturnsDataADO = null;

    /**
     * @param string $userName
     * @param string $password
     * @param transferReturnsDataADO $transferReturnsDataADO
     */
    public function __construct($userName, $password, $transferReturnsDataADO)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->transferReturnsDataADO = $transferReturnsDataADO;
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
     * @return TransferReturnsSetADO
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
     * @return TransferReturnsSetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return transferReturnsDataADO
     */
    public function getTransferReturnsDataADO()
    {
      return $this->transferReturnsDataADO;
    }

    /**
     * @param transferReturnsDataADO $transferReturnsDataADO
     * @return TransferReturnsSetADO
     */
    public function setTransferReturnsDataADO($transferReturnsDataADO)
    {
      $this->transferReturnsDataADO = $transferReturnsDataADO;
      return $this;
    }

}
