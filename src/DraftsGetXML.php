<?php

class DraftsGetXML
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
     * @var float $debitId
     */
    protected $debitId = null;

    /**
     * @var string $accountId
     */
    protected $accountId = null;

    /**
     * @var string $effectiveDateGTE
     */
    protected $effectiveDateGTE = null;

    /**
     * @var string $effectiveDateLTE
     */
    protected $effectiveDateLTE = null;

    /**
     * @var float $dayOfMonth
     */
    protected $dayOfMonth = null;

    /**
     * @var string $debitType
     */
    protected $debitType = null;

    /**
     * @var float $draftAmountGTE
     */
    protected $draftAmountGTE = null;

    /**
     * @var float $draftAmountLTE
     */
    protected $draftAmountLTE = null;

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
     * @var string $activeFlag
     */
    protected $activeFlag = null;

    /**
     * @var string $drcTransactionId
     */
    protected $drcTransactionId = null;

    /**
     * @var string $debitAuthorized
     */
    protected $debitAuthorized = null;

    /**
     * @var string $debitAuthorizedBy
     */
    protected $debitAuthorizedBy = null;

    /**
     * @var float $remainingOccurrencesGTE
     */
    protected $remainingOccurrencesGTE = null;

    /**
     * @var float $remainingOccurrencesLTE
     */
    protected $remainingOccurrencesLTE = null;

    /**
     * @var string $nextOccurrenceDateGTE
     */
    protected $nextOccurrenceDateGTE = null;

    /**
     * @var string $nextOccurrenceDateLTE
     */
    protected $nextOccurrenceDateLTE = null;

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
     * @param float $debitId
     * @param string $accountId
     * @param string $effectiveDateGTE
     * @param string $effectiveDateLTE
     * @param float $dayOfMonth
     * @param string $debitType
     * @param float $draftAmountGTE
     * @param float $draftAmountLTE
     * @param string $creationDateGTE
     * @param string $creationDateLTE
     * @param string $modifiedDateGTE
     * @param string $modifiedDateLTE
     * @param string $modifiedBy
     * @param string $activeFlag
     * @param string $drcTransactionId
     * @param string $debitAuthorized
     * @param string $debitAuthorizedBy
     * @param float $remainingOccurrencesGTE
     * @param float $remainingOccurrencesLTE
     * @param string $nextOccurrenceDateGTE
     * @param string $nextOccurrenceDateLTE
     * @param string $orderBy
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($userName, $password, $debitId, $accountId, $effectiveDateGTE, $effectiveDateLTE, $dayOfMonth, $debitType, $draftAmountGTE, $draftAmountLTE, $creationDateGTE, $creationDateLTE, $modifiedDateGTE, $modifiedDateLTE, $modifiedBy, $activeFlag, $drcTransactionId, $debitAuthorized, $debitAuthorizedBy, $remainingOccurrencesGTE, $remainingOccurrencesLTE, $nextOccurrenceDateGTE, $nextOccurrenceDateLTE, $orderBy, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->debitId = $debitId;
      $this->accountId = $accountId;
      $this->effectiveDateGTE = $effectiveDateGTE;
      $this->effectiveDateLTE = $effectiveDateLTE;
      $this->dayOfMonth = $dayOfMonth;
      $this->debitType = $debitType;
      $this->draftAmountGTE = $draftAmountGTE;
      $this->draftAmountLTE = $draftAmountLTE;
      $this->creationDateGTE = $creationDateGTE;
      $this->creationDateLTE = $creationDateLTE;
      $this->modifiedDateGTE = $modifiedDateGTE;
      $this->modifiedDateLTE = $modifiedDateLTE;
      $this->modifiedBy = $modifiedBy;
      $this->activeFlag = $activeFlag;
      $this->drcTransactionId = $drcTransactionId;
      $this->debitAuthorized = $debitAuthorized;
      $this->debitAuthorizedBy = $debitAuthorizedBy;
      $this->remainingOccurrencesGTE = $remainingOccurrencesGTE;
      $this->remainingOccurrencesLTE = $remainingOccurrencesLTE;
      $this->nextOccurrenceDateGTE = $nextOccurrenceDateGTE;
      $this->nextOccurrenceDateLTE = $nextOccurrenceDateLTE;
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
     * @return DraftsGetXML
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
     * @return DraftsGetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return float
     */
    public function getDebitId()
    {
      return $this->debitId;
    }

    /**
     * @param float $debitId
     * @return DraftsGetXML
     */
    public function setDebitId($debitId)
    {
      $this->debitId = $debitId;
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
     * @return DraftsGetXML
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveDateGTE()
    {
      return $this->effectiveDateGTE;
    }

    /**
     * @param string $effectiveDateGTE
     * @return DraftsGetXML
     */
    public function setEffectiveDateGTE($effectiveDateGTE)
    {
      $this->effectiveDateGTE = $effectiveDateGTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveDateLTE()
    {
      return $this->effectiveDateLTE;
    }

    /**
     * @param string $effectiveDateLTE
     * @return DraftsGetXML
     */
    public function setEffectiveDateLTE($effectiveDateLTE)
    {
      $this->effectiveDateLTE = $effectiveDateLTE;
      return $this;
    }

    /**
     * @return float
     */
    public function getDayOfMonth()
    {
      return $this->dayOfMonth;
    }

    /**
     * @param float $dayOfMonth
     * @return DraftsGetXML
     */
    public function setDayOfMonth($dayOfMonth)
    {
      $this->dayOfMonth = $dayOfMonth;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebitType()
    {
      return $this->debitType;
    }

    /**
     * @param string $debitType
     * @return DraftsGetXML
     */
    public function setDebitType($debitType)
    {
      $this->debitType = $debitType;
      return $this;
    }

    /**
     * @return float
     */
    public function getDraftAmountGTE()
    {
      return $this->draftAmountGTE;
    }

    /**
     * @param float $draftAmountGTE
     * @return DraftsGetXML
     */
    public function setDraftAmountGTE($draftAmountGTE)
    {
      $this->draftAmountGTE = $draftAmountGTE;
      return $this;
    }

    /**
     * @return float
     */
    public function getDraftAmountLTE()
    {
      return $this->draftAmountLTE;
    }

    /**
     * @param float $draftAmountLTE
     * @return DraftsGetXML
     */
    public function setDraftAmountLTE($draftAmountLTE)
    {
      $this->draftAmountLTE = $draftAmountLTE;
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
     * @return DraftsGetXML
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
     * @return DraftsGetXML
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
     * @return DraftsGetXML
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
     * @return DraftsGetXML
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
     * @return DraftsGetXML
     */
    public function setModifiedBy($modifiedBy)
    {
      $this->modifiedBy = $modifiedBy;
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
     * @return DraftsGetXML
     */
    public function setActiveFlag($activeFlag)
    {
      $this->activeFlag = $activeFlag;
      return $this;
    }

    /**
     * @return string
     */
    public function getDrcTransactionId()
    {
      return $this->drcTransactionId;
    }

    /**
     * @param string $drcTransactionId
     * @return DraftsGetXML
     */
    public function setDrcTransactionId($drcTransactionId)
    {
      $this->drcTransactionId = $drcTransactionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebitAuthorized()
    {
      return $this->debitAuthorized;
    }

    /**
     * @param string $debitAuthorized
     * @return DraftsGetXML
     */
    public function setDebitAuthorized($debitAuthorized)
    {
      $this->debitAuthorized = $debitAuthorized;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebitAuthorizedBy()
    {
      return $this->debitAuthorizedBy;
    }

    /**
     * @param string $debitAuthorizedBy
     * @return DraftsGetXML
     */
    public function setDebitAuthorizedBy($debitAuthorizedBy)
    {
      $this->debitAuthorizedBy = $debitAuthorizedBy;
      return $this;
    }

    /**
     * @return float
     */
    public function getRemainingOccurrencesGTE()
    {
      return $this->remainingOccurrencesGTE;
    }

    /**
     * @param float $remainingOccurrencesGTE
     * @return DraftsGetXML
     */
    public function setRemainingOccurrencesGTE($remainingOccurrencesGTE)
    {
      $this->remainingOccurrencesGTE = $remainingOccurrencesGTE;
      return $this;
    }

    /**
     * @return float
     */
    public function getRemainingOccurrencesLTE()
    {
      return $this->remainingOccurrencesLTE;
    }

    /**
     * @param float $remainingOccurrencesLTE
     * @return DraftsGetXML
     */
    public function setRemainingOccurrencesLTE($remainingOccurrencesLTE)
    {
      $this->remainingOccurrencesLTE = $remainingOccurrencesLTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getNextOccurrenceDateGTE()
    {
      return $this->nextOccurrenceDateGTE;
    }

    /**
     * @param string $nextOccurrenceDateGTE
     * @return DraftsGetXML
     */
    public function setNextOccurrenceDateGTE($nextOccurrenceDateGTE)
    {
      $this->nextOccurrenceDateGTE = $nextOccurrenceDateGTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getNextOccurrenceDateLTE()
    {
      return $this->nextOccurrenceDateLTE;
    }

    /**
     * @param string $nextOccurrenceDateLTE
     * @return DraftsGetXML
     */
    public function setNextOccurrenceDateLTE($nextOccurrenceDateLTE)
    {
      $this->nextOccurrenceDateLTE = $nextOccurrenceDateLTE;
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
     * @return DraftsGetXML
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
     * @return DraftsGetXML
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
     * @return DraftsGetXML
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
     * @return DraftsGetXML
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
     * @return DraftsGetXML
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
