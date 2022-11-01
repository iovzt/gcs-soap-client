<?php

class DocumentListGetXML
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
     * @var string $accountId
     */
    protected $accountId = null;

    /**
     * @var string $docType
     */
    protected $docType = null;

    /**
     * @var string $docStatus
     */
    protected $docStatus = null;

    /**
     * @var string $documentName
     */
    protected $documentName = null;

    /**
     * @var string $tags
     */
    protected $tags = null;

    /**
     * @var \DateTime $creationDateGte
     */
    protected $creationDateGte = null;

    /**
     * @var \DateTime $creationDateLte
     */
    protected $creationDateLte = null;

    /**
     * @var string $createdBy
     */
    protected $createdBy = null;

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
     * @param string $accountId
     * @param string $docType
     * @param string $docStatus
     * @param string $documentName
     * @param string $tags
     * @param \DateTime $creationDateGte
     * @param \DateTime $creationDateLte
     * @param string $createdBy
     * @param \DateTime $modifiedDateGte
     * @param \DateTime $modifiedDateLte
     * @param string $modifiedBy
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($userName, $password, $accountId, $docType, $docStatus, $documentName, $tags, \DateTime $creationDateGte, \DateTime $creationDateLte, $createdBy, \DateTime $modifiedDateGte, \DateTime $modifiedDateLte, $modifiedBy, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->accountId = $accountId;
      $this->docType = $docType;
      $this->docStatus = $docStatus;
      $this->documentName = $documentName;
      $this->tags = $tags;
      $this->creationDateGte = $creationDateGte->format(\DateTime::ATOM);
      $this->creationDateLte = $creationDateLte->format(\DateTime::ATOM);
      $this->createdBy = $createdBy;
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
     * @return DocumentListGetXML
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
     * @return DocumentListGetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
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
     * @return DocumentListGetXML
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocType()
    {
      return $this->docType;
    }

    /**
     * @param string $docType
     * @return DocumentListGetXML
     */
    public function setDocType($docType)
    {
      $this->docType = $docType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocStatus()
    {
      return $this->docStatus;
    }

    /**
     * @param string $docStatus
     * @return DocumentListGetXML
     */
    public function setDocStatus($docStatus)
    {
      $this->docStatus = $docStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentName()
    {
      return $this->documentName;
    }

    /**
     * @param string $documentName
     * @return DocumentListGetXML
     */
    public function setDocumentName($documentName)
    {
      $this->documentName = $documentName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTags()
    {
      return $this->tags;
    }

    /**
     * @param string $tags
     * @return DocumentListGetXML
     */
    public function setTags($tags)
    {
      $this->tags = $tags;
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
     * @return DocumentListGetXML
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
     * @return DocumentListGetXML
     */
    public function setCreationDateLte(\DateTime $creationDateLte)
    {
      $this->creationDateLte = $creationDateLte->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
      return $this->createdBy;
    }

    /**
     * @param string $createdBy
     * @return DocumentListGetXML
     */
    public function setCreatedBy($createdBy)
    {
      $this->createdBy = $createdBy;
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
     * @return DocumentListGetXML
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
     * @return DocumentListGetXML
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
     * @return DocumentListGetXML
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
     * @return DocumentListGetXML
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
     * @return DocumentListGetXML
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
     * @return DocumentListGetXML
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
     * @return DocumentListGetXML
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
