<?php

class TrackingInfoGetXML
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
     * @var string $trackingNumber
     */
    protected $trackingNumber = null;

    /**
     * @var string $paymentId
     */
    protected $paymentId = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $trackingNumber
     * @param string $paymentId
     */
    public function __construct($userName, $password, $trackingNumber, $paymentId)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->trackingNumber = $trackingNumber;
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
     * @return TrackingInfoGetXML
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
     * @return TrackingInfoGetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
      return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     * @return TrackingInfoGetXML
     */
    public function setTrackingNumber($trackingNumber)
    {
      $this->trackingNumber = $trackingNumber;
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
     * @return TrackingInfoGetXML
     */
    public function setPaymentId($paymentId)
    {
      $this->paymentId = $paymentId;
      return $this;
    }

}
