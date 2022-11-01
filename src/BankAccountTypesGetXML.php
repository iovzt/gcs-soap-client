<?php

class BankAccountTypesGetXML
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
     * @param string $userName
     * @param string $password
     */
    public function __construct($userName, $password)
    {
      $this->userName = $userName;
      $this->password = $password;
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
     * @return BankAccountTypesGetXML
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
     * @return BankAccountTypesGetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
