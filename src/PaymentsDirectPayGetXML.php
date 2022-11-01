<?php

class PaymentsDirectPayGetXML
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
     * @var string $companyId
     */
    protected $companyId = null;

    /**
     * @var float $paymentId
     */
    protected $paymentId = null;

    /**
     * @var string $accountId
     */
    protected $accountId = null;

    /**
     * @var string $paymentClass
     */
    protected $paymentClass = null;

    /**
     * @var string $paymentType
     */
    protected $paymentType = null;

    /**
     * @var string $effectiveDateGTE
     */
    protected $effectiveDateGTE = null;

    /**
     * @var string $effectiveDateLTE
     */
    protected $effectiveDateLTE = null;

    /**
     * @var float $paymentAmount
     */
    protected $paymentAmount = null;

    /**
     * @var float $feeAmount
     */
    protected $feeAmount = null;

    /**
     * @var string $activeFlag
     */
    protected $activeFlag = null;

    /**
     * @var string $paymentStatus
     */
    protected $paymentStatus = null;

    /**
     * @var string $paymentAuthorized
     */
    protected $paymentAuthorized = null;

    /**
     * @var string $paymentAuthorizedBy
     */
    protected $paymentAuthorizedBy = null;

    /**
     * @var float $payeeId
     */
    protected $payeeId = null;

    /**
     * @var string $payeeClientNum
     */
    protected $payeeClientNum = null;

    /**
     * @var float $checkNumber
     */
    protected $checkNumber = null;

    /**
     * @var string $clearedFlag
     */
    protected $clearedFlag = null;

    /**
     * @var string $clearedDateGTE
     */
    protected $clearedDateGTE = null;

    /**
     * @var string $clearedDateLTE
     */
    protected $clearedDateLTE = null;

    /**
     * @var string $drcTransactionId
     */
    protected $drcTransactionId = null;

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
     * @var string $authorizeByDateGTE
     */
    protected $authorizeByDateGTE = null;

    /**
     * @var string $authorizeByDateLTE
     */
    protected $authorizeByDateLTE = null;

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
     * @param string $companyId
     * @param float $paymentId
     * @param string $accountId
     * @param string $paymentClass
     * @param string $paymentType
     * @param string $effectiveDateGTE
     * @param string $effectiveDateLTE
     * @param float $paymentAmount
     * @param float $feeAmount
     * @param string $activeFlag
     * @param string $paymentStatus
     * @param string $paymentAuthorized
     * @param string $paymentAuthorizedBy
     * @param float $payeeId
     * @param string $payeeClientNum
     * @param float $checkNumber
     * @param string $clearedFlag
     * @param string $clearedDateGTE
     * @param string $clearedDateLTE
     * @param string $drcTransactionId
     * @param string $creationDateGTE
     * @param string $creationDateLTE
     * @param string $modifiedDateGTE
     * @param string $modifiedDateLTE
     * @param string $modifiedBy
     * @param string $authorizeByDateGTE
     * @param string $authorizeByDateLTE
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($userName, $password, $companyId, $paymentId, $accountId, $paymentClass, $paymentType, $effectiveDateGTE, $effectiveDateLTE, $paymentAmount, $feeAmount, $activeFlag, $paymentStatus, $paymentAuthorized, $paymentAuthorizedBy, $payeeId, $payeeClientNum, $checkNumber, $clearedFlag, $clearedDateGTE, $clearedDateLTE, $drcTransactionId, $creationDateGTE, $creationDateLTE, $modifiedDateGTE, $modifiedDateLTE, $modifiedBy, $authorizeByDateGTE, $authorizeByDateLTE, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->companyId = $companyId;
      $this->paymentId = $paymentId;
      $this->accountId = $accountId;
      $this->paymentClass = $paymentClass;
      $this->paymentType = $paymentType;
      $this->effectiveDateGTE = $effectiveDateGTE;
      $this->effectiveDateLTE = $effectiveDateLTE;
      $this->paymentAmount = $paymentAmount;
      $this->feeAmount = $feeAmount;
      $this->activeFlag = $activeFlag;
      $this->paymentStatus = $paymentStatus;
      $this->paymentAuthorized = $paymentAuthorized;
      $this->paymentAuthorizedBy = $paymentAuthorizedBy;
      $this->payeeId = $payeeId;
      $this->payeeClientNum = $payeeClientNum;
      $this->checkNumber = $checkNumber;
      $this->clearedFlag = $clearedFlag;
      $this->clearedDateGTE = $clearedDateGTE;
      $this->clearedDateLTE = $clearedDateLTE;
      $this->drcTransactionId = $drcTransactionId;
      $this->creationDateGTE = $creationDateGTE;
      $this->creationDateLTE = $creationDateLTE;
      $this->modifiedDateGTE = $modifiedDateGTE;
      $this->modifiedDateLTE = $modifiedDateLTE;
      $this->modifiedBy = $modifiedBy;
      $this->authorizeByDateGTE = $authorizeByDateGTE;
      $this->authorizeByDateLTE = $authorizeByDateLTE;
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
     * @return PaymentsDirectPayGetXML
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
     * @return PaymentsDirectPayGetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyId()
    {
      return $this->companyId;
    }

    /**
     * @param string $companyId
     * @return PaymentsDirectPayGetXML
     */
    public function setCompanyId($companyId)
    {
      $this->companyId = $companyId;
      return $this;
    }

    /**
     * @return float
     */
    public function getPaymentId()
    {
      return $this->paymentId;
    }

    /**
     * @param float $paymentId
     * @return PaymentsDirectPayGetXML
     */
    public function setPaymentId($paymentId)
    {
      $this->paymentId = $paymentId;
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
     * @return PaymentsDirectPayGetXML
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentClass()
    {
      return $this->paymentClass;
    }

    /**
     * @param string $paymentClass
     * @return PaymentsDirectPayGetXML
     */
    public function setPaymentClass($paymentClass)
    {
      $this->paymentClass = $paymentClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
      return $this->paymentType;
    }

    /**
     * @param string $paymentType
     * @return PaymentsDirectPayGetXML
     */
    public function setPaymentType($paymentType)
    {
      $this->paymentType = $paymentType;
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
     * @return PaymentsDirectPayGetXML
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
     * @return PaymentsDirectPayGetXML
     */
    public function setEffectiveDateLTE($effectiveDateLTE)
    {
      $this->effectiveDateLTE = $effectiveDateLTE;
      return $this;
    }

    /**
     * @return float
     */
    public function getPaymentAmount()
    {
      return $this->paymentAmount;
    }

    /**
     * @param float $paymentAmount
     * @return PaymentsDirectPayGetXML
     */
    public function setPaymentAmount($paymentAmount)
    {
      $this->paymentAmount = $paymentAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getFeeAmount()
    {
      return $this->feeAmount;
    }

    /**
     * @param float $feeAmount
     * @return PaymentsDirectPayGetXML
     */
    public function setFeeAmount($feeAmount)
    {
      $this->feeAmount = $feeAmount;
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
     * @return PaymentsDirectPayGetXML
     */
    public function setActiveFlag($activeFlag)
    {
      $this->activeFlag = $activeFlag;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentStatus()
    {
      return $this->paymentStatus;
    }

    /**
     * @param string $paymentStatus
     * @return PaymentsDirectPayGetXML
     */
    public function setPaymentStatus($paymentStatus)
    {
      $this->paymentStatus = $paymentStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentAuthorized()
    {
      return $this->paymentAuthorized;
    }

    /**
     * @param string $paymentAuthorized
     * @return PaymentsDirectPayGetXML
     */
    public function setPaymentAuthorized($paymentAuthorized)
    {
      $this->paymentAuthorized = $paymentAuthorized;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentAuthorizedBy()
    {
      return $this->paymentAuthorizedBy;
    }

    /**
     * @param string $paymentAuthorizedBy
     * @return PaymentsDirectPayGetXML
     */
    public function setPaymentAuthorizedBy($paymentAuthorizedBy)
    {
      $this->paymentAuthorizedBy = $paymentAuthorizedBy;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayeeId()
    {
      return $this->payeeId;
    }

    /**
     * @param float $payeeId
     * @return PaymentsDirectPayGetXML
     */
    public function setPayeeId($payeeId)
    {
      $this->payeeId = $payeeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayeeClientNum()
    {
      return $this->payeeClientNum;
    }

    /**
     * @param string $payeeClientNum
     * @return PaymentsDirectPayGetXML
     */
    public function setPayeeClientNum($payeeClientNum)
    {
      $this->payeeClientNum = $payeeClientNum;
      return $this;
    }

    /**
     * @return float
     */
    public function getCheckNumber()
    {
      return $this->checkNumber;
    }

    /**
     * @param float $checkNumber
     * @return PaymentsDirectPayGetXML
     */
    public function setCheckNumber($checkNumber)
    {
      $this->checkNumber = $checkNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getClearedFlag()
    {
      return $this->clearedFlag;
    }

    /**
     * @param string $clearedFlag
     * @return PaymentsDirectPayGetXML
     */
    public function setClearedFlag($clearedFlag)
    {
      $this->clearedFlag = $clearedFlag;
      return $this;
    }

    /**
     * @return string
     */
    public function getClearedDateGTE()
    {
      return $this->clearedDateGTE;
    }

    /**
     * @param string $clearedDateGTE
     * @return PaymentsDirectPayGetXML
     */
    public function setClearedDateGTE($clearedDateGTE)
    {
      $this->clearedDateGTE = $clearedDateGTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getClearedDateLTE()
    {
      return $this->clearedDateLTE;
    }

    /**
     * @param string $clearedDateLTE
     * @return PaymentsDirectPayGetXML
     */
    public function setClearedDateLTE($clearedDateLTE)
    {
      $this->clearedDateLTE = $clearedDateLTE;
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
     * @return PaymentsDirectPayGetXML
     */
    public function setDrcTransactionId($drcTransactionId)
    {
      $this->drcTransactionId = $drcTransactionId;
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
     * @return PaymentsDirectPayGetXML
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
     * @return PaymentsDirectPayGetXML
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
     * @return PaymentsDirectPayGetXML
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
     * @return PaymentsDirectPayGetXML
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
     * @return PaymentsDirectPayGetXML
     */
    public function setModifiedBy($modifiedBy)
    {
      $this->modifiedBy = $modifiedBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizeByDateGTE()
    {
      return $this->authorizeByDateGTE;
    }

    /**
     * @param string $authorizeByDateGTE
     * @return PaymentsDirectPayGetXML
     */
    public function setAuthorizeByDateGTE($authorizeByDateGTE)
    {
      $this->authorizeByDateGTE = $authorizeByDateGTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizeByDateLTE()
    {
      return $this->authorizeByDateLTE;
    }

    /**
     * @param string $authorizeByDateLTE
     * @return PaymentsDirectPayGetXML
     */
    public function setAuthorizeByDateLTE($authorizeByDateLTE)
    {
      $this->authorizeByDateLTE = $authorizeByDateLTE;
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
     * @return PaymentsDirectPayGetXML
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
     * @return PaymentsDirectPayGetXML
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
     * @return PaymentsDirectPayGetXML
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
     * @return PaymentsDirectPayGetXML
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
