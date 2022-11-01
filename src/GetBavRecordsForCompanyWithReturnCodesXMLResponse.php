<?php

class GetBavRecordsForCompanyWithReturnCodesXMLResponse
{

    /**
     * @var GetBavRecordsForCompanyWithReturnCodesXMLResult $GetBavRecordsForCompanyWithReturnCodesXMLResult
     */
    protected $GetBavRecordsForCompanyWithReturnCodesXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param GetBavRecordsForCompanyWithReturnCodesXMLResult $GetBavRecordsForCompanyWithReturnCodesXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($GetBavRecordsForCompanyWithReturnCodesXMLResult, $rowCount, $pageCount)
    {
      $this->GetBavRecordsForCompanyWithReturnCodesXMLResult = $GetBavRecordsForCompanyWithReturnCodesXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return GetBavRecordsForCompanyWithReturnCodesXMLResult
     */
    public function getGetBavRecordsForCompanyWithReturnCodesXMLResult()
    {
      return $this->GetBavRecordsForCompanyWithReturnCodesXMLResult;
    }

    /**
     * @param GetBavRecordsForCompanyWithReturnCodesXMLResult $GetBavRecordsForCompanyWithReturnCodesXMLResult
     * @return GetBavRecordsForCompanyWithReturnCodesXMLResponse
     */
    public function setGetBavRecordsForCompanyWithReturnCodesXMLResult($GetBavRecordsForCompanyWithReturnCodesXMLResult)
    {
      $this->GetBavRecordsForCompanyWithReturnCodesXMLResult = $GetBavRecordsForCompanyWithReturnCodesXMLResult;
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
     * @return GetBavRecordsForCompanyWithReturnCodesXMLResponse
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
     * @return GetBavRecordsForCompanyWithReturnCodesXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
