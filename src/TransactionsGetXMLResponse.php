<?php

class TransactionsGetXMLResponse
{

    /**
     * @var TransactionsGetXMLResult $TransactionsGetXMLResult
     */
    protected $TransactionsGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param TransactionsGetXMLResult $TransactionsGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($TransactionsGetXMLResult, $rowCount, $pageCount)
    {
      $this->TransactionsGetXMLResult = $TransactionsGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return TransactionsGetXMLResult
     */
    public function getTransactionsGetXMLResult()
    {
      return $this->TransactionsGetXMLResult;
    }

    /**
     * @param TransactionsGetXMLResult $TransactionsGetXMLResult
     * @return TransactionsGetXMLResponse
     */
    public function setTransactionsGetXMLResult($TransactionsGetXMLResult)
    {
      $this->TransactionsGetXMLResult = $TransactionsGetXMLResult;
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
     * @return TransactionsGetXMLResponse
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
     * @return TransactionsGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
