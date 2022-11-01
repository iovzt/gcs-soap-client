<?php

class DebitsGetADOResponse
{

    /**
     * @var DebitsGetADOResult $DebitsGetADOResult
     */
    protected $DebitsGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param DebitsGetADOResult $DebitsGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($DebitsGetADOResult, $rowCount, $pageCount)
    {
      $this->DebitsGetADOResult = $DebitsGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return DebitsGetADOResult
     */
    public function getDebitsGetADOResult()
    {
      return $this->DebitsGetADOResult;
    }

    /**
     * @param DebitsGetADOResult $DebitsGetADOResult
     * @return DebitsGetADOResponse
     */
    public function setDebitsGetADOResult($DebitsGetADOResult)
    {
      $this->DebitsGetADOResult = $DebitsGetADOResult;
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
     * @return DebitsGetADOResponse
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
     * @return DebitsGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
