<?php

class TransfersSetADO
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
     * @var transfersDataADO $transfersDataADO
     */
    protected $transfersDataADO = null;

    /**
     * @param string $userName
     * @param string $password
     * @param transfersDataADO $transfersDataADO
     */
    public function __construct($userName, $password, $transfersDataADO)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->transfersDataADO = $transfersDataADO;
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
     * @return TransfersSetADO
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
     * @return TransfersSetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return transfersDataADO
     */
    public function getTransfersDataADO()
    {
      return $this->transfersDataADO;
    }

    /**
     * @param transfersDataADO $transfersDataADO
     * @return TransfersSetADO
     */
    public function setTransfersDataADO($transfersDataADO)
    {
      $this->transfersDataADO = $transfersDataADO;
      return $this;
    }

}
