<?php

class TransactionsGetXML
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
     * @var float $transactionId
     */
    protected $transactionId = null;

    /**
     * @var string $accountID
     */
    protected $accountID = null;

    /**
     * @var string $transactionDateGTE
     */
    protected $transactionDateGTE = null;

    /**
     * @var string $transactionDateLTE
     */
    protected $transactionDateLTE = null;

    /**
     * @var string $debitDateGTE
     */
    protected $debitDateGTE = null;

    /**
     * @var string $debitDateLTE
     */
    protected $debitDateLTE = null;

    /**
     * @var string $postDateGTE
     */
    protected $postDateGTE = null;

    /**
     * @var string $postDateLTE
     */
    protected $postDateLTE = null;

    /**
     * @var float $dayOfMonth
     */
    protected $dayOfMonth = null;

    /**
     * @var string $transactionClass
     */
    protected $transactionClass = null;

    /**
     * @var string $transactionType
     */
    protected $transactionType = null;

    /**
     * @var string $transactionStatus
     */
    protected $transactionStatus = null;

    /**
     * @var float $transactionAmount
     */
    protected $transactionAmount = null;

    /**
     * @var float $evalucheckId
     */
    protected $evalucheckId = null;

    /**
     * @var float $referenceId
     */
    protected $referenceId = null;

    /**
     * @var string $referenceFromAccountId
     */
    protected $referenceFromAccountId = null;

    /**
     * @var string $referenceToAccountId
     */
    protected $referenceToAccountId = null;

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
     * @var float $fromAccountBalance
     */
    protected $fromAccountBalance = null;

    /**
     * @var float $toAccountBalance
     */
    protected $toAccountBalance = null;

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
     * @param float $transactionId
     * @param string $accountID
     * @param string $transactionDateGTE
     * @param string $transactionDateLTE
     * @param string $debitDateGTE
     * @param string $debitDateLTE
     * @param string $postDateGTE
     * @param string $postDateLTE
     * @param float $dayOfMonth
     * @param string $transactionClass
     * @param string $transactionType
     * @param string $transactionStatus
     * @param float $transactionAmount
     * @param float $evalucheckId
     * @param float $referenceId
     * @param string $referenceFromAccountId
     * @param string $referenceToAccountId
     * @param string $creationDateGTE
     * @param string $creationDateLTE
     * @param string $modifiedDateGTE
     * @param string $modifiedDateLTE
     * @param string $modifiedBy
     * @param float $fromAccountBalance
     * @param float $toAccountBalance
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($userName, $password, $transactionId, $accountID, $transactionDateGTE, $transactionDateLTE, $debitDateGTE, $debitDateLTE, $postDateGTE, $postDateLTE, $dayOfMonth, $transactionClass, $transactionType, $transactionStatus, $transactionAmount, $evalucheckId, $referenceId, $referenceFromAccountId, $referenceToAccountId, $creationDateGTE, $creationDateLTE, $modifiedDateGTE, $modifiedDateLTE, $modifiedBy, $fromAccountBalance, $toAccountBalance, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->transactionId = $transactionId;
      $this->accountID = $accountID;
      $this->transactionDateGTE = $transactionDateGTE;
      $this->transactionDateLTE = $transactionDateLTE;
      $this->debitDateGTE = $debitDateGTE;
      $this->debitDateLTE = $debitDateLTE;
      $this->postDateGTE = $postDateGTE;
      $this->postDateLTE = $postDateLTE;
      $this->dayOfMonth = $dayOfMonth;
      $this->transactionClass = $transactionClass;
      $this->transactionType = $transactionType;
      $this->transactionStatus = $transactionStatus;
      $this->transactionAmount = $transactionAmount;
      $this->evalucheckId = $evalucheckId;
      $this->referenceId = $referenceId;
      $this->referenceFromAccountId = $referenceFromAccountId;
      $this->referenceToAccountId = $referenceToAccountId;
      $this->creationDateGTE = $creationDateGTE;
      $this->creationDateLTE = $creationDateLTE;
      $this->modifiedDateGTE = $modifiedDateGTE;
      $this->modifiedDateLTE = $modifiedDateLTE;
      $this->modifiedBy = $modifiedBy;
      $this->fromAccountBalance = $fromAccountBalance;
      $this->toAccountBalance = $toAccountBalance;
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
     * @return TransactionsGetXML
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
     * @return TransactionsGetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return float
     */
    public function getTransactionId()
    {
      return $this->transactionId;
    }

    /**
     * @param float $transactionId
     * @return TransactionsGetXML
     */
    public function setTransactionId($transactionId)
    {
      $this->transactionId = $transactionId;
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
     * @return TransactionsGetXML
     */
    public function setAccountID($accountID)
    {
      $this->accountID = $accountID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionDateGTE()
    {
      return $this->transactionDateGTE;
    }

    /**
     * @param string $transactionDateGTE
     * @return TransactionsGetXML
     */
    public function setTransactionDateGTE($transactionDateGTE)
    {
      $this->transactionDateGTE = $transactionDateGTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionDateLTE()
    {
      return $this->transactionDateLTE;
    }

    /**
     * @param string $transactionDateLTE
     * @return TransactionsGetXML
     */
    public function setTransactionDateLTE($transactionDateLTE)
    {
      $this->transactionDateLTE = $transactionDateLTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebitDateGTE()
    {
      return $this->debitDateGTE;
    }

    /**
     * @param string $debitDateGTE
     * @return TransactionsGetXML
     */
    public function setDebitDateGTE($debitDateGTE)
    {
      $this->debitDateGTE = $debitDateGTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebitDateLTE()
    {
      return $this->debitDateLTE;
    }

    /**
     * @param string $debitDateLTE
     * @return TransactionsGetXML
     */
    public function setDebitDateLTE($debitDateLTE)
    {
      $this->debitDateLTE = $debitDateLTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostDateGTE()
    {
      return $this->postDateGTE;
    }

    /**
     * @param string $postDateGTE
     * @return TransactionsGetXML
     */
    public function setPostDateGTE($postDateGTE)
    {
      $this->postDateGTE = $postDateGTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostDateLTE()
    {
      return $this->postDateLTE;
    }

    /**
     * @param string $postDateLTE
     * @return TransactionsGetXML
     */
    public function setPostDateLTE($postDateLTE)
    {
      $this->postDateLTE = $postDateLTE;
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
     * @return TransactionsGetXML
     */
    public function setDayOfMonth($dayOfMonth)
    {
      $this->dayOfMonth = $dayOfMonth;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionClass()
    {
      return $this->transactionClass;
    }

    /**
     * @param string $transactionClass
     * @return TransactionsGetXML
     */
    public function setTransactionClass($transactionClass)
    {
      $this->transactionClass = $transactionClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionType()
    {
      return $this->transactionType;
    }

    /**
     * @param string $transactionType
     * @return TransactionsGetXML
     */
    public function setTransactionType($transactionType)
    {
      $this->transactionType = $transactionType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionStatus()
    {
      return $this->transactionStatus;
    }

    /**
     * @param string $transactionStatus
     * @return TransactionsGetXML
     */
    public function setTransactionStatus($transactionStatus)
    {
      $this->transactionStatus = $transactionStatus;
      return $this;
    }

    /**
     * @return float
     */
    public function getTransactionAmount()
    {
      return $this->transactionAmount;
    }

    /**
     * @param float $transactionAmount
     * @return TransactionsGetXML
     */
    public function setTransactionAmount($transactionAmount)
    {
      $this->transactionAmount = $transactionAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getEvalucheckId()
    {
      return $this->evalucheckId;
    }

    /**
     * @param float $evalucheckId
     * @return TransactionsGetXML
     */
    public function setEvalucheckId($evalucheckId)
    {
      $this->evalucheckId = $evalucheckId;
      return $this;
    }

    /**
     * @return float
     */
    public function getReferenceId()
    {
      return $this->referenceId;
    }

    /**
     * @param float $referenceId
     * @return TransactionsGetXML
     */
    public function setReferenceId($referenceId)
    {
      $this->referenceId = $referenceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceFromAccountId()
    {
      return $this->referenceFromAccountId;
    }

    /**
     * @param string $referenceFromAccountId
     * @return TransactionsGetXML
     */
    public function setReferenceFromAccountId($referenceFromAccountId)
    {
      $this->referenceFromAccountId = $referenceFromAccountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceToAccountId()
    {
      return $this->referenceToAccountId;
    }

    /**
     * @param string $referenceToAccountId
     * @return TransactionsGetXML
     */
    public function setReferenceToAccountId($referenceToAccountId)
    {
      $this->referenceToAccountId = $referenceToAccountId;
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
     * @return TransactionsGetXML
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
     * @return TransactionsGetXML
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
     * @return TransactionsGetXML
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
     * @return TransactionsGetXML
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
     * @return TransactionsGetXML
     */
    public function setModifiedBy($modifiedBy)
    {
      $this->modifiedBy = $modifiedBy;
      return $this;
    }

    /**
     * @return float
     */
    public function getFromAccountBalance()
    {
      return $this->fromAccountBalance;
    }

    /**
     * @param float $fromAccountBalance
     * @return TransactionsGetXML
     */
    public function setFromAccountBalance($fromAccountBalance)
    {
      $this->fromAccountBalance = $fromAccountBalance;
      return $this;
    }

    /**
     * @return float
     */
    public function getToAccountBalance()
    {
      return $this->toAccountBalance;
    }

    /**
     * @param float $toAccountBalance
     * @return TransactionsGetXML
     */
    public function setToAccountBalance($toAccountBalance)
    {
      $this->toAccountBalance = $toAccountBalance;
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
     * @return TransactionsGetXML
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
     * @return TransactionsGetXML
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
     * @return TransactionsGetXML
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
     * @return TransactionsGetXML
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
