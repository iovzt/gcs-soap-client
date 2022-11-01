<?php

class IsValidPayeeForRpps
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
     * @var string $payeeName
     */
    protected $payeeName = null;

    /**
     * @var string $payeeClientNum
     */
    protected $payeeClientNum = null;

    /**
     * @var string $address1
     */
    protected $address1 = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var string $zipCode
     */
    protected $zipCode = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $payeeName
     * @param string $payeeClientNum
     * @param string $address1
     * @param string $city
     * @param string $state
     * @param string $zipCode
     */
    public function __construct($userName, $password, $payeeName, $payeeClientNum, $address1, $city, $state, $zipCode)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->payeeName = $payeeName;
      $this->payeeClientNum = $payeeClientNum;
      $this->address1 = $address1;
      $this->city = $city;
      $this->state = $state;
      $this->zipCode = $zipCode;
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
     * @return IsValidPayeeForRpps
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
     * @return IsValidPayeeForRpps
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayeeName()
    {
      return $this->payeeName;
    }

    /**
     * @param string $payeeName
     * @return IsValidPayeeForRpps
     */
    public function setPayeeName($payeeName)
    {
      $this->payeeName = $payeeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayeeClientNum()
    {
      return $this->payeeClientNum;
    }

    /**
     * @param string $payeeClientNum
     * @return IsValidPayeeForRpps
     */
    public function setPayeeClientNum($payeeClientNum)
    {
      $this->payeeClientNum = $payeeClientNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
      return $this->address1;
    }

    /**
     * @param string $address1
     * @return IsValidPayeeForRpps
     */
    public function setAddress1($address1)
    {
      $this->address1 = $address1;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return IsValidPayeeForRpps
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param string $state
     * @return IsValidPayeeForRpps
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return IsValidPayeeForRpps
     */
    public function setZipCode($zipCode)
    {
      $this->zipCode = $zipCode;
      return $this;
    }

}
