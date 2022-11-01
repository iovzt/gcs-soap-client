<?php

class SettlementsGetXML
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
     * @var string $settlementID
     */
    protected $settlementID = null;

    /**
     * @var string $accountID
     */
    protected $accountID = null;

    /**
     * @var string $debtId
     */
    protected $debtId = null;

    /**
     * @var string $drcSettlementId
     */
    protected $drcSettlementId = null;

    /**
     * @var float $settlementAmount
     */
    protected $settlementAmount = null;

    /**
     * @var string $settlementStatus
     */
    protected $settlementStatus = null;

    /**
     * @var \DateTime $settlementDateGte
     */
    protected $settlementDateGte = null;

    /**
     * @var \DateTime $settlementDateLte
     */
    protected $settlementDateLte = null;

    /**
     * @var string $paymentType
     */
    protected $paymentType = null;

    /**
     * @var \DateTime $paymentStartDateGte
     */
    protected $paymentStartDateGte = null;

    /**
     * @var \DateTime $paymentStartDateLte
     */
    protected $paymentStartDateLte = null;

    /**
     * @var int $paymentOccurrences
     */
    protected $paymentOccurrences = null;

    /**
     * @var string $paymentFrequency
     */
    protected $paymentFrequency = null;

    /**
     * @var float $paymentAmount
     */
    protected $paymentAmount = null;

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
     * @param string $settlementID
     * @param string $accountID
     * @param string $debtId
     * @param string $drcSettlementId
     * @param float $settlementAmount
     * @param string $settlementStatus
     * @param \DateTime $settlementDateGte
     * @param \DateTime $settlementDateLte
     * @param string $paymentType
     * @param \DateTime $paymentStartDateGte
     * @param \DateTime $paymentStartDateLte
     * @param int $paymentOccurrences
     * @param string $paymentFrequency
     * @param float $paymentAmount
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
    public function __construct($userName, $password, $settlementID, $accountID, $debtId, $drcSettlementId, $settlementAmount, $settlementStatus, \DateTime $settlementDateGte, \DateTime $settlementDateLte, $paymentType, \DateTime $paymentStartDateGte, \DateTime $paymentStartDateLte, $paymentOccurrences, $paymentFrequency, $paymentAmount, \DateTime $createdDateGte, \DateTime $createdDateLte, \DateTime $modifiedDateGte, \DateTime $modifiedDateLte, $modifiedBy, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->settlementID = $settlementID;
      $this->accountID = $accountID;
      $this->debtId = $debtId;
      $this->drcSettlementId = $drcSettlementId;
      $this->settlementAmount = $settlementAmount;
      $this->settlementStatus = $settlementStatus;
      $this->settlementDateGte = $settlementDateGte->format(\DateTime::ATOM);
      $this->settlementDateLte = $settlementDateLte->format(\DateTime::ATOM);
      $this->paymentType = $paymentType;
      $this->paymentStartDateGte = $paymentStartDateGte->format(\DateTime::ATOM);
      $this->paymentStartDateLte = $paymentStartDateLte->format(\DateTime::ATOM);
      $this->paymentOccurrences = $paymentOccurrences;
      $this->paymentFrequency = $paymentFrequency;
      $this->paymentAmount = $paymentAmount;
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
     * @return SettlementsGetXML
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
     * @return SettlementsGetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getSettlementID()
    {
      return $this->settlementID;
    }

    /**
     * @param string $settlementID
     * @return SettlementsGetXML
     */
    public function setSettlementID($settlementID)
    {
      $this->settlementID = $settlementID;
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
     * @return SettlementsGetXML
     */
    public function setAccountID($accountID)
    {
      $this->accountID = $accountID;
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
     * @return SettlementsGetXML
     */
    public function setDebtId($debtId)
    {
      $this->debtId = $debtId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDrcSettlementId()
    {
      return $this->drcSettlementId;
    }

    /**
     * @param string $drcSettlementId
     * @return SettlementsGetXML
     */
    public function setDrcSettlementId($drcSettlementId)
    {
      $this->drcSettlementId = $drcSettlementId;
      return $this;
    }

    /**
     * @return float
     */
    public function getSettlementAmount()
    {
      return $this->settlementAmount;
    }

    /**
     * @param float $settlementAmount
     * @return SettlementsGetXML
     */
    public function setSettlementAmount($settlementAmount)
    {
      $this->settlementAmount = $settlementAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getSettlementStatus()
    {
      return $this->settlementStatus;
    }

    /**
     * @param string $settlementStatus
     * @return SettlementsGetXML
     */
    public function setSettlementStatus($settlementStatus)
    {
      $this->settlementStatus = $settlementStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSettlementDateGte()
    {
      if ($this->settlementDateGte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->settlementDateGte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $settlementDateGte
     * @return SettlementsGetXML
     */
    public function setSettlementDateGte(\DateTime $settlementDateGte)
    {
      $this->settlementDateGte = $settlementDateGte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSettlementDateLte()
    {
      if ($this->settlementDateLte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->settlementDateLte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $settlementDateLte
     * @return SettlementsGetXML
     */
    public function setSettlementDateLte(\DateTime $settlementDateLte)
    {
      $this->settlementDateLte = $settlementDateLte->format(\DateTime::ATOM);
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
     * @return SettlementsGetXML
     */
    public function setPaymentType($paymentType)
    {
      $this->paymentType = $paymentType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPaymentStartDateGte()
    {
      if ($this->paymentStartDateGte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->paymentStartDateGte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $paymentStartDateGte
     * @return SettlementsGetXML
     */
    public function setPaymentStartDateGte(\DateTime $paymentStartDateGte)
    {
      $this->paymentStartDateGte = $paymentStartDateGte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPaymentStartDateLte()
    {
      if ($this->paymentStartDateLte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->paymentStartDateLte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $paymentStartDateLte
     * @return SettlementsGetXML
     */
    public function setPaymentStartDateLte(\DateTime $paymentStartDateLte)
    {
      $this->paymentStartDateLte = $paymentStartDateLte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentOccurrences()
    {
      return $this->paymentOccurrences;
    }

    /**
     * @param int $paymentOccurrences
     * @return SettlementsGetXML
     */
    public function setPaymentOccurrences($paymentOccurrences)
    {
      $this->paymentOccurrences = $paymentOccurrences;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentFrequency()
    {
      return $this->paymentFrequency;
    }

    /**
     * @param string $paymentFrequency
     * @return SettlementsGetXML
     */
    public function setPaymentFrequency($paymentFrequency)
    {
      $this->paymentFrequency = $paymentFrequency;
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
     * @return SettlementsGetXML
     */
    public function setPaymentAmount($paymentAmount)
    {
      $this->paymentAmount = $paymentAmount;
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
     * @return SettlementsGetXML
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
     * @return SettlementsGetXML
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
     * @return SettlementsGetXML
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
     * @return SettlementsGetXML
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
     * @return SettlementsGetXML
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
     * @return SettlementsGetXML
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
     * @return SettlementsGetXML
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
     * @return SettlementsGetXML
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
     * @return SettlementsGetXML
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
