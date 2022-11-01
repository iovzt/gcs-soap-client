<?php

class PhonePayResponseSetADO
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
     * @var responses $responses
     */
    protected $responses = null;

    /**
     * @param string $userName
     * @param string $password
     * @param responses $responses
     */
    public function __construct($userName, $password, $responses)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->responses = $responses;
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
     * @return PhonePayResponseSetADO
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
     * @return PhonePayResponseSetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return responses
     */
    public function getResponses()
    {
      return $this->responses;
    }

    /**
     * @param responses $responses
     * @return PhonePayResponseSetADO
     */
    public function setResponses($responses)
    {
      $this->responses = $responses;
      return $this;
    }

}
