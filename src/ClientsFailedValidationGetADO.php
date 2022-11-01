<?php

class ClientsFailedValidationGetADO
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
     * @var string $beginDate
     */
    protected $beginDate = null;

    /**
     * @var string $endDate
     */
    protected $endDate = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $beginDate
     * @param string $endDate
     */
    public function __construct($userName, $password, $beginDate, $endDate)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->beginDate = $beginDate;
      $this->endDate = $endDate;
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
     * @return ClientsFailedValidationGetADO
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
     * @return ClientsFailedValidationGetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getBeginDate()
    {
      return $this->beginDate;
    }

    /**
     * @param string $beginDate
     * @return ClientsFailedValidationGetADO
     */
    public function setBeginDate($beginDate)
    {
      $this->beginDate = $beginDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param string $endDate
     * @return ClientsFailedValidationGetADO
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

}
