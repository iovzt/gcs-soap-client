<?php

class TransfersGetADOResponse
{

    /**
     * @var TransfersGetADOResult $TransfersGetADOResult
     */
    protected $TransfersGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param TransfersGetADOResult $TransfersGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($TransfersGetADOResult, $rowCount, $pageCount)
    {
      $this->TransfersGetADOResult = $TransfersGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return TransfersGetADOResult
     */
    public function getTransfersGetADOResult()
    {
      return $this->TransfersGetADOResult;
    }

    /**
     * @param TransfersGetADOResult $TransfersGetADOResult
     * @return TransfersGetADOResponse
     */
    public function setTransfersGetADOResult($TransfersGetADOResult)
    {
      $this->TransfersGetADOResult = $TransfersGetADOResult;
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
     * @return TransfersGetADOResponse
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
     * @return TransfersGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
