<?php

class TransferReturnsGetXMLResponse
{

    /**
     * @var TransferReturnsGetXMLResult $TransferReturnsGetXMLResult
     */
    protected $TransferReturnsGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param TransferReturnsGetXMLResult $TransferReturnsGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($TransferReturnsGetXMLResult, $rowCount, $pageCount)
    {
      $this->TransferReturnsGetXMLResult = $TransferReturnsGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return TransferReturnsGetXMLResult
     */
    public function getTransferReturnsGetXMLResult()
    {
      return $this->TransferReturnsGetXMLResult;
    }

    /**
     * @param TransferReturnsGetXMLResult $TransferReturnsGetXMLResult
     * @return TransferReturnsGetXMLResponse
     */
    public function setTransferReturnsGetXMLResult($TransferReturnsGetXMLResult)
    {
      $this->TransferReturnsGetXMLResult = $TransferReturnsGetXMLResult;
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
     * @return TransferReturnsGetXMLResponse
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
     * @return TransferReturnsGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
