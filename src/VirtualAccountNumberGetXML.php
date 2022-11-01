<?php

class VirtualAccountNumberGetXML
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
     * @var string $GCSDisbAcct
     */
    protected $GCSDisbAcct = null;

    /**
     * @var string $RTRoutingNum
     */
    protected $RTRoutingNum = null;

    /**
     * @var string $RCTAccountNum
     */
    protected $RCTAccountNum = null;

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
     * @param string $GCSDisbAcct
     * @param string $RTRoutingNum
     * @param string $RCTAccountNum
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($userName, $password, $accountID, $GCSDisbAcct, $RTRoutingNum, $RCTAccountNum, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->accountID = $accountID;
      $this->GCSDisbAcct = $GCSDisbAcct;
      $this->RTRoutingNum = $RTRoutingNum;
      $this->RCTAccountNum = $RCTAccountNum;
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
     * @return VirtualAccountNumberGetXML
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
     * @return VirtualAccountNumberGetXML
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
     * @return VirtualAccountNumberGetXML
     */
    public function setAccountID($accountID)
    {
      $this->accountID = $accountID;
      return $this;
    }

    /**
     * @return string
     */
    public function getGCSDisbAcct()
    {
      return $this->GCSDisbAcct;
    }

    /**
     * @param string $GCSDisbAcct
     * @return VirtualAccountNumberGetXML
     */
    public function setGCSDisbAcct($GCSDisbAcct)
    {
      $this->GCSDisbAcct = $GCSDisbAcct;
      return $this;
    }

    /**
     * @return string
     */
    public function getRTRoutingNum()
    {
      return $this->RTRoutingNum;
    }

    /**
     * @param string $RTRoutingNum
     * @return VirtualAccountNumberGetXML
     */
    public function setRTRoutingNum($RTRoutingNum)
    {
      $this->RTRoutingNum = $RTRoutingNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getRCTAccountNum()
    {
      return $this->RCTAccountNum;
    }

    /**
     * @param string $RCTAccountNum
     * @return VirtualAccountNumberGetXML
     */
    public function setRCTAccountNum($RCTAccountNum)
    {
      $this->RCTAccountNum = $RCTAccountNum;
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
     * @return VirtualAccountNumberGetXML
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
     * @return VirtualAccountNumberGetXML
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
     * @return VirtualAccountNumberGetXML
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
     * @return VirtualAccountNumberGetXML
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
