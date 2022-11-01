<?php

class SettlementsGetADOResponse
{

    /**
     * @var SettlementsGetADOResult $SettlementsGetADOResult
     */
    protected $SettlementsGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param SettlementsGetADOResult $SettlementsGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($SettlementsGetADOResult, $rowCount, $pageCount)
    {
      $this->SettlementsGetADOResult = $SettlementsGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return SettlementsGetADOResult
     */
    public function getSettlementsGetADOResult()
    {
      return $this->SettlementsGetADOResult;
    }

    /**
     * @param SettlementsGetADOResult $SettlementsGetADOResult
     * @return SettlementsGetADOResponse
     */
    public function setSettlementsGetADOResult($SettlementsGetADOResult)
    {
      $this->SettlementsGetADOResult = $SettlementsGetADOResult;
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
     * @return SettlementsGetADOResponse
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
     * @return SettlementsGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
