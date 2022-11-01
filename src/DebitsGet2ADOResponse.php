<?php

class DebitsGet2ADOResponse
{

    /**
     * @var DebitsGet2ADOResult $DebitsGet2ADOResult
     */
    protected $DebitsGet2ADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param DebitsGet2ADOResult $DebitsGet2ADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($DebitsGet2ADOResult, $rowCount, $pageCount)
    {
      $this->DebitsGet2ADOResult = $DebitsGet2ADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return DebitsGet2ADOResult
     */
    public function getDebitsGet2ADOResult()
    {
      return $this->DebitsGet2ADOResult;
    }

    /**
     * @param DebitsGet2ADOResult $DebitsGet2ADOResult
     * @return DebitsGet2ADOResponse
     */
    public function setDebitsGet2ADOResult($DebitsGet2ADOResult)
    {
      $this->DebitsGet2ADOResult = $DebitsGet2ADOResult;
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
     * @return DebitsGet2ADOResponse
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
     * @return DebitsGet2ADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
