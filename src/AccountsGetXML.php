<?php

class AccountsGetXML
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
     * @var string $accountID
     */
    protected $accountID = null;

    /**
     * @var string $activeFlag
     */
    protected $activeFlag = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $inUse
     */
    protected $inUse = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    /**
     * @var int $pageNumber
     */
    protected $pageNumber = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $accountID
     * @param string $activeFlag
     * @param string $status
     * @param string $inUse
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($userName, $password, $accountID, $activeFlag, $status, $inUse, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->accountID = $accountID;
      $this->activeFlag = $activeFlag;
      $this->status = $status;
      $this->inUse = $inUse;
      $this->pageSize = $pageSize;
      $this->pageNumber = $pageNumber;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
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
     * @return AccountsGetXML
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
     * @return AccountsGetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountID()
    {
      return $this->accountID;
    }

    /**
     * @param string $accountID
     * @return AccountsGetXML
     */
    public function setAccountID($accountID)
    {
      $this->accountID = $accountID;
      return $this;
    }

    /**
     * @return string
     */
    public function getActiveFlag()
    {
      return $this->activeFlag;
    }

    /**
     * @param string $activeFlag
     * @return AccountsGetXML
     */
    public function setActiveFlag($activeFlag)
    {
      $this->activeFlag = $activeFlag;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return AccountsGetXML
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getInUse()
    {
      return $this->inUse;
    }

    /**
     * @param string $inUse
     * @return AccountsGetXML
     */
    public function setInUse($inUse)
    {
      $this->inUse = $inUse;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
      return $this->pageSize;
    }

    /**
     * @param int $pageSize
     * @return AccountsGetXML
     */
    public function setPageSize($pageSize)
    {
      $this->pageSize = $pageSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
      return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     * @return AccountsGetXML
     */
    public function setPageNumber($pageNumber)
    {
      $this->pageNumber = $pageNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getRowCount()
    {
      return $this->rowCount;
    }

    /**
     * @param int $rowCount
     * @return AccountsGetXML
     */
    public function setRowCount($rowCount)
    {
      $this->rowCount = $rowCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageCount()
    {
      return $this->pageCount;
    }

    /**
     * @param int $pageCount
     * @return AccountsGetXML
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
