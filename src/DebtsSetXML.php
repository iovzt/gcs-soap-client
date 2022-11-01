<?php

class DebtsSetXML
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
     * @var debtsNodeIn $debtsNodeIn
     */
    protected $debtsNodeIn = null;

    /**
     * @param string $userName
     * @param string $password
     * @param debtsNodeIn $debtsNodeIn
     */
    public function __construct($userName, $password, $debtsNodeIn)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->debtsNodeIn = $debtsNodeIn;
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
     * @return DebtsSetXML
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
     * @return DebtsSetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return debtsNodeIn
     */
    public function getDebtsNodeIn()
    {
      return $this->debtsNodeIn;
    }

    /**
     * @param debtsNodeIn $debtsNodeIn
     * @return DebtsSetXML
     */
    public function setDebtsNodeIn($debtsNodeIn)
    {
      $this->debtsNodeIn = $debtsNodeIn;
      return $this;
    }

}
