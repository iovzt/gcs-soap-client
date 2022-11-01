<?php

class ChargesDebitLinksGetADO
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
     * @var float $debitLinkId
     */
    protected $debitLinkId = null;

    /**
     * @var float $chargeId
     */
    protected $chargeId = null;

    /**
     * @var float $debitId
     */
    protected $debitId = null;

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
     * @param float $debitLinkId
     * @param float $chargeId
     * @param float $debitId
     * @param \DateTime $creationDateGte
     * @param \DateTime $creationDateLte
     * @param \DateTime $modifiedDateGte
     * @param \DateTime $modifiedDateLte
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($userName, $password, $debitLinkId, $chargeId, $debitId, \DateTime $creationDateGte, \DateTime $creationDateLte, \DateTime $modifiedDateGte, \DateTime $modifiedDateLte, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->debitLinkId = $debitLinkId;
      $this->chargeId = $chargeId;
      $this->debitId = $debitId;
      $this->creationDateGte = $creationDateGte->format(\DateTime::ATOM);
      $this->creationDateLte = $creationDateLte->format(\DateTime::ATOM);
      $this->modifiedDateGte = $modifiedDateGte->format(\DateTime::ATOM);
      $this->modifiedDateLte = $modifiedDateLte->format(\DateTime::ATOM);
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
     * @return ChargesDebitLinksGetADO
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
     * @return ChargesDebitLinksGetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return float
     */
    public function getDebitLinkId()
    {
      return $this->debitLinkId;
    }

    /**
     * @param float $debitLinkId
     * @return ChargesDebitLinksGetADO
     */
    public function setDebitLinkId($debitLinkId)
    {
      $this->debitLinkId = $debitLinkId;
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
     * @return ChargesDebitLinksGetADO
     */
    public function setChargeId($chargeId)
    {
      $this->chargeId = $chargeId;
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
     * @return ChargesDebitLinksGetADO
     */
    public function setDebitId($debitId)
    {
      $this->debitId = $debitId;
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
     * @return ChargesDebitLinksGetADO
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
     * @return ChargesDebitLinksGetADO
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
     * @return ChargesDebitLinksGetADO
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
     * @return ChargesDebitLinksGetADO
     */
    public function setModifiedDateLte(\DateTime $modifiedDateLte)
    {
      $this->modifiedDateLte = $modifiedDateLte->format(\DateTime::ATOM);
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
     * @return ChargesDebitLinksGetADO
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
     * @return ChargesDebitLinksGetADO
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
     * @return ChargesDebitLinksGetADO
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
     * @return ChargesDebitLinksGetADO
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
