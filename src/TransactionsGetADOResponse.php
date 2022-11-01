<?php

class TransactionsGetADOResponse
{

    /**
     * @var TransactionsGetADOResult $TransactionsGetADOResult
     */
    protected $TransactionsGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param TransactionsGetADOResult $TransactionsGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($TransactionsGetADOResult, $rowCount, $pageCount)
    {
      $this->TransactionsGetADOResult = $TransactionsGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return TransactionsGetADOResult
     */
    public function getTransactionsGetADOResult()
    {
      return $this->TransactionsGetADOResult;
    }

    /**
     * @param TransactionsGetADOResult $TransactionsGetADOResult
     * @return TransactionsGetADOResponse
     */
    public function setTransactionsGetADOResult($TransactionsGetADOResult)
    {
      $this->TransactionsGetADOResult = $TransactionsGetADOResult;
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
     * @return TransactionsGetADOResponse
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
     * @return TransactionsGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
