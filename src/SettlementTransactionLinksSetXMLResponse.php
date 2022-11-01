<?php

class SettlementTransactionLinksSetXMLResponse
{

    /**
     * @var SettlementTransactionLinksSetXMLResult $SettlementTransactionLinksSetXMLResult
     */
    protected $SettlementTransactionLinksSetXMLResult = null;

    /**
     * @param SettlementTransactionLinksSetXMLResult $SettlementTransactionLinksSetXMLResult
     */
    public function __construct($SettlementTransactionLinksSetXMLResult)
    {
      $this->SettlementTransactionLinksSetXMLResult = $SettlementTransactionLinksSetXMLResult;
    }

    /**
     * @return SettlementTransactionLinksSetXMLResult
     */
    public function getSettlementTransactionLinksSetXMLResult()
    {
      return $this->SettlementTransactionLinksSetXMLResult;
    }

    /**
     * @param SettlementTransactionLinksSetXMLResult $SettlementTransactionLinksSetXMLResult
     * @return SettlementTransactionLinksSetXMLResponse
     */
    public function setSettlementTransactionLinksSetXMLResult($SettlementTransactionLinksSetXMLResult)
    {
      $this->SettlementTransactionLinksSetXMLResult = $SettlementTransactionLinksSetXMLResult;
      return $this;
    }

}
