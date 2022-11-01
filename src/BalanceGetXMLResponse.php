<?php

class BalanceGetXMLResponse
{

    /**
     * @var BalanceGetXMLResult $BalanceGetXMLResult
     */
    protected $BalanceGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param BalanceGetXMLResult $BalanceGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($BalanceGetXMLResult, $rowCount, $pageCount)
    {
      $this->BalanceGetXMLResult = $BalanceGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return BalanceGetXMLResult
     */
    public function getBalanceGetXMLResult()
    {
      return $this->BalanceGetXMLResult;
    }

    /**
     * @param BalanceGetXMLResult $BalanceGetXMLResult
     * @return BalanceGetXMLResponse
     */
    public function setBalanceGetXMLResult($BalanceGetXMLResult)
    {
      $this->BalanceGetXMLResult = $BalanceGetXMLResult;
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
     * @return BalanceGetXMLResponse
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
     * @return BalanceGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
