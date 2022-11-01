<?php

class PhonePayNextActiveExceptionsXML
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
     * @var int $maxItems
     */
    protected $maxItems = null;

    /**
     * @param string $userName
     * @param string $password
     * @param int $maxItems
     */
    public function __construct($userName, $password, $maxItems)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->maxItems = $maxItems;
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
     * @return PhonePayNextActiveExceptionsXML
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
     * @return PhonePayNextActiveExceptionsXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxItems()
    {
      return $this->maxItems;
    }

    /**
     * @param int $maxItems
     * @return PhonePayNextActiveExceptionsXML
     */
    public function setMaxItems($maxItems)
    {
      $this->maxItems = $maxItems;
      return $this;
    }

}
