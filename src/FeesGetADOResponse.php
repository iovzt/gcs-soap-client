<?php

class FeesGetADOResponse
{

    /**
     * @var FeesGetADOResult $FeesGetADOResult
     */
    protected $FeesGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param FeesGetADOResult $FeesGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($FeesGetADOResult, $rowCount, $pageCount)
    {
      $this->FeesGetADOResult = $FeesGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return FeesGetADOResult
     */
    public function getFeesGetADOResult()
    {
      return $this->FeesGetADOResult;
    }

    /**
     * @param FeesGetADOResult $FeesGetADOResult
     * @return FeesGetADOResponse
     */
    public function setFeesGetADOResult($FeesGetADOResult)
    {
      $this->FeesGetADOResult = $FeesGetADOResult;
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
     * @return FeesGetADOResponse
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
     * @return FeesGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
