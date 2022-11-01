<?php

class DraftsGetXMLResponse
{

    /**
     * @var DraftsGetXMLResult $DraftsGetXMLResult
     */
    protected $DraftsGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param DraftsGetXMLResult $DraftsGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($DraftsGetXMLResult, $rowCount, $pageCount)
    {
      $this->DraftsGetXMLResult = $DraftsGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return DraftsGetXMLResult
     */
    public function getDraftsGetXMLResult()
    {
      return $this->DraftsGetXMLResult;
    }

    /**
     * @param DraftsGetXMLResult $DraftsGetXMLResult
     * @return DraftsGetXMLResponse
     */
    public function setDraftsGetXMLResult($DraftsGetXMLResult)
    {
      $this->DraftsGetXMLResult = $DraftsGetXMLResult;
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
     * @return DraftsGetXMLResponse
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
     * @return DraftsGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
