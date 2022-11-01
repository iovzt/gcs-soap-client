<?php

class BanksGetXML
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
     * @var string $bankRoutingNum
     */
    protected $bankRoutingNum = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $bankRoutingNum
     */
    public function __construct($userName, $password, $bankRoutingNum)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->bankRoutingNum = $bankRoutingNum;
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
     * @return BanksGetXML
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
     * @return BanksGetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankRoutingNum()
    {
      return $this->bankRoutingNum;
    }

    /**
     * @param string $bankRoutingNum
     * @return BanksGetXML
     */
    public function setBankRoutingNum($bankRoutingNum)
    {
      $this->bankRoutingNum = $bankRoutingNum;
      return $this;
    }

}
