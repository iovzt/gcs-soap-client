<?php

class ClientsGetADO
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
     * @var string $lastName
     */
    protected $lastName = null;

    /**
     * @var string $firstName
     */
    protected $firstName = null;

    /**
     * @var string $clientID
     */
    protected $clientID = null;

    /**
     * @var string $socSecNum
     */
    protected $socSecNum = null;

    /**
     * @var string $dateOfBirthGTE
     */
    protected $dateOfBirthGTE = null;

    /**
     * @var string $dateOfBirthLTE
     */
    protected $dateOfBirthLTE = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var string $zipcode
     */
    protected $zipcode = null;

    /**
     * @var string $bankRoutingNum
     */
    protected $bankRoutingNum = null;

    /**
     * @var string $activeFlag
     */
    protected $activeFlag = null;

    /**
     * @var string $documentStatus
     */
    protected $documentStatus = null;

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
     * @var string $draftsAuthorized
     */
    protected $draftsAuthorized = null;

    /**
     * @var float $policyGroupID
     */
    protected $policyGroupID = null;

    /**
     * @var string $closeSchedDateGTE
     */
    protected $closeSchedDateGTE = null;

    /**
     * @var string $closeSchedDateLTE
     */
    protected $closeSchedDateLTE = null;

    /**
     * @var string $closeDateGTE
     */
    protected $closeDateGTE = null;

    /**
     * @var string $closeDateLTE
     */
    protected $closeDateLTE = null;

    /**
     * @var string $idVerifiedDateGTE
     */
    protected $idVerifiedDateGTE = null;

    /**
     * @var string $idVerifiedDateLTE
     */
    protected $idVerifiedDateLTE = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $lockType
     */
    protected $lockType = null;

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
     * @param string $lastName
     * @param string $firstName
     * @param string $clientID
     * @param string $socSecNum
     * @param string $dateOfBirthGTE
     * @param string $dateOfBirthLTE
     * @param string $state
     * @param string $zipcode
     * @param string $bankRoutingNum
     * @param string $activeFlag
     * @param string $documentStatus
     * @param string $creationDateGTE
     * @param string $creationDateLTE
     * @param string $modifiedDateGTE
     * @param string $modifiedDateLTE
     * @param string $modifiedBy
     * @param string $draftsAuthorized
     * @param float $policyGroupID
     * @param string $closeSchedDateGTE
     * @param string $closeSchedDateLTE
     * @param string $closeDateGTE
     * @param string $closeDateLTE
     * @param string $idVerifiedDateGTE
     * @param string $idVerifiedDateLTE
     * @param string $status
     * @param string $lockType
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($userName, $password, $accountID, $lastName, $firstName, $clientID, $socSecNum, $dateOfBirthGTE, $dateOfBirthLTE, $state, $zipcode, $bankRoutingNum, $activeFlag, $documentStatus, $creationDateGTE, $creationDateLTE, $modifiedDateGTE, $modifiedDateLTE, $modifiedBy, $draftsAuthorized, $policyGroupID, $closeSchedDateGTE, $closeSchedDateLTE, $closeDateGTE, $closeDateLTE, $idVerifiedDateGTE, $idVerifiedDateLTE, $status, $lockType, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->accountID = $accountID;
      $this->lastName = $lastName;
      $this->firstName = $firstName;
      $this->clientID = $clientID;
      $this->socSecNum = $socSecNum;
      $this->dateOfBirthGTE = $dateOfBirthGTE;
      $this->dateOfBirthLTE = $dateOfBirthLTE;
      $this->state = $state;
      $this->zipcode = $zipcode;
      $this->bankRoutingNum = $bankRoutingNum;
      $this->activeFlag = $activeFlag;
      $this->documentStatus = $documentStatus;
      $this->creationDateGTE = $creationDateGTE;
      $this->creationDateLTE = $creationDateLTE;
      $this->modifiedDateGTE = $modifiedDateGTE;
      $this->modifiedDateLTE = $modifiedDateLTE;
      $this->modifiedBy = $modifiedBy;
      $this->draftsAuthorized = $draftsAuthorized;
      $this->policyGroupID = $policyGroupID;
      $this->closeSchedDateGTE = $closeSchedDateGTE;
      $this->closeSchedDateLTE = $closeSchedDateLTE;
      $this->closeDateGTE = $closeDateGTE;
      $this->closeDateLTE = $closeDateLTE;
      $this->idVerifiedDateGTE = $idVerifiedDateGTE;
      $this->idVerifiedDateLTE = $idVerifiedDateLTE;
      $this->status = $status;
      $this->lockType = $lockType;
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
     * @return ClientsGetADO
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
     * @return ClientsGetADO
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
     * @return ClientsGetADO
     */
    public function setAccountID($accountID)
    {
      $this->accountID = $accountID;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return ClientsGetADO
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return ClientsGetADO
     */
    public function setFirstName($firstName)
    {
      $this->firstName = $firstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientID()
    {
      return $this->clientID;
    }

    /**
     * @param string $clientID
     * @return ClientsGetADO
     */
    public function setClientID($clientID)
    {
      $this->clientID = $clientID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSocSecNum()
    {
      return $this->socSecNum;
    }

    /**
     * @param string $socSecNum
     * @return ClientsGetADO
     */
    public function setSocSecNum($socSecNum)
    {
      $this->socSecNum = $socSecNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateOfBirthGTE()
    {
      return $this->dateOfBirthGTE;
    }

    /**
     * @param string $dateOfBirthGTE
     * @return ClientsGetADO
     */
    public function setDateOfBirthGTE($dateOfBirthGTE)
    {
      $this->dateOfBirthGTE = $dateOfBirthGTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateOfBirthLTE()
    {
      return $this->dateOfBirthLTE;
    }

    /**
     * @param string $dateOfBirthLTE
     * @return ClientsGetADO
     */
    public function setDateOfBirthLTE($dateOfBirthLTE)
    {
      $this->dateOfBirthLTE = $dateOfBirthLTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param string $state
     * @return ClientsGetADO
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
      return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return ClientsGetADO
     */
    public function setZipcode($zipcode)
    {
      $this->zipcode = $zipcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankRoutingNum()
    {
      return $this->bankRoutingNum;
    }

    /**
     * @param string $bankRoutingNum
     * @return ClientsGetADO
     */
    public function setBankRoutingNum($bankRoutingNum)
    {
      $this->bankRoutingNum = $bankRoutingNum;
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
     * @return ClientsGetADO
     */
    public function setActiveFlag($activeFlag)
    {
      $this->activeFlag = $activeFlag;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentStatus()
    {
      return $this->documentStatus;
    }

    /**
     * @param string $documentStatus
     * @return ClientsGetADO
     */
    public function setDocumentStatus($documentStatus)
    {
      $this->documentStatus = $documentStatus;
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
     * @return ClientsGetADO
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
     * @return ClientsGetADO
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
     * @return ClientsGetADO
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
     * @return ClientsGetADO
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
     * @return ClientsGetADO
     */
    public function setModifiedBy($modifiedBy)
    {
      $this->modifiedBy = $modifiedBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getDraftsAuthorized()
    {
      return $this->draftsAuthorized;
    }

    /**
     * @param string $draftsAuthorized
     * @return ClientsGetADO
     */
    public function setDraftsAuthorized($draftsAuthorized)
    {
      $this->draftsAuthorized = $draftsAuthorized;
      return $this;
    }

    /**
     * @return float
     */
    public function getPolicyGroupID()
    {
      return $this->policyGroupID;
    }

    /**
     * @param float $policyGroupID
     * @return ClientsGetADO
     */
    public function setPolicyGroupID($policyGroupID)
    {
      $this->policyGroupID = $policyGroupID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCloseSchedDateGTE()
    {
      return $this->closeSchedDateGTE;
    }

    /**
     * @param string $closeSchedDateGTE
     * @return ClientsGetADO
     */
    public function setCloseSchedDateGTE($closeSchedDateGTE)
    {
      $this->closeSchedDateGTE = $closeSchedDateGTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getCloseSchedDateLTE()
    {
      return $this->closeSchedDateLTE;
    }

    /**
     * @param string $closeSchedDateLTE
     * @return ClientsGetADO
     */
    public function setCloseSchedDateLTE($closeSchedDateLTE)
    {
      $this->closeSchedDateLTE = $closeSchedDateLTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getCloseDateGTE()
    {
      return $this->closeDateGTE;
    }

    /**
     * @param string $closeDateGTE
     * @return ClientsGetADO
     */
    public function setCloseDateGTE($closeDateGTE)
    {
      $this->closeDateGTE = $closeDateGTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getCloseDateLTE()
    {
      return $this->closeDateLTE;
    }

    /**
     * @param string $closeDateLTE
     * @return ClientsGetADO
     */
    public function setCloseDateLTE($closeDateLTE)
    {
      $this->closeDateLTE = $closeDateLTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdVerifiedDateGTE()
    {
      return $this->idVerifiedDateGTE;
    }

    /**
     * @param string $idVerifiedDateGTE
     * @return ClientsGetADO
     */
    public function setIdVerifiedDateGTE($idVerifiedDateGTE)
    {
      $this->idVerifiedDateGTE = $idVerifiedDateGTE;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdVerifiedDateLTE()
    {
      return $this->idVerifiedDateLTE;
    }

    /**
     * @param string $idVerifiedDateLTE
     * @return ClientsGetADO
     */
    public function setIdVerifiedDateLTE($idVerifiedDateLTE)
    {
      $this->idVerifiedDateLTE = $idVerifiedDateLTE;
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
     * @return ClientsGetADO
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getLockType()
    {
      return $this->lockType;
    }

    /**
     * @param string $lockType
     * @return ClientsGetADO
     */
    public function setLockType($lockType)
    {
      $this->lockType = $lockType;
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
     * @return ClientsGetADO
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
     * @return ClientsGetADO
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
     * @return ClientsGetADO
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
     * @return ClientsGetADO
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
