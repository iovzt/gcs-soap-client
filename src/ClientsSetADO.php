<?php

class ClientsSetADO
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
     * @var clientsDataADO $clientsDataADO
     */
    protected $clientsDataADO = null;

    /**
     * @param string $userName
     * @param string $password
     * @param clientsDataADO $clientsDataADO
     */
    public function __construct($userName, $password, $clientsDataADO)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->clientsDataADO = $clientsDataADO;
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
     * @return ClientsSetADO
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
     * @return ClientsSetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return clientsDataADO
     */
    public function getClientsDataADO()
    {
      return $this->clientsDataADO;
    }

    /**
     * @param clientsDataADO $clientsDataADO
     * @return ClientsSetADO
     */
    public function setClientsDataADO($clientsDataADO)
    {
      $this->clientsDataADO = $clientsDataADO;
      return $this;
    }

}
