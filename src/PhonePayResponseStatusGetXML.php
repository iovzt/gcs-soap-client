<?php

class PhonePayResponseStatusGetXML
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
     * @var string $exceptionId
     */
    protected $exceptionId = null;

    /**
     * @var string $paymentId
     */
    protected $paymentId = null;

    /**
     * @var string $createdDateLte
     */
    protected $createdDateLte = null;

    /**
     * @var string $createdDateGte
     */
    protected $createdDateGte = null;

    /**
     * @var string $modifiedDateLte
     */
    protected $modifiedDateLte = null;

    /**
     * @var string $modifiedDateGte
     */
    protected $modifiedDateGte = null;

    /**
     * @var string $modifiedBy
     */
    protected $modifiedBy = null;

    /**
     * @var string $responseType
     */
    protected $responseType = null;

    /**
     * @var string $resolutionDateLte
     */
    protected $resolutionDateLte = null;

    /**
     * @var string $resolutionDateGte
     */
    protected $resolutionDateGte = null;

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
     * @param string $exceptionId
     * @param string $paymentId
     * @param string $createdDateLte
     * @param string $createdDateGte
     * @param string $modifiedDateLte
     * @param string $modifiedDateGte
     * @param string $modifiedBy
     * @param string $responseType
     * @param string $resolutionDateLte
     * @param string $resolutionDateGte
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($userName, $password, $exceptionId, $paymentId, $createdDateLte, $createdDateGte, $modifiedDateLte, $modifiedDateGte, $modifiedBy, $responseType, $resolutionDateLte, $resolutionDateGte, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->exceptionId = $exceptionId;
      $this->paymentId = $paymentId;
      $this->createdDateLte = $createdDateLte;
      $this->createdDateGte = $createdDateGte;
      $this->modifiedDateLte = $modifiedDateLte;
      $this->modifiedDateGte = $modifiedDateGte;
      $this->modifiedBy = $modifiedBy;
      $this->responseType = $responseType;
      $this->resolutionDateLte = $resolutionDateLte;
      $this->resolutionDateGte = $resolutionDateGte;
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
     * @return PhonePayResponseStatusGetXML
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
     * @return PhonePayResponseStatusGetXML
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getExceptionId()
    {
      return $this->exceptionId;
    }

    /**
     * @param string $exceptionId
     * @return PhonePayResponseStatusGetXML
     */
    public function setExceptionId($exceptionId)
    {
      $this->exceptionId = $exceptionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentId()
    {
      return $this->paymentId;
    }

    /**
     * @param string $paymentId
     * @return PhonePayResponseStatusGetXML
     */
    public function setPaymentId($paymentId)
    {
      $this->paymentId = $paymentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDateLte()
    {
      return $this->createdDateLte;
    }

    /**
     * @param string $createdDateLte
     * @return PhonePayResponseStatusGetXML
     */
    public function setCreatedDateLte($createdDateLte)
    {
      $this->createdDateLte = $createdDateLte;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDateGte()
    {
      return $this->createdDateGte;
    }

    /**
     * @param string $createdDateGte
     * @return PhonePayResponseStatusGetXML
     */
    public function setCreatedDateGte($createdDateGte)
    {
      $this->createdDateGte = $createdDateGte;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDateLte()
    {
      return $this->modifiedDateLte;
    }

    /**
     * @param string $modifiedDateLte
     * @return PhonePayResponseStatusGetXML
     */
    public function setModifiedDateLte($modifiedDateLte)
    {
      $this->modifiedDateLte = $modifiedDateLte;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDateGte()
    {
      return $this->modifiedDateGte;
    }

    /**
     * @param string $modifiedDateGte
     * @return PhonePayResponseStatusGetXML
     */
    public function setModifiedDateGte($modifiedDateGte)
    {
      $this->modifiedDateGte = $modifiedDateGte;
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
     * @return PhonePayResponseStatusGetXML
     */
    public function setModifiedBy($modifiedBy)
    {
      $this->modifiedBy = $modifiedBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseType()
    {
      return $this->responseType;
    }

    /**
     * @param string $responseType
     * @return PhonePayResponseStatusGetXML
     */
    public function setResponseType($responseType)
    {
      $this->responseType = $responseType;
      return $this;
    }

    /**
     * @return string
     */
    public function getResolutionDateLte()
    {
      return $this->resolutionDateLte;
    }

    /**
     * @param string $resolutionDateLte
     * @return PhonePayResponseStatusGetXML
     */
    public function setResolutionDateLte($resolutionDateLte)
    {
      $this->resolutionDateLte = $resolutionDateLte;
      return $this;
    }

    /**
     * @return string
     */
    public function getResolutionDateGte()
    {
      return $this->resolutionDateGte;
    }

    /**
     * @param string $resolutionDateGte
     * @return PhonePayResponseStatusGetXML
     */
    public function setResolutionDateGte($resolutionDateGte)
    {
      $this->resolutionDateGte = $resolutionDateGte;
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
     * @return PhonePayResponseStatusGetXML
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
     * @return PhonePayResponseStatusGetXML
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
     * @return PhonePayResponseStatusGetXML
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
     * @return PhonePayResponseStatusGetXML
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
