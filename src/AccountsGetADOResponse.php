<?php

class AccountsGetADOResponse
{

    /**
     * @var AccountsGetADOResult $AccountsGetADOResult
     */
    protected $AccountsGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param AccountsGetADOResult $AccountsGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($AccountsGetADOResult, $rowCount, $pageCount)
    {
      $this->AccountsGetADOResult = $AccountsGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return AccountsGetADOResult
     */
    public function getAccountsGetADOResult()
    {
      return $this->AccountsGetADOResult;
    }

    /**
     * @param AccountsGetADOResult $AccountsGetADOResult
     * @return AccountsGetADOResponse
     */
    public function setAccountsGetADOResult($AccountsGetADOResult)
    {
      $this->AccountsGetADOResult = $AccountsGetADOResult;
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
     * @return AccountsGetADOResponse
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
     * @return AccountsGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
