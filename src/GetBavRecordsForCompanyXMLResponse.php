<?php

class GetBavRecordsForCompanyXMLResponse
{

    /**
     * @var GetBavRecordsForCompanyXMLResult $GetBavRecordsForCompanyXMLResult
     */
    protected $GetBavRecordsForCompanyXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param GetBavRecordsForCompanyXMLResult $GetBavRecordsForCompanyXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($GetBavRecordsForCompanyXMLResult, $rowCount, $pageCount)
    {
      $this->GetBavRecordsForCompanyXMLResult = $GetBavRecordsForCompanyXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return GetBavRecordsForCompanyXMLResult
     */
    public function getGetBavRecordsForCompanyXMLResult()
    {
      return $this->GetBavRecordsForCompanyXMLResult;
    }

    /**
     * @param GetBavRecordsForCompanyXMLResult $GetBavRecordsForCompanyXMLResult
     * @return GetBavRecordsForCompanyXMLResponse
     */
    public function setGetBavRecordsForCompanyXMLResult($GetBavRecordsForCompanyXMLResult)
    {
      $this->GetBavRecordsForCompanyXMLResult = $GetBavRecordsForCompanyXMLResult;
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
     * @return GetBavRecordsForCompanyXMLResponse
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
     * @return GetBavRecordsForCompanyXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
