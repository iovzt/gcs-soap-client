<?php

class PaymentsSetADO
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
     * @var paymentsDataADO $paymentsDataADO
     */
    protected $paymentsDataADO = null;

    /**
     * @param string $userName
     * @param string $password
     * @param paymentsDataADO $paymentsDataADO
     */
    public function __construct($userName, $password, $paymentsDataADO)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->paymentsDataADO = $paymentsDataADO;
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
     * @return PaymentsSetADO
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
     * @return PaymentsSetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return paymentsDataADO
     */
    public function getPaymentsDataADO()
    {
      return $this->paymentsDataADO;
    }

    /**
     * @param paymentsDataADO $paymentsDataADO
     * @return PaymentsSetADO
     */
    public function setPaymentsDataADO($paymentsDataADO)
    {
      $this->paymentsDataADO = $paymentsDataADO;
      return $this;
    }

}
