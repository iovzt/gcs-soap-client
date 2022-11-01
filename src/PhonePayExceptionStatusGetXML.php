<?php

class PhonePayExceptionStatusGetXML
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
     * @var string $exceptionId
     */
    protected $exceptionId = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $exceptionId
     */
    public function __construct($userName, $password, $exceptionId)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->exceptionId = $exceptionId;
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
     * @return PhonePayExceptionStatusGetXML
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
     * @return PhonePayExceptionStatusGetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getExceptionId()
    {
      return $this->exceptionId;
    }

    /**
     * @param string $exceptionId
     * @return PhonePayExceptionStatusGetXML
     */
    public function setExceptionId($exceptionId)
    {
      $this->exceptionId = $exceptionId;
      return $this;
    }

}
