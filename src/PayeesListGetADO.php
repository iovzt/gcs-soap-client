<?php

class PayeesListGetADO
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
     * @var string $payeeID
     */
    protected $payeeID = null;

    /**
     * @var string $DRCPayeeID
     */
    protected $DRCPayeeID = null;

    /**
     * @var string $payeeName
     */
    protected $payeeName = null;

    /**
     * @var string $activeFlag
     */
    protected $activeFlag = null;

    /**
     * @var string $creationDateGTE
     */
    protected $creationDateGTE = null;

    /**
     * @var string $creationDateLTE
     */
    protected $creationDateLTE = null;

    /**
     * @var string $modifiedDateGTE
     */
    protected $modifiedDateGTE = null;

    /**
     * @var string $modifiedDateLTE
     */
    protected $modifiedDateLTE = null;

    /**
     * @var string $modifiedBy
     */
    protected $modifiedBy = null;

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
     * @param string $payeeID
     * @param string $DRCPayeeID
     * @param string $payeeName
     * @param string $activeFlag
     * @param string $creationDateGTE
     * @param string $creationDateLTE
     * @param string $modifiedDateGTE
     * @param string $modifiedDateLTE
     * @param string $modifiedBy
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($userName, $password, $payeeID, $DRCPayeeID, $payeeName, $activeFlag, $creationDateGTE, $creationDateLTE, $modifiedDateGTE, $modifiedDateLTE, $modifiedBy, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->payeeID = $payeeID;
      $this->DRCPayeeID = $DRCPayeeID;
      $this->payeeName = $payeeName;
      $this->activeFlag = $activeFlag;
      $this->creationDateGTE = $creationDateGTE;
      $this->creationDateLTE = $creationDateLTE;
      $this->modifiedDateGTE = $modifiedDateGTE;
      $this->modifiedDateLTE = $modifiedDateLTE;
      $this->modifiedBy = $modifiedBy;
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
     * @return PayeesListGetADO
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
     * @return PayeesListGetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayeeID()
    {
      return $this->payeeID;
    }

    /**
     * @param string $payeeID
     * @return PayeesListGetADO
     */
    public function setPayeeID($payeeID)
    {
      $this->payeeID = $payeeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDRCPayeeID()
    {
      return $this->DRCPayeeID;
    }

    /**
     * @param string $DRCPayeeID
     * @return PayeesListGetADO
     */
    public function setDRCPayeeID($DRCPayeeID)
    {
      $this->DRCPayeeID = $DRCPayeeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayeeName()
    {
      return $this->payeeName;
    }

    /**
     * @param string $payeeName
     * @return PayeesListGetADO
     */
    public function setPayeeName($payeeName)
    {
      $this->payeeName = $payeeName;
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
     * @return PayeesListGetADO
     */
    public function setActiveFlag($activeFlag)
    {
      $this->activeFlag = $activeFlag;
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
     * @return PayeesListGetADO
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
     * @return PayeesListGetADO
     */
    public function setCreationDateLTE($creationDateLTE)
    {
      $this->creationDateLTE = $creationDateLTE;
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
     * @return PayeesListGetADO
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
     * @return PayeesListGetADO
     */
    public function setModifiedDateLTE($modifiedDateLTE)
    {
      $this->modifiedDateLTE = $modifiedDateLTE;
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
     * @return PayeesListGetADO
     */
    public function setModifiedBy($modifiedBy)
    {
      $this->modifiedBy = $modifiedBy;
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
     * @return PayeesListGetADO
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
     * @return PayeesListGetADO
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
     * @return PayeesListGetADO
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
     * @return PayeesListGetADO
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
