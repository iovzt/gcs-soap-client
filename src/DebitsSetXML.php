<?php

class DebitsSetXML
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
     * @var debitsNodeIn $debitsNodeIn
     */
    protected $debitsNodeIn = null;

    /**
     * @param string $userName
     * @param string $password
     * @param debitsNodeIn $debitsNodeIn
     */
    public function __construct($userName, $password, $debitsNodeIn)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->debitsNodeIn = $debitsNodeIn;
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
     * @return DebitsSetXML
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
     * @return DebitsSetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return debitsNodeIn
     */
    public function getDebitsNodeIn()
    {
      return $this->debitsNodeIn;
    }

    /**
     * @param debitsNodeIn $debitsNodeIn
     * @return DebitsSetXML
     */
    public function setDebitsNodeIn($debitsNodeIn)
    {
      $this->debitsNodeIn = $debitsNodeIn;
      return $this;
    }

}
