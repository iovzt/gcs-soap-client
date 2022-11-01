<?php

class TransfersSetXML
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
     * @return TransfersSetXML
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
     * @return TransfersSetXML
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
     * @return TransfersSetXML
     */
    public function setTransfersNodeIn($transfersNodeIn)
    {
      $this->transfersNodeIn = $transfersNodeIn;
      return $this;
    }

}
