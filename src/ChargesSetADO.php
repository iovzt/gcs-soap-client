<?php

class ChargesSetADO
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
     * @var chargesDataADO $chargesDataADO
     */
    protected $chargesDataADO = null;

    /**
     * @param string $userName
     * @param string $password
     * @param chargesDataADO $chargesDataADO
     */
    public function __construct($userName, $password, $chargesDataADO)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->chargesDataADO = $chargesDataADO;
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
     * @return ChargesSetADO
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
     * @return ChargesSetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return chargesDataADO
     */
    public function getChargesDataADO()
    {
      return $this->chargesDataADO;
    }

    /**
     * @param chargesDataADO $chargesDataADO
     * @return ChargesSetADO
     */
    public function setChargesDataADO($chargesDataADO)
    {
      $this->chargesDataADO = $chargesDataADO;
      return $this;
    }

}
