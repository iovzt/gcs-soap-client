<?php

class CheckImagesIndicatorGetADO
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
     * @var string $accountId
     */
    protected $accountId = null;

    /**
     * @var string $paymentId
     */
    protected $paymentId = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $accountId
     * @param string $paymentId
     */
    public function __construct($userName, $password, $accountId, $paymentId)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->accountId = $accountId;
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
     * @return CheckImagesIndicatorGetADO
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
     * @return CheckImagesIndicatorGetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return CheckImagesIndicatorGetADO
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
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
     * @return CheckImagesIndicatorGetADO
     */
    public function setPaymentId($paymentId)
    {
      $this->paymentId = $paymentId;
      return $this;
    }

}
