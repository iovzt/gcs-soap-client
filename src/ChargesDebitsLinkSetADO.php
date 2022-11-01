<?php

class ChargesDebitsLinkSetADO
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
     * @var chargesDebitsLinkDataADO $chargesDebitsLinkDataADO
     */
    protected $chargesDebitsLinkDataADO = null;

    /**
     * @param string $userName
     * @param string $password
     * @param chargesDebitsLinkDataADO $chargesDebitsLinkDataADO
     */
    public function __construct($userName, $password, $chargesDebitsLinkDataADO)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->chargesDebitsLinkDataADO = $chargesDebitsLinkDataADO;
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
     * @return ChargesDebitsLinkSetADO
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
     * @return ChargesDebitsLinkSetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return chargesDebitsLinkDataADO
     */
    public function getChargesDebitsLinkDataADO()
    {
      return $this->chargesDebitsLinkDataADO;
    }

    /**
     * @param chargesDebitsLinkDataADO $chargesDebitsLinkDataADO
     * @return ChargesDebitsLinkSetADO
     */
    public function setChargesDebitsLinkDataADO($chargesDebitsLinkDataADO)
    {
      $this->chargesDebitsLinkDataADO = $chargesDebitsLinkDataADO;
      return $this;
    }

}
