<?php

class BalanceGetADOResponse
{

    /**
     * @var BalanceGetADOResult $BalanceGetADOResult
     */
    protected $BalanceGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param BalanceGetADOResult $BalanceGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($BalanceGetADOResult, $rowCount, $pageCount)
    {
      $this->BalanceGetADOResult = $BalanceGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return BalanceGetADOResult
     */
    public function getBalanceGetADOResult()
    {
      return $this->BalanceGetADOResult;
    }

    /**
     * @param BalanceGetADOResult $BalanceGetADOResult
     * @return BalanceGetADOResponse
     */
    public function setBalanceGetADOResult($BalanceGetADOResult)
    {
      $this->BalanceGetADOResult = $BalanceGetADOResult;
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
     * @return BalanceGetADOResponse
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
     * @return BalanceGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
