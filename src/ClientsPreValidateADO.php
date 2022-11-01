<?php

class ClientsPreValidateADO
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
     * @var preValidationsDataADO $preValidationsDataADO
     */
    protected $preValidationsDataADO = null;

    /**
     * @param string $userName
     * @param string $password
     * @param preValidationsDataADO $preValidationsDataADO
     */
    public function __construct($userName, $password, $preValidationsDataADO)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->preValidationsDataADO = $preValidationsDataADO;
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
     * @return ClientsPreValidateADO
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
     * @return ClientsPreValidateADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return preValidationsDataADO
     */
    public function getPreValidationsDataADO()
    {
      return $this->preValidationsDataADO;
    }

    /**
     * @param preValidationsDataADO $preValidationsDataADO
     * @return ClientsPreValidateADO
     */
    public function setPreValidationsDataADO($preValidationsDataADO)
    {
      $this->preValidationsDataADO = $preValidationsDataADO;
      return $this;
    }

}
