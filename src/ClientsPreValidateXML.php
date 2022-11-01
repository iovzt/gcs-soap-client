<?php

class ClientsPreValidateXML
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
     * @var clientNodeIn $clientNodeIn
     */
    protected $clientNodeIn = null;

    /**
     * @param string $userName
     * @param string $password
     * @param clientNodeIn $clientNodeIn
     */
    public function __construct($userName, $password, $clientNodeIn)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->clientNodeIn = $clientNodeIn;
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
     * @return ClientsPreValidateXML
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
     * @return ClientsPreValidateXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return clientNodeIn
     */
    public function getClientNodeIn()
    {
      return $this->clientNodeIn;
    }

    /**
     * @param clientNodeIn $clientNodeIn
     * @return ClientsPreValidateXML
     */
    public function setClientNodeIn($clientNodeIn)
    {
      $this->clientNodeIn = $clientNodeIn;
      return $this;
    }

}
