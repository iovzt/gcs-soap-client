<?php

class ClientsFailedValidationGetXML
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
     * @return ClientsFailedValidationGetXML
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
     * @return ClientsFailedValidationGetXML
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
     * @return ClientsFailedValidationGetXML
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
     * @return ClientsFailedValidationGetXML
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

}
