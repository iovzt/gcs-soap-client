<?php

class SettlementTransactionLinksGetXML
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
     * @var string $settlement_Transaction_Link_ID
     */
    protected $settlement_Transaction_Link_ID = null;

    /**
     * @var string $SettlementId
     */
    protected $SettlementId = null;

    /**
     * @var string $supporting_Entity
     */
    protected $supporting_Entity = null;

    /**
     * @var string $entity_ID_Value
     */
    protected $entity_ID_Value = null;

    /**
     * @var string $created_By
     */
    protected $created_By = null;

    /**
     * @var \DateTime $created_Date_Gte
     */
    protected $created_Date_Gte = null;

    /**
     * @var \DateTime $created_Date_Lte
     */
    protected $created_Date_Lte = null;

    /**
     * @var string $modified_By
     */
    protected $modified_By = null;

    /**
     * @var \DateTime $modified_Date_Gte
     */
    protected $modified_Date_Gte = null;

    /**
     * @var \DateTime $modified_Date_Lte
     */
    protected $modified_Date_Lte = null;

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
     * @param string $settlement_Transaction_Link_ID
     * @param string $SettlementId
     * @param string $supporting_Entity
     * @param string $entity_ID_Value
     * @param string $created_By
     * @param \DateTime $created_Date_Gte
     * @param \DateTime $created_Date_Lte
     * @param string $modified_By
     * @param \DateTime $modified_Date_Gte
     * @param \DateTime $modified_Date_Lte
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($userName, $password, $settlement_Transaction_Link_ID, $SettlementId, $supporting_Entity, $entity_ID_Value, $created_By, \DateTime $created_Date_Gte, \DateTime $created_Date_Lte, $modified_By, \DateTime $modified_Date_Gte, \DateTime $modified_Date_Lte, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->settlement_Transaction_Link_ID = $settlement_Transaction_Link_ID;
      $this->SettlementId = $SettlementId;
      $this->supporting_Entity = $supporting_Entity;
      $this->entity_ID_Value = $entity_ID_Value;
      $this->created_By = $created_By;
      $this->created_Date_Gte = $created_Date_Gte->format(\DateTime::ATOM);
      $this->created_Date_Lte = $created_Date_Lte->format(\DateTime::ATOM);
      $this->modified_By = $modified_By;
      $this->modified_Date_Gte = $modified_Date_Gte->format(\DateTime::ATOM);
      $this->modified_Date_Lte = $modified_Date_Lte->format(\DateTime::ATOM);
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
     * @return SettlementTransactionLinksGetXML
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
     * @return SettlementTransactionLinksGetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getSettlement_Transaction_Link_ID()
    {
      return $this->settlement_Transaction_Link_ID;
    }

    /**
     * @param string $settlement_Transaction_Link_ID
     * @return SettlementTransactionLinksGetXML
     */
    public function setSettlement_Transaction_Link_ID($settlement_Transaction_Link_ID)
    {
      $this->settlement_Transaction_Link_ID = $settlement_Transaction_Link_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSettlementId()
    {
      return $this->SettlementId;
    }

    /**
     * @param string $SettlementId
     * @return SettlementTransactionLinksGetXML
     */
    public function setSettlementId($SettlementId)
    {
      $this->SettlementId = $SettlementId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupporting_Entity()
    {
      return $this->supporting_Entity;
    }

    /**
     * @param string $supporting_Entity
     * @return SettlementTransactionLinksGetXML
     */
    public function setSupporting_Entity($supporting_Entity)
    {
      $this->supporting_Entity = $supporting_Entity;
      return $this;
    }

    /**
     * @return string
     */
    public function getEntity_ID_Value()
    {
      return $this->entity_ID_Value;
    }

    /**
     * @param string $entity_ID_Value
     * @return SettlementTransactionLinksGetXML
     */
    public function setEntity_ID_Value($entity_ID_Value)
    {
      $this->entity_ID_Value = $entity_ID_Value;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreated_By()
    {
      return $this->created_By;
    }

    /**
     * @param string $created_By
     * @return SettlementTransactionLinksGetXML
     */
    public function setCreated_By($created_By)
    {
      $this->created_By = $created_By;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated_Date_Gte()
    {
      if ($this->created_Date_Gte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->created_Date_Gte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $created_Date_Gte
     * @return SettlementTransactionLinksGetXML
     */
    public function setCreated_Date_Gte(\DateTime $created_Date_Gte)
    {
      $this->created_Date_Gte = $created_Date_Gte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated_Date_Lte()
    {
      if ($this->created_Date_Lte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->created_Date_Lte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $created_Date_Lte
     * @return SettlementTransactionLinksGetXML
     */
    public function setCreated_Date_Lte(\DateTime $created_Date_Lte)
    {
      $this->created_Date_Lte = $created_Date_Lte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getModified_By()
    {
      return $this->modified_By;
    }

    /**
     * @param string $modified_By
     * @return SettlementTransactionLinksGetXML
     */
    public function setModified_By($modified_By)
    {
      $this->modified_By = $modified_By;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModified_Date_Gte()
    {
      if ($this->modified_Date_Gte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->modified_Date_Gte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $modified_Date_Gte
     * @return SettlementTransactionLinksGetXML
     */
    public function setModified_Date_Gte(\DateTime $modified_Date_Gte)
    {
      $this->modified_Date_Gte = $modified_Date_Gte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModified_Date_Lte()
    {
      if ($this->modified_Date_Lte == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->modified_Date_Lte);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $modified_Date_Lte
     * @return SettlementTransactionLinksGetXML
     */
    public function setModified_Date_Lte(\DateTime $modified_Date_Lte)
    {
      $this->modified_Date_Lte = $modified_Date_Lte->format(\DateTime::ATOM);
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
     * @return SettlementTransactionLinksGetXML
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
     * @return SettlementTransactionLinksGetXML
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
     * @return SettlementTransactionLinksGetXML
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
     * @return SettlementTransactionLinksGetXML
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
