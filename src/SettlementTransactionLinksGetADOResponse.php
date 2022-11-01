<?php

class SettlementTransactionLinksGetADOResponse
{

    /**
     * @var SettlementTransactionLinksGetADOResult $SettlementTransactionLinksGetADOResult
     */
    protected $SettlementTransactionLinksGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param SettlementTransactionLinksGetADOResult $SettlementTransactionLinksGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($SettlementTransactionLinksGetADOResult, $rowCount, $pageCount)
    {
      $this->SettlementTransactionLinksGetADOResult = $SettlementTransactionLinksGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return SettlementTransactionLinksGetADOResult
     */
    public function getSettlementTransactionLinksGetADOResult()
    {
      return $this->SettlementTransactionLinksGetADOResult;
    }

    /**
     * @param SettlementTransactionLinksGetADOResult $SettlementTransactionLinksGetADOResult
     * @return SettlementTransactionLinksGetADOResponse
     */
    public function setSettlementTransactionLinksGetADOResult($SettlementTransactionLinksGetADOResult)
    {
      $this->SettlementTransactionLinksGetADOResult = $SettlementTransactionLinksGetADOResult;
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
     * @return SettlementTransactionLinksGetADOResponse
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
     * @return SettlementTransactionLinksGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
