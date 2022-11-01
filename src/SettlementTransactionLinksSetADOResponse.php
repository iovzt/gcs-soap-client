<?php

class SettlementTransactionLinksSetADOResponse
{

    /**
     * @var SettlementTransactionLinksSetADOResult $SettlementTransactionLinksSetADOResult
     */
    protected $SettlementTransactionLinksSetADOResult = null;

    /**
     * @param SettlementTransactionLinksSetADOResult $SettlementTransactionLinksSetADOResult
     */
    public function __construct($SettlementTransactionLinksSetADOResult)
    {
      $this->SettlementTransactionLinksSetADOResult = $SettlementTransactionLinksSetADOResult;
    }

    /**
     * @return SettlementTransactionLinksSetADOResult
     */
    public function getSettlementTransactionLinksSetADOResult()
    {
      return $this->SettlementTransactionLinksSetADOResult;
    }

    /**
     * @param SettlementTransactionLinksSetADOResult $SettlementTransactionLinksSetADOResult
     * @return SettlementTransactionLinksSetADOResponse
     */
    public function setSettlementTransactionLinksSetADOResult($SettlementTransactionLinksSetADOResult)
    {
      $this->SettlementTransactionLinksSetADOResult = $SettlementTransactionLinksSetADOResult;
      return $this;
    }

}
