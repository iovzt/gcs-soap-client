<?php

class PayeesSetADO
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
     * @var payeesDataADO $payeesDataADO
     */
    protected $payeesDataADO = null;

    /**
     * @param string $userName
     * @param string $password
     * @param payeesDataADO $payeesDataADO
     */
    public function __construct($userName, $password, $payeesDataADO)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->payeesDataADO = $payeesDataADO;
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
     * @return PayeesSetADO
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
     * @return PayeesSetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return payeesDataADO
     */
    public function getPayeesDataADO()
    {
      return $this->payeesDataADO;
    }

    /**
     * @param payeesDataADO $payeesDataADO
     * @return PayeesSetADO
     */
    public function setPayeesDataADO($payeesDataADO)
    {
      $this->payeesDataADO = $payeesDataADO;
      return $this;
    }

}
