<?php

class GetBavRecordsForCompanyADOResponse
{

    /**
     * @var GetBavRecordsForCompanyADOResult $GetBavRecordsForCompanyADOResult
     */
    protected $GetBavRecordsForCompanyADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param GetBavRecordsForCompanyADOResult $GetBavRecordsForCompanyADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($GetBavRecordsForCompanyADOResult, $rowCount, $pageCount)
    {
      $this->GetBavRecordsForCompanyADOResult = $GetBavRecordsForCompanyADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return GetBavRecordsForCompanyADOResult
     */
    public function getGetBavRecordsForCompanyADOResult()
    {
      return $this->GetBavRecordsForCompanyADOResult;
    }

    /**
     * @param GetBavRecordsForCompanyADOResult $GetBavRecordsForCompanyADOResult
     * @return GetBavRecordsForCompanyADOResponse
     */
    public function setGetBavRecordsForCompanyADOResult($GetBavRecordsForCompanyADOResult)
    {
      $this->GetBavRecordsForCompanyADOResult = $GetBavRecordsForCompanyADOResult;
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
     * @return GetBavRecordsForCompanyADOResponse
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
     * @return GetBavRecordsForCompanyADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
