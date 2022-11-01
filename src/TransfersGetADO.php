<?php

class TransfersGetADO
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
     * @var float $TransfersId
     */
    protected $TransfersId = null;

    /**
     * @var string $ClientId
     */
    protected $ClientId = null;

    /**
     * @var string $TransactionType
     */
    protected $TransactionType = null;

    /**
     * @var \DateTime $EffectiveDate_gte
     */
    protected $EffectiveDate_gte = null;

    /**
     * @var \DateTime $EffectiveDate_lte
     */
    protected $EffectiveDate_lte = null;

    /**
     * @var float $Amount_Gte
     */
    protected $Amount_Gte = null;

    /**
     * @var float $Amount_Lte
     */
    protected $Amount_Lte = null;

    /**
     * @var string $ActiveFlag
     */
    protected $ActiveFlag = null;

    /**
     * @var string $AdvRpmtStatus
     */
    protected $AdvRpmtStatus = null;

    /**
     * @var string $DRCTransactionId
     */
    protected $DRCTransactionId = null;

    /**
     * @var string $SupportingEntityName
     */
    protected $SupportingEntityName = null;

    /**
     * @var string $SupportingEntityIdValue
     */
    protected $SupportingEntityIdValue = null;

    /**
     * @var \DateTime $CreatedDate_Gte
     */
    protected $CreatedDate_Gte = null;

    /**
     * @var \DateTime $CreatedDate_Lte
     */
    protected $CreatedDate_Lte = null;

    /**
     * @var \DateTime $ModifiedDate_Gte
     */
    protected $ModifiedDate_Gte = null;

    /**
     * @var \DateTime $ModifiedDate_Lte
     */
    protected $ModifiedDate_Lte = null;

    /**
     * @var string $ModifiedBy
     */
    protected $ModifiedBy = null;

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
     * @param float $TransfersId
     * @param string $ClientId
     * @param string $TransactionType
     * @param \DateTime $EffectiveDate_gte
     * @param \DateTime $EffectiveDate_lte
     * @param float $Amount_Gte
     * @param float $Amount_Lte
     * @param string $ActiveFlag
     * @param string $AdvRpmtStatus
     * @param string $DRCTransactionId
     * @param string $SupportingEntityName
     * @param string $SupportingEntityIdValue
     * @param \DateTime $CreatedDate_Gte
     * @param \DateTime $CreatedDate_Lte
     * @param \DateTime $ModifiedDate_Gte
     * @param \DateTime $ModifiedDate_Lte
     * @param string $ModifiedBy
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($userName, $password, $TransfersId, $ClientId, $TransactionType, \DateTime $EffectiveDate_gte, \DateTime $EffectiveDate_lte, $Amount_Gte, $Amount_Lte, $ActiveFlag, $AdvRpmtStatus, $DRCTransactionId, $SupportingEntityName, $SupportingEntityIdValue, \DateTime $CreatedDate_Gte, \DateTime $CreatedDate_Lte, \DateTime $ModifiedDate_Gte, \DateTime $ModifiedDate_Lte, $ModifiedBy, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->TransfersId = $TransfersId;
      $this->ClientId = $ClientId;
      $this->TransactionType = $TransactionType;
      $this->EffectiveDate_gte = $EffectiveDate_gte->format(\DateTime::ATOM);
      $this->EffectiveDate_lte = $EffectiveDate_lte->format(\DateTime::ATOM);
      $this->Amount_Gte = $Amount_Gte;
      $this->Amount_Lte = $Amount_Lte;
      $this->ActiveFlag = $ActiveFlag;
      $this->AdvRpmtStatus = $AdvRpmtStatus;
      $this->DRCTransactionId = $DRCTransactionId;
      $this->SupportingEntityName = $SupportingEntityName;
      $this->SupportingEntityIdValue = $SupportingEntityIdValue;
      $this->CreatedDate_Gte = $CreatedDate_Gte->format(\DateTime::ATOM);
      $this->CreatedDate_Lte = $CreatedDate_Lte->format(\DateTime::ATOM);
      $this->ModifiedDate_Gte = $ModifiedDate_Gte->format(\DateTime::ATOM);
      $this->ModifiedDate_Lte = $ModifiedDate_Lte->format(\DateTime::ATOM);
      $this->ModifiedBy = $ModifiedBy;
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
     * @return TransfersGetADO
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
     * @return TransfersGetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return float
     */
    public function getTransfersId()
    {
      return $this->TransfersId;
    }

    /**
     * @param float $TransfersId
     * @return TransfersGetADO
     */
    public function setTransfersId($TransfersId)
    {
      $this->TransfersId = $TransfersId;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
      return $this->ClientId;
    }

    /**
     * @param string $ClientId
     * @return TransfersGetADO
     */
    public function setClientId($ClientId)
    {
      $this->ClientId = $ClientId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionType()
    {
      return $this->TransactionType;
    }

    /**
     * @param string $TransactionType
     * @return TransfersGetADO
     */
    public function setTransactionType($TransactionType)
    {
      $this->TransactionType = $TransactionType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate_gte()
    {
      if ($this->EffectiveDate_gte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EffectiveDate_gte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EffectiveDate_gte
     * @return TransfersGetADO
     */
    public function setEffectiveDate_gte(\DateTime $EffectiveDate_gte)
    {
      $this->EffectiveDate_gte = $EffectiveDate_gte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate_lte()
    {
      if ($this->EffectiveDate_lte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EffectiveDate_lte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EffectiveDate_lte
     * @return TransfersGetADO
     */
    public function setEffectiveDate_lte(\DateTime $EffectiveDate_lte)
    {
      $this->EffectiveDate_lte = $EffectiveDate_lte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount_Gte()
    {
      return $this->Amount_Gte;
    }

    /**
     * @param float $Amount_Gte
     * @return TransfersGetADO
     */
    public function setAmount_Gte($Amount_Gte)
    {
      $this->Amount_Gte = $Amount_Gte;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount_Lte()
    {
      return $this->Amount_Lte;
    }

    /**
     * @param float $Amount_Lte
     * @return TransfersGetADO
     */
    public function setAmount_Lte($Amount_Lte)
    {
      $this->Amount_Lte = $Amount_Lte;
      return $this;
    }

    /**
     * @return string
     */
    public function getActiveFlag()
    {
      return $this->ActiveFlag;
    }

    /**
     * @param string $ActiveFlag
     * @return TransfersGetADO
     */
    public function setActiveFlag($ActiveFlag)
    {
      $this->ActiveFlag = $ActiveFlag;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdvRpmtStatus()
    {
      return $this->AdvRpmtStatus;
    }

    /**
     * @param string $AdvRpmtStatus
     * @return TransfersGetADO
     */
    public function setAdvRpmtStatus($AdvRpmtStatus)
    {
      $this->AdvRpmtStatus = $AdvRpmtStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getDRCTransactionId()
    {
      return $this->DRCTransactionId;
    }

    /**
     * @param string $DRCTransactionId
     * @return TransfersGetADO
     */
    public function setDRCTransactionId($DRCTransactionId)
    {
      $this->DRCTransactionId = $DRCTransactionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupportingEntityName()
    {
      return $this->SupportingEntityName;
    }

    /**
     * @param string $SupportingEntityName
     * @return TransfersGetADO
     */
    public function setSupportingEntityName($SupportingEntityName)
    {
      $this->SupportingEntityName = $SupportingEntityName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupportingEntityIdValue()
    {
      return $this->SupportingEntityIdValue;
    }

    /**
     * @param string $SupportingEntityIdValue
     * @return TransfersGetADO
     */
    public function setSupportingEntityIdValue($SupportingEntityIdValue)
    {
      $this->SupportingEntityIdValue = $SupportingEntityIdValue;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate_Gte()
    {
      if ($this->CreatedDate_Gte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDate_Gte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDate_Gte
     * @return TransfersGetADO
     */
    public function setCreatedDate_Gte(\DateTime $CreatedDate_Gte)
    {
      $this->CreatedDate_Gte = $CreatedDate_Gte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate_Lte()
    {
      if ($this->CreatedDate_Lte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreatedDate_Lte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreatedDate_Lte
     * @return TransfersGetADO
     */
    public function setCreatedDate_Lte(\DateTime $CreatedDate_Lte)
    {
      $this->CreatedDate_Lte = $CreatedDate_Lte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate_Gte()
    {
      if ($this->ModifiedDate_Gte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDate_Gte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDate_Gte
     * @return TransfersGetADO
     */
    public function setModifiedDate_Gte(\DateTime $ModifiedDate_Gte)
    {
      $this->ModifiedDate_Gte = $ModifiedDate_Gte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate_Lte()
    {
      if ($this->ModifiedDate_Lte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDate_Lte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDate_Lte
     * @return TransfersGetADO
     */
    public function setModifiedDate_Lte(\DateTime $ModifiedDate_Lte)
    {
      $this->ModifiedDate_Lte = $ModifiedDate_Lte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedBy()
    {
      return $this->ModifiedBy;
    }

    /**
     * @param string $ModifiedBy
     * @return TransfersGetADO
     */
    public function setModifiedBy($ModifiedBy)
    {
      $this->ModifiedBy = $ModifiedBy;
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
     * @return TransfersGetADO
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
     * @return TransfersGetADO
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
     * @return TransfersGetADO
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
     * @return TransfersGetADO
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
