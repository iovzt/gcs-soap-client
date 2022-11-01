<?php

class DraftsGetADOResponse
{

    /**
     * @var DraftsGetADOResult $DraftsGetADOResult
     */
    protected $DraftsGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param DraftsGetADOResult $DraftsGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($DraftsGetADOResult, $rowCount, $pageCount)
    {
      $this->DraftsGetADOResult = $DraftsGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return DraftsGetADOResult
     */
    public function getDraftsGetADOResult()
    {
      return $this->DraftsGetADOResult;
    }

    /**
     * @param DraftsGetADOResult $DraftsGetADOResult
     * @return DraftsGetADOResponse
     */
    public function setDraftsGetADOResult($DraftsGetADOResult)
    {
      $this->DraftsGetADOResult = $DraftsGetADOResult;
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
     * @return DraftsGetADOResponse
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
     * @return DraftsGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
