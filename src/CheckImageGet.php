<?php

class CheckImageGet
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
     * @var string $paymentId
     */
    protected $paymentId = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $paymentId
     */
    public function __construct($userName, $password, $paymentId)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->paymentId = $paymentId;
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
     * @return CheckImageGet
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
     * @return CheckImageGet
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentId()
    {
      return $this->paymentId;
    }

    /**
     * @param string $paymentId
     * @return CheckImageGet
     */
    public function setPaymentId($paymentId)
    {
      $this->paymentId = $paymentId;
      return $this;
    }

}
