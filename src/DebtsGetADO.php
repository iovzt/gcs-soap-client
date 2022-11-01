<?php

class DebtsGetADO
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
     * @var string $debtId
     */
    protected $debtId = null;

    /**
     * @var string $accountId
     */
    protected $accountId = null;

    /**
     * @var string $drcDebtId
     */
    protected $drcDebtId = null;

    /**
     * @var \DateTime $enrolledDateGte
     */
    protected $enrolledDateGte = null;

    /**
     * @var \DateTime $enrolledDateLte
     */
    protected $enrolledDateLte = null;

    /**
     * @var string $originalCreditorName
     */
    protected $originalCreditorName = null;

    /**
     * @var string $currentCreditorName
     */
    protected $currentCreditorName = null;

    /**
     * @var string $originalAccountNumber
     */
    protected $originalAccountNumber = null;

    /**
     * @var string $currentAccountNumber
     */
    protected $currentAccountNumber = null;

    /**
     * @var string $alternateAccountNumber
     */
    protected $alternateAccountNumber = null;

    /**
     * @var string $debtType
     */
    protected $debtType = null;

    /**
     * @var string $debtStatus
     */
    protected $debtStatus = null;

    /**
     * @var \DateTime $createdDateGte
     */
    protected $createdDateGte = null;

    /**
     * @var \DateTime $createdDateLte
     */
    protected $createdDateLte = null;

    /**
     * @var \DateTime $modifiedDateGte
     */
    protected $modifiedDateGte = null;

    /**
     * @var \DateTime $modifiedDateLte
     */
    protected $modifiedDateLte = null;

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
     * @param string $debtId
     * @param string $accountId
     * @param string $drcDebtId
     * @param \DateTime $enrolledDateGte
     * @param \DateTime $enrolledDateLte
     * @param string $originalCreditorName
     * @param string $currentCreditorName
     * @param string $originalAccountNumber
     * @param string $currentAccountNumber
     * @param string $alternateAccountNumber
     * @param string $debtType
     * @param string $debtStatus
     * @param \DateTime $createdDateGte
     * @param \DateTime $createdDateLte
     * @param \DateTime $modifiedDateGte
     * @param \DateTime $modifiedDateLte
     * @param string $modifiedBy
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($userName, $password, $debtId, $accountId, $drcDebtId, \DateTime $enrolledDateGte, \DateTime $enrolledDateLte, $originalCreditorName, $currentCreditorName, $originalAccountNumber, $currentAccountNumber, $alternateAccountNumber, $debtType, $debtStatus, \DateTime $createdDateGte, \DateTime $createdDateLte, \DateTime $modifiedDateGte, \DateTime $modifiedDateLte, $modifiedBy, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->debtId = $debtId;
      $this->accountId = $accountId;
      $this->drcDebtId = $drcDebtId;
      $this->enrolledDateGte = $enrolledDateGte->format(\DateTime::ATOM);
      $this->enrolledDateLte = $enrolledDateLte->format(\DateTime::ATOM);
      $this->originalCreditorName = $originalCreditorName;
      $this->currentCreditorName = $currentCreditorName;
      $this->originalAccountNumber = $originalAccountNumber;
      $this->currentAccountNumber = $currentAccountNumber;
      $this->alternateAccountNumber = $alternateAccountNumber;
      $this->debtType = $debtType;
      $this->debtStatus = $debtStatus;
      $this->createdDateGte = $createdDateGte->format(\DateTime::ATOM);
      $this->createdDateLte = $createdDateLte->format(\DateTime::ATOM);
      $this->modifiedDateGte = $modifiedDateGte->format(\DateTime::ATOM);
      $this->modifiedDateLte = $modifiedDateLte->format(\DateTime::ATOM);
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
     * @return DebtsGetADO
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
     * @return DebtsGetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebtId()
    {
      return $this->debtId;
    }

    /**
     * @param string $debtId
     * @return DebtsGetADO
     */
    public function setDebtId($debtId)
    {
      $this->debtId = $debtId;
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
     * @return DebtsGetADO
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDrcDebtId()
    {
      return $this->drcDebtId;
    }

    /**
     * @param string $drcDebtId
     * @return DebtsGetADO
     */
    public function setDrcDebtId($drcDebtId)
    {
      $this->drcDebtId = $drcDebtId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnrolledDateGte()
    {
      if ($this->enrolledDateGte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->enrolledDateGte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $enrolledDateGte
     * @return DebtsGetADO
     */
    public function setEnrolledDateGte(\DateTime $enrolledDateGte)
    {
      $this->enrolledDateGte = $enrolledDateGte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnrolledDateLte()
    {
      if ($this->enrolledDateLte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->enrolledDateLte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $enrolledDateLte
     * @return DebtsGetADO
     */
    public function setEnrolledDateLte(\DateTime $enrolledDateLte)
    {
      $this->enrolledDateLte = $enrolledDateLte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginalCreditorName()
    {
      return $this->originalCreditorName;
    }

    /**
     * @param string $originalCreditorName
     * @return DebtsGetADO
     */
    public function setOriginalCreditorName($originalCreditorName)
    {
      $this->originalCreditorName = $originalCreditorName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrentCreditorName()
    {
      return $this->currentCreditorName;
    }

    /**
     * @param string $currentCreditorName
     * @return DebtsGetADO
     */
    public function setCurrentCreditorName($currentCreditorName)
    {
      $this->currentCreditorName = $currentCreditorName;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginalAccountNumber()
    {
      return $this->originalAccountNumber;
    }

    /**
     * @param string $originalAccountNumber
     * @return DebtsGetADO
     */
    public function setOriginalAccountNumber($originalAccountNumber)
    {
      $this->originalAccountNumber = $originalAccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrentAccountNumber()
    {
      return $this->currentAccountNumber;
    }

    /**
     * @param string $currentAccountNumber
     * @return DebtsGetADO
     */
    public function setCurrentAccountNumber($currentAccountNumber)
    {
      $this->currentAccountNumber = $currentAccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlternateAccountNumber()
    {
      return $this->alternateAccountNumber;
    }

    /**
     * @param string $alternateAccountNumber
     * @return DebtsGetADO
     */
    public function setAlternateAccountNumber($alternateAccountNumber)
    {
      $this->alternateAccountNumber = $alternateAccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebtType()
    {
      return $this->debtType;
    }

    /**
     * @param string $debtType
     * @return DebtsGetADO
     */
    public function setDebtType($debtType)
    {
      $this->debtType = $debtType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebtStatus()
    {
      return $this->debtStatus;
    }

    /**
     * @param string $debtStatus
     * @return DebtsGetADO
     */
    public function setDebtStatus($debtStatus)
    {
      $this->debtStatus = $debtStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDateGte()
    {
      if ($this->createdDateGte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdDateGte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdDateGte
     * @return DebtsGetADO
     */
    public function setCreatedDateGte(\DateTime $createdDateGte)
    {
      $this->createdDateGte = $createdDateGte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDateLte()
    {
      if ($this->createdDateLte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdDateLte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdDateLte
     * @return DebtsGetADO
     */
    public function setCreatedDateLte(\DateTime $createdDateLte)
    {
      $this->createdDateLte = $createdDateLte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDateGte()
    {
      if ($this->modifiedDateGte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->modifiedDateGte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $modifiedDateGte
     * @return DebtsGetADO
     */
    public function setModifiedDateGte(\DateTime $modifiedDateGte)
    {
      $this->modifiedDateGte = $modifiedDateGte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDateLte()
    {
      if ($this->modifiedDateLte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->modifiedDateLte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $modifiedDateLte
     * @return DebtsGetADO
     */
    public function setModifiedDateLte(\DateTime $modifiedDateLte)
    {
      $this->modifiedDateLte = $modifiedDateLte->format(\DateTime::ATOM);
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
     * @return DebtsGetADO
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
     * @return DebtsGetADO
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
     * @return DebtsGetADO
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
     * @return DebtsGetADO
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
     * @return DebtsGetADO
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
