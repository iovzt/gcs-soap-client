<?php

class SettlementTransactionLinksGetXMLResponse
{

    /**
     * @var SettlementTransactionLinksGetXMLResult $SettlementTransactionLinksGetXMLResult
     */
    protected $SettlementTransactionLinksGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param SettlementTransactionLinksGetXMLResult $SettlementTransactionLinksGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($SettlementTransactionLinksGetXMLResult, $rowCount, $pageCount)
    {
      $this->SettlementTransactionLinksGetXMLResult = $SettlementTransactionLinksGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return SettlementTransactionLinksGetXMLResult
     */
    public function getSettlementTransactionLinksGetXMLResult()
    {
      return $this->SettlementTransactionLinksGetXMLResult;
    }

    /**
     * @param SettlementTransactionLinksGetXMLResult $SettlementTransactionLinksGetXMLResult
     * @return SettlementTransactionLinksGetXMLResponse
     */
    public function setSettlementTransactionLinksGetXMLResult($SettlementTransactionLinksGetXMLResult)
    {
      $this->SettlementTransactionLinksGetXMLResult = $SettlementTransactionLinksGetXMLResult;
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
     * @return SettlementTransactionLinksGetXMLResponse
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
     * @return SettlementTransactionLinksGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
