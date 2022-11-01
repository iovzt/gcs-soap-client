<?php

class UpdatedBalancesGet2XML
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
     * @var string $fromDate
     */
    protected $fromDate = null;

    /**
     * @var string $toDate
     */
    protected $toDate = null;

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
     * @param string $fromDate
     * @param string $toDate
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($userName, $password, $fromDate, $toDate, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->fromDate = $fromDate;
      $this->toDate = $toDate;
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
     * @return UpdatedBalancesGet2XML
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
     * @return UpdatedBalancesGet2XML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromDate()
    {
      return $this->fromDate;
    }

    /**
     * @param string $fromDate
     * @return UpdatedBalancesGet2XML
     */
    public function setFromDate($fromDate)
    {
      $this->fromDate = $fromDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getToDate()
    {
      return $this->toDate;
    }

    /**
     * @param string $toDate
     * @return UpdatedBalancesGet2XML
     */
    public function setToDate($toDate)
    {
      $this->toDate = $toDate;
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
     * @return UpdatedBalancesGet2XML
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
     * @return UpdatedBalancesGet2XML
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
     * @return UpdatedBalancesGet2XML
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
     * @return UpdatedBalancesGet2XML
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
