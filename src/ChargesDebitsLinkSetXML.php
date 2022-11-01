<?php

class ChargesDebitsLinkSetXML
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
     * @var chargesNodeIn $chargesNodeIn
     */
    protected $chargesNodeIn = null;

    /**
     * @param string $userName
     * @param string $password
     * @param chargesNodeIn $chargesNodeIn
     */
    public function __construct($userName, $password, $chargesNodeIn)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->chargesNodeIn = $chargesNodeIn;
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
     * @return ChargesDebitsLinkSetXML
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
     * @return ChargesDebitsLinkSetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return chargesNodeIn
     */
    public function getChargesNodeIn()
    {
      return $this->chargesNodeIn;
    }

    /**
     * @param chargesNodeIn $chargesNodeIn
     * @return ChargesDebitsLinkSetXML
     */
    public function setChargesNodeIn($chargesNodeIn)
    {
      $this->chargesNodeIn = $chargesNodeIn;
      return $this;
    }

}
