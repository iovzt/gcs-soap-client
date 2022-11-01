<?php

class PhonePayResponseSetXML
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
     * @var responsesNodeIn $responsesNodeIn
     */
    protected $responsesNodeIn = null;

    /**
     * @param string $userName
     * @param string $password
     * @param responsesNodeIn $responsesNodeIn
     */
    public function __construct($userName, $password, $responsesNodeIn)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->responsesNodeIn = $responsesNodeIn;
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
     * @return PhonePayResponseSetXML
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
     * @return PhonePayResponseSetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return responsesNodeIn
     */
    public function getResponsesNodeIn()
    {
      return $this->responsesNodeIn;
    }

    /**
     * @param responsesNodeIn $responsesNodeIn
     * @return PhonePayResponseSetXML
     */
    public function setResponsesNodeIn($responsesNodeIn)
    {
      $this->responsesNodeIn = $responsesNodeIn;
      return $this;
    }

}
