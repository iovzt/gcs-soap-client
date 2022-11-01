<?php

class PaymentsSetXML
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
     * @var paymentsNodeIn $paymentsNodeIn
     */
    protected $paymentsNodeIn = null;

    /**
     * @param string $userName
     * @param string $password
     * @param paymentsNodeIn $paymentsNodeIn
     */
    public function __construct($userName, $password, $paymentsNodeIn)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->paymentsNodeIn = $paymentsNodeIn;
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
     * @return PaymentsSetXML
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
     * @return PaymentsSetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return paymentsNodeIn
     */
    public function getPaymentsNodeIn()
    {
      return $this->paymentsNodeIn;
    }

    /**
     * @param paymentsNodeIn $paymentsNodeIn
     * @return PaymentsSetXML
     */
    public function setPaymentsNodeIn($paymentsNodeIn)
    {
      $this->paymentsNodeIn = $paymentsNodeIn;
      return $this;
    }

}
