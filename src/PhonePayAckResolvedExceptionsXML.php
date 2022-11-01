<?php

class PhonePayAckResolvedExceptionsXML
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
     * @var resolvedExceptionsNodeIn $resolvedExceptionsNodeIn
     */
    protected $resolvedExceptionsNodeIn = null;

    /**
     * @param string $userName
     * @param string $password
     * @param resolvedExceptionsNodeIn $resolvedExceptionsNodeIn
     */
    public function __construct($userName, $password, $resolvedExceptionsNodeIn)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->resolvedExceptionsNodeIn = $resolvedExceptionsNodeIn;
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
     * @return PhonePayAckResolvedExceptionsXML
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
     * @return PhonePayAckResolvedExceptionsXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return resolvedExceptionsNodeIn
     */
    public function getResolvedExceptionsNodeIn()
    {
      return $this->resolvedExceptionsNodeIn;
    }

    /**
     * @param resolvedExceptionsNodeIn $resolvedExceptionsNodeIn
     * @return PhonePayAckResolvedExceptionsXML
     */
    public function setResolvedExceptionsNodeIn($resolvedExceptionsNodeIn)
    {
      $this->resolvedExceptionsNodeIn = $resolvedExceptionsNodeIn;
      return $this;
    }

}
