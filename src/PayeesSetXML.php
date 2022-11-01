<?php

class PayeesSetXML
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
     * @var payeesNodeIn $payeesNodeIn
     */
    protected $payeesNodeIn = null;

    /**
     * @param string $userName
     * @param string $password
     * @param payeesNodeIn $payeesNodeIn
     */
    public function __construct($userName, $password, $payeesNodeIn)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->payeesNodeIn = $payeesNodeIn;
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
     * @return PayeesSetXML
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
     * @return PayeesSetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return payeesNodeIn
     */
    public function getPayeesNodeIn()
    {
      return $this->payeesNodeIn;
    }

    /**
     * @param payeesNodeIn $payeesNodeIn
     * @return PayeesSetXML
     */
    public function setPayeesNodeIn($payeesNodeIn)
    {
      $this->payeesNodeIn = $payeesNodeIn;
      return $this;
    }

}
