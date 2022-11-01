<?php

class ChargesGetXML
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
     * @var float $chargeId
     */
    protected $chargeId = null;

    /**
     * @var string $accountId
     */
    protected $accountId = null;

    /**
     * @var string $transactionType
     */
    protected $transactionType = null;

    /**
     * @var \DateTime $effectiveDateGte
     */
    protected $effectiveDateGte = null;

    /**
     * @var \DateTime $effectiveDateLte
     */
    protected $effectiveDateLte = null;

    /**
     * @var float $amountGte
     */
    protected $amountGte = null;

    /**
     * @var float $amountLte
     */
    protected $amountLte = null;

    /**
     * @var string $drcTransactionId
     */
    protected $drcTransactionId = null;

    /**
     * @var string $activeFlag
     */
    protected $activeFlag = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \DateTime $creationDateGte
     */
    protected $creationDateGte = null;

    /**
     * @var \DateTime $creationDateLte
     */
    protected $creationDateLte = null;

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
     * @param float $chargeId
     * @param string $accountId
     * @param string $transactionType
     * @param \DateTime $effectiveDateGte
     * @param \DateTime $effectiveDateLte
     * @param float $amountGte
     * @param float $amountLte
     * @param string $drcTransactionId
     * @param string $activeFlag
     * @param string $status
     * @param \DateTime $creationDateGte
     * @param \DateTime $creationDateLte
     * @param \DateTime $modifiedDateGte
     * @param \DateTime $modifiedDateLte
     * @param string $modifiedBy
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($userName, $password, $chargeId, $accountId, $transactionType, \DateTime $effectiveDateGte, \DateTime $effectiveDateLte, $amountGte, $amountLte, $drcTransactionId, $activeFlag, $status, \DateTime $creationDateGte, \DateTime $creationDateLte, \DateTime $modifiedDateGte, \DateTime $modifiedDateLte, $modifiedBy, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->chargeId = $chargeId;
      $this->accountId = $accountId;
      $this->transactionType = $transactionType;
      $this->effectiveDateGte = $effectiveDateGte->format(\DateTime::ATOM);
      $this->effectiveDateLte = $effectiveDateLte->format(\DateTime::ATOM);
      $this->amountGte = $amountGte;
      $this->amountLte = $amountLte;
      $this->drcTransactionId = $drcTransactionId;
      $this->activeFlag = $activeFlag;
      $this->status = $status;
      $this->creationDateGte = $creationDateGte->format(\DateTime::ATOM);
      $this->creationDateLte = $creationDateLte->format(\DateTime::ATOM);
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
     * @return ChargesGetXML
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
     * @return ChargesGetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return float
     */
    public function getChargeId()
    {
      return $this->chargeId;
    }

    /**
     * @param float $chargeId
     * @return ChargesGetXML
     */
    public function setChargeId($chargeId)
    {
      $this->chargeId = $chargeId;
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
     * @return ChargesGetXML
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
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
     * @return ChargesGetXML
     */
    public function setTransactionType($transactionType)
    {
      $this->transactionType = $transactionType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDateGte()
    {
      if ($this->effectiveDateGte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->effectiveDateGte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $effectiveDateGte
     * @return ChargesGetXML
     */
    public function setEffectiveDateGte(\DateTime $effectiveDateGte)
    {
      $this->effectiveDateGte = $effectiveDateGte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDateLte()
    {
      if ($this->effectiveDateLte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->effectiveDateLte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $effectiveDateLte
     * @return ChargesGetXML
     */
    public function setEffectiveDateLte(\DateTime $effectiveDateLte)
    {
      $this->effectiveDateLte = $effectiveDateLte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getAmountGte()
    {
      return $this->amountGte;
    }

    /**
     * @param float $amountGte
     * @return ChargesGetXML
     */
    public function setAmountGte($amountGte)
    {
      $this->amountGte = $amountGte;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmountLte()
    {
      return $this->amountLte;
    }

    /**
     * @param float $amountLte
     * @return ChargesGetXML
     */
    public function setAmountLte($amountLte)
    {
      $this->amountLte = $amountLte;
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
     * @return ChargesGetXML
     */
    public function setDrcTransactionId($drcTransactionId)
    {
      $this->drcTransactionId = $drcTransactionId;
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
     * @return ChargesGetXML
     */
    public function setActiveFlag($activeFlag)
    {
      $this->activeFlag = $activeFlag;
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
     * @return ChargesGetXML
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDateGte()
    {
      if ($this->creationDateGte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->creationDateGte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $creationDateGte
     * @return ChargesGetXML
     */
    public function setCreationDateGte(\DateTime $creationDateGte)
    {
      $this->creationDateGte = $creationDateGte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDateLte()
    {
      if ($this->creationDateLte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->creationDateLte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $creationDateLte
     * @return ChargesGetXML
     */
    public function setCreationDateLte(\DateTime $creationDateLte)
    {
      $this->creationDateLte = $creationDateLte->format(\DateTime::ATOM);
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
     * @return ChargesGetXML
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
     * @return ChargesGetXML
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
     * @return ChargesGetXML
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
     * @return ChargesGetXML
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
     * @return ChargesGetXML
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
     * @return ChargesGetXML
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
     * @return ChargesGetXML
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
