<?php

class DebtsGetADOResponse
{

    /**
     * @var DebtsGetADOResult $DebtsGetADOResult
     */
    protected $DebtsGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param DebtsGetADOResult $DebtsGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($DebtsGetADOResult, $rowCount, $pageCount)
    {
      $this->DebtsGetADOResult = $DebtsGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return DebtsGetADOResult
     */
    public function getDebtsGetADOResult()
    {
      return $this->DebtsGetADOResult;
    }

    /**
     * @param DebtsGetADOResult $DebtsGetADOResult
     * @return DebtsGetADOResponse
     */
    public function setDebtsGetADOResult($DebtsGetADOResult)
    {
      $this->DebtsGetADOResult = $DebtsGetADOResult;
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
     * @return DebtsGetADOResponse
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
     * @return DebtsGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
