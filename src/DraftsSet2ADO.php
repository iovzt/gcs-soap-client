<?php

class DraftsSet2ADO
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
     * @var debitsDataADO $debitsDataADO
     */
    protected $debitsDataADO = null;

    /**
     * @param string $userName
     * @param string $password
     * @param debitsDataADO $debitsDataADO
     */
    public function __construct($userName, $password, $debitsDataADO)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->debitsDataADO = $debitsDataADO;
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
     * @return DraftsSet2ADO
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
     * @return DraftsSet2ADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return debitsDataADO
     */
    public function getDebitsDataADO()
    {
      return $this->debitsDataADO;
    }

    /**
     * @param debitsDataADO $debitsDataADO
     * @return DraftsSet2ADO
     */
    public function setDebitsDataADO($debitsDataADO)
    {
      $this->debitsDataADO = $debitsDataADO;
      return $this;
    }

}
