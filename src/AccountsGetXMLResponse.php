<?php

class AccountsGetXMLResponse
{

    /**
     * @var AccountsGetXMLResult $AccountsGetXMLResult
     */
    protected $AccountsGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param AccountsGetXMLResult $AccountsGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($AccountsGetXMLResult, $rowCount, $pageCount)
    {
      $this->AccountsGetXMLResult = $AccountsGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return AccountsGetXMLResult
     */
    public function getAccountsGetXMLResult()
    {
      return $this->AccountsGetXMLResult;
    }

    /**
     * @param AccountsGetXMLResult $AccountsGetXMLResult
     * @return AccountsGetXMLResponse
     */
    public function setAccountsGetXMLResult($AccountsGetXMLResult)
    {
      $this->AccountsGetXMLResult = $AccountsGetXMLResult;
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
     * @return AccountsGetXMLResponse
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
     * @return AccountsGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
