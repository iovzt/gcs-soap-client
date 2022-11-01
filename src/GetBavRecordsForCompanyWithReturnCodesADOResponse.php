<?php

class GetBavRecordsForCompanyWithReturnCodesADOResponse
{

    /**
     * @var GetBavRecordsForCompanyWithReturnCodesADOResult $GetBavRecordsForCompanyWithReturnCodesADOResult
     */
    protected $GetBavRecordsForCompanyWithReturnCodesADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param GetBavRecordsForCompanyWithReturnCodesADOResult $GetBavRecordsForCompanyWithReturnCodesADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($GetBavRecordsForCompanyWithReturnCodesADOResult, $rowCount, $pageCount)
    {
      $this->GetBavRecordsForCompanyWithReturnCodesADOResult = $GetBavRecordsForCompanyWithReturnCodesADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return GetBavRecordsForCompanyWithReturnCodesADOResult
     */
    public function getGetBavRecordsForCompanyWithReturnCodesADOResult()
    {
      return $this->GetBavRecordsForCompanyWithReturnCodesADOResult;
    }

    /**
     * @param GetBavRecordsForCompanyWithReturnCodesADOResult $GetBavRecordsForCompanyWithReturnCodesADOResult
     * @return GetBavRecordsForCompanyWithReturnCodesADOResponse
     */
    public function setGetBavRecordsForCompanyWithReturnCodesADOResult($GetBavRecordsForCompanyWithReturnCodesADOResult)
    {
      $this->GetBavRecordsForCompanyWithReturnCodesADOResult = $GetBavRecordsForCompanyWithReturnCodesADOResult;
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
     * @return GetBavRecordsForCompanyWithReturnCodesADOResponse
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
     * @return GetBavRecordsForCompanyWithReturnCodesADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
