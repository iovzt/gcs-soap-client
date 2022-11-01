<?php

class TransferReturnsGetADOResponse
{

    /**
     * @var TransferReturnsGetADOResult $TransferReturnsGetADOResult
     */
    protected $TransferReturnsGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param TransferReturnsGetADOResult $TransferReturnsGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($TransferReturnsGetADOResult, $rowCount, $pageCount)
    {
      $this->TransferReturnsGetADOResult = $TransferReturnsGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return TransferReturnsGetADOResult
     */
    public function getTransferReturnsGetADOResult()
    {
      return $this->TransferReturnsGetADOResult;
    }

    /**
     * @param TransferReturnsGetADOResult $TransferReturnsGetADOResult
     * @return TransferReturnsGetADOResponse
     */
    public function setTransferReturnsGetADOResult($TransferReturnsGetADOResult)
    {
      $this->TransferReturnsGetADOResult = $TransferReturnsGetADOResult;
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
     * @return TransferReturnsGetADOResponse
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
     * @return TransferReturnsGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
