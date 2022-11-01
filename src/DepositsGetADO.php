<?php

class DepositsGetADO
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
     * @var string $depositID
     */
    protected $depositID = null;

    /**
     * @var string $accountID
     */
    protected $accountID = null;

    /**
     * @var float $depositAmount
     */
    protected $depositAmount = null;

    /**
     * @var string $checkDateGTE
     */
    protected $checkDateGTE = null;

    /**
     * @var string $checkDateLTE
     */
    protected $checkDateLTE = null;

    /**
     * @var string $checkNumber
     */
    protected $checkNumber = null;

    /**
     * @var string $depositStatus
     */
    protected $depositStatus = null;

    /**
     * @var string $depositType
     */
    protected $depositType = null;

    /**
     * @var string $creationDateGTE
     */
    protected $creationDateGTE = null;

    /**
     * @var string $creationDateLTE
     */
    protected $creationDateLTE = null;

    /**
     * @var string $estimatedPostDateGTE
     */
    protected $estimatedPostDateGTE = null;

    /**
     * @var string $estimatedPostDateLTE
     */
    protected $estimatedPostDateLTE = null;

    /**
     * @var string $modifiedBy
     */
    protected $modifiedBy = null;

    /**
     * @var string $modifiedDateGTE
     */
    protected $modifiedDateGTE = null;

    /**
     * @var string $modifiedDateLTE
     */
    protected $modifiedDateLTE = null;

    /**
     * @var string $NSF_Code
     */
    protected $NSF_Code = null;

    /**
     * @var string $NSF_DateGTE
     */
    protected $NSF_DateGTE = null;

    /**
     * @var string $NSF_DateLTE
     */
    protected $NSF_DateLTE = null;

    /**
     * @var string $NSF_EnteredDateGTE
     */
    protected $NSF_EnteredDateGTE = null;

    /**
     * @var string $NSF_EnteredDateLTE
     */
    protected $NSF_EnteredDateLTE = null;

    /**
     * @var string $orderBy
     */
    protected $orderBy = null;

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
     * @param string $depositID
     * @param string $accountID
     * @param float $depositAmount
     * @param string $checkDateGTE
     * @param string $checkDateLTE
     * @param string $checkNumber
     * @param string $depositStatus
     * @param string $depositType
     * @param string $creationDateGTE
     * @param string $creationDateLTE
     * @param string $estimatedPostDateGTE
     * @param string $estimatedPostDateLTE
     * @param string $modifiedBy
     * @param string $modifiedDateGTE
     * @param string $modifiedDateLTE
     * @param string $NSF_Code
     * @param string $NSF_DateGTE
     * @param string $NSF_DateLTE
     * @param string $NSF_EnteredDateGTE
     * @param string $NSF_EnteredDateLTE
     * @param string $orderBy
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($userName, $password, $depositID, $accountID, $depositAmount, $checkDateGTE, $checkDateLTE, $checkNumber, $depositStatus, $depositType, $creationDateGTE, $creationDateLTE, $estimatedPostDateGTE, $estimatedPostDateLTE, $modifiedBy, $modifiedDateGTE, $modifiedDateLTE, $NSF_Code, $NSF_DateGTE, $NSF_DateLTE, $NSF_EnteredDateGTE, $NSF_EnteredDateLTE, $orderBy, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->depositID = $depositID;
      $this->accountID = $accountID;
      $this->depositAmount = $depositAmount;
      $this->checkDateGTE = $checkDateGTE;
      $this->checkDateLTE = $checkDateLTE;
      $this->checkNumber = $checkNumber;
      $this->depositStatus = $depositStatus;
      $this->depositType = $depositType;
      $this->creationDateGTE = $creationDateGTE;
      $this->creationDateLTE = $creationDateLTE;
      $this->estimatedPostDateGTE = $estimatedPostDateGTE;
      $this->estimatedPostDateLTE = $estimatedPostDateLTE;
      $this->modifiedBy = $modifiedBy;
      $this->modifiedDateGTE = $modifiedDateGTE;
      $this->modifiedDateLTE = $modifiedDateLTE;
      $this->NSF_Code = $NSF_Code;
      $this->NSF_DateGTE = $NSF_DateGTE;
      $this->NSF_DateLTE = $NSF_DateLTE;
      $this->NSF_EnteredDateGTE = $NSF_EnteredDateGTE;
      $this->NSF_EnteredDateLTE = $NSF_EnteredDateLTE;
      $this->orderBy = $orderBy;
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
     * @return DepositsGetADO
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
     * @return DepositsGetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepositID()
    {
      return $this->depositID;
    }

    /**
     * @param string $depositID
     * @return DepositsGetADO
     */
    public function setDepositID($depositID)
    {
      $this->depositID = $depositID;
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
     * @return DepositsGetADO
     */
    public function setAccountID($accountID)
    {
      $this->accountID = $accountID;
      return $this;
    }

    /**
     * @return float
     */
    public function getDepositAmount()
    {
      return $this->depositAmount;
    }

    /**
     * @param float $depositAmount
     * @return DepositsGetADO
     */
    public function setDepositAmount($depositAmount)
    {
      $this->depositAmount = $depositAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckDateGTE()
    {
      return $this->checkDateGTE;
    }

    /**
     * @param string $checkDateGTE
     * @return DepositsGetADO
     */
    public function setCheckDateGTE($checkDateGTE)
    {
      $this->checkDateGTE = $checkDateGTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckDateLTE()
    {
      return $this->checkDateLTE;
    }

    /**
     * @param string $checkDateLTE
     * @return DepositsGetADO
     */
    public function setCheckDateLTE($checkDateLTE)
    {
      $this->checkDateLTE = $checkDateLTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckNumber()
    {
      return $this->checkNumber;
    }

    /**
     * @param string $checkNumber
     * @return DepositsGetADO
     */
    public function setCheckNumber($checkNumber)
    {
      $this->checkNumber = $checkNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepositStatus()
    {
      return $this->depositStatus;
    }

    /**
     * @param string $depositStatus
     * @return DepositsGetADO
     */
    public function setDepositStatus($depositStatus)
    {
      $this->depositStatus = $depositStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepositType()
    {
      return $this->depositType;
    }

    /**
     * @param string $depositType
     * @return DepositsGetADO
     */
    public function setDepositType($depositType)
    {
      $this->depositType = $depositType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreationDateGTE()
    {
      return $this->creationDateGTE;
    }

    /**
     * @param string $creationDateGTE
     * @return DepositsGetADO
     */
    public function setCreationDateGTE($creationDateGTE)
    {
      $this->creationDateGTE = $creationDateGTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreationDateLTE()
    {
      return $this->creationDateLTE;
    }

    /**
     * @param string $creationDateLTE
     * @return DepositsGetADO
     */
    public function setCreationDateLTE($creationDateLTE)
    {
      $this->creationDateLTE = $creationDateLTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getEstimatedPostDateGTE()
    {
      return $this->estimatedPostDateGTE;
    }

    /**
     * @param string $estimatedPostDateGTE
     * @return DepositsGetADO
     */
    public function setEstimatedPostDateGTE($estimatedPostDateGTE)
    {
      $this->estimatedPostDateGTE = $estimatedPostDateGTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getEstimatedPostDateLTE()
    {
      return $this->estimatedPostDateLTE;
    }

    /**
     * @param string $estimatedPostDateLTE
     * @return DepositsGetADO
     */
    public function setEstimatedPostDateLTE($estimatedPostDateLTE)
    {
      $this->estimatedPostDateLTE = $estimatedPostDateLTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
      return $this->modifiedBy;
    }

    /**
     * @param string $modifiedBy
     * @return DepositsGetADO
     */
    public function setModifiedBy($modifiedBy)
    {
      $this->modifiedBy = $modifiedBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDateGTE()
    {
      return $this->modifiedDateGTE;
    }

    /**
     * @param string $modifiedDateGTE
     * @return DepositsGetADO
     */
    public function setModifiedDateGTE($modifiedDateGTE)
    {
      $this->modifiedDateGTE = $modifiedDateGTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDateLTE()
    {
      return $this->modifiedDateLTE;
    }

    /**
     * @param string $modifiedDateLTE
     * @return DepositsGetADO
     */
    public function setModifiedDateLTE($modifiedDateLTE)
    {
      $this->modifiedDateLTE = $modifiedDateLTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getNSF_Code()
    {
      return $this->NSF_Code;
    }

    /**
     * @param string $NSF_Code
     * @return DepositsGetADO
     */
    public function setNSF_Code($NSF_Code)
    {
      $this->NSF_Code = $NSF_Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getNSF_DateGTE()
    {
      return $this->NSF_DateGTE;
    }

    /**
     * @param string $NSF_DateGTE
     * @return DepositsGetADO
     */
    public function setNSF_DateGTE($NSF_DateGTE)
    {
      $this->NSF_DateGTE = $NSF_DateGTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getNSF_DateLTE()
    {
      return $this->NSF_DateLTE;
    }

    /**
     * @param string $NSF_DateLTE
     * @return DepositsGetADO
     */
    public function setNSF_DateLTE($NSF_DateLTE)
    {
      $this->NSF_DateLTE = $NSF_DateLTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getNSF_EnteredDateGTE()
    {
      return $this->NSF_EnteredDateGTE;
    }

    /**
     * @param string $NSF_EnteredDateGTE
     * @return DepositsGetADO
     */
    public function setNSF_EnteredDateGTE($NSF_EnteredDateGTE)
    {
      $this->NSF_EnteredDateGTE = $NSF_EnteredDateGTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getNSF_EnteredDateLTE()
    {
      return $this->NSF_EnteredDateLTE;
    }

    /**
     * @param string $NSF_EnteredDateLTE
     * @return DepositsGetADO
     */
    public function setNSF_EnteredDateLTE($NSF_EnteredDateLTE)
    {
      $this->NSF_EnteredDateLTE = $NSF_EnteredDateLTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderBy()
    {
      return $this->orderBy;
    }

    /**
     * @param string $orderBy
     * @return DepositsGetADO
     */
    public function setOrderBy($orderBy)
    {
      $this->orderBy = $orderBy;
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
     * @return DepositsGetADO
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
     * @return DepositsGetADO
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
     * @return DepositsGetADO
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
     * @return DepositsGetADO
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
