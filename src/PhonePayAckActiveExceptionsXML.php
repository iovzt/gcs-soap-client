<?php

class PhonePayAckActiveExceptionsXML
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
     * @var exceptionsNodeIn $exceptionsNodeIn
     */
    protected $exceptionsNodeIn = null;

    /**
     * @param string $userName
     * @param string $password
     * @param exceptionsNodeIn $exceptionsNodeIn
     */
    public function __construct($userName, $password, $exceptionsNodeIn)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->exceptionsNodeIn = $exceptionsNodeIn;
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
     * @return PhonePayAckActiveExceptionsXML
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
     * @return PhonePayAckActiveExceptionsXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return exceptionsNodeIn
     */
    public function getExceptionsNodeIn()
    {
      return $this->exceptionsNodeIn;
    }

    /**
     * @param exceptionsNodeIn $exceptionsNodeIn
     * @return PhonePayAckActiveExceptionsXML
     */
    public function setExceptionsNodeIn($exceptionsNodeIn)
    {
      $this->exceptionsNodeIn = $exceptionsNodeIn;
      return $this;
    }

}
