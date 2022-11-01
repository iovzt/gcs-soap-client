<?php

class ClientStatementGet
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
     * @var string $accountId
     */
    protected $accountId = null;

    /**
     * @var string $beginDate
     */
    protected $beginDate = null;

    /**
     * @var string $endDate
     */
    protected $endDate = null;

    /**
     * @var string $exportFormat
     */
    protected $exportFormat = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $accountId
     * @param string $beginDate
     * @param string $endDate
     * @param string $exportFormat
     */
    public function __construct($userName, $password, $accountId, $beginDate, $endDate, $exportFormat)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->accountId = $accountId;
      $this->beginDate = $beginDate;
      $this->endDate = $endDate;
      $this->exportFormat = $exportFormat;
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
     * @return ClientStatementGet
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
     * @return ClientStatementGet
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return ClientStatementGet
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
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
     * @return ClientStatementGet
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
     * @return ClientStatementGet
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getExportFormat()
    {
      return $this->exportFormat;
    }

    /**
     * @param string $exportFormat
     * @return ClientStatementGet
     */
    public function setExportFormat($exportFormat)
    {
      $this->exportFormat = $exportFormat;
      return $this;
    }

}
