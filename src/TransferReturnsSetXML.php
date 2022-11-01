<?php

class TransferReturnsSetXML
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
     * @var transfersNodeIn $transfersNodeIn
     */
    protected $transfersNodeIn = null;

    /**
     * @param string $userName
     * @param string $password
     * @param transfersNodeIn $transfersNodeIn
     */
    public function __construct($userName, $password, $transfersNodeIn)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->transfersNodeIn = $transfersNodeIn;
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
     * @return TransferReturnsSetXML
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
     * @return TransferReturnsSetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return transfersNodeIn
     */
    public function getTransfersNodeIn()
    {
      return $this->transfersNodeIn;
    }

    /**
     * @param transfersNodeIn $transfersNodeIn
     * @return TransferReturnsSetXML
     */
    public function setTransfersNodeIn($transfersNodeIn)
    {
      $this->transfersNodeIn = $transfersNodeIn;
      return $this;
    }

}
