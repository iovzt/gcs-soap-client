<?php

class GetBavRecordsForCompanyWithReturnCodesADO
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
     * @var BAVCompanyInquiryParmeters $bavCompanyInquiryParmeters
     */
    protected $bavCompanyInquiryParmeters = null;

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
     * @param BAVCompanyInquiryParmeters $bavCompanyInquiryParmeters
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($userName, $password, $bavCompanyInquiryParmeters, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->bavCompanyInquiryParmeters = $bavCompanyInquiryParmeters;
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
     * @return GetBavRecordsForCompanyWithReturnCodesADO
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
     * @return GetBavRecordsForCompanyWithReturnCodesADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return BAVCompanyInquiryParmeters
     */
    public function getBavCompanyInquiryParmeters()
    {
      return $this->bavCompanyInquiryParmeters;
    }

    /**
     * @param BAVCompanyInquiryParmeters $bavCompanyInquiryParmeters
     * @return GetBavRecordsForCompanyWithReturnCodesADO
     */
    public function setBavCompanyInquiryParmeters($bavCompanyInquiryParmeters)
    {
      $this->bavCompanyInquiryParmeters = $bavCompanyInquiryParmeters;
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
     * @return GetBavRecordsForCompanyWithReturnCodesADO
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
     * @return GetBavRecordsForCompanyWithReturnCodesADO
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
     * @return GetBavRecordsForCompanyWithReturnCodesADO
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
     * @return GetBavRecordsForCompanyWithReturnCodesADO
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
