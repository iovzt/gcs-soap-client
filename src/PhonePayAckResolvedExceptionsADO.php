<?php

class PhonePayAckResolvedExceptionsADO
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
     * @var exceptions $exceptions
     */
    protected $exceptions = null;

    /**
     * @param string $userName
     * @param string $password
     * @param exceptions $exceptions
     */
    public function __construct($userName, $password, $exceptions)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->exceptions = $exceptions;
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
     * @return PhonePayAckResolvedExceptionsADO
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
     * @return PhonePayAckResolvedExceptionsADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return exceptions
     */
    public function getExceptions()
    {
      return $this->exceptions;
    }

    /**
     * @param exceptions $exceptions
     * @return PhonePayAckResolvedExceptionsADO
     */
    public function setExceptions($exceptions)
    {
      $this->exceptions = $exceptions;
      return $this;
    }

}
