<?php

class DepositsGetADOResponse
{

    /**
     * @var DepositsGetADOResult $DepositsGetADOResult
     */
    protected $DepositsGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param DepositsGetADOResult $DepositsGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($DepositsGetADOResult, $rowCount, $pageCount)
    {
      $this->DepositsGetADOResult = $DepositsGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return DepositsGetADOResult
     */
    public function getDepositsGetADOResult()
    {
      return $this->DepositsGetADOResult;
    }

    /**
     * @param DepositsGetADOResult $DepositsGetADOResult
     * @return DepositsGetADOResponse
     */
    public function setDepositsGetADOResult($DepositsGetADOResult)
    {
      $this->DepositsGetADOResult = $DepositsGetADOResult;
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
     * @return DepositsGetADOResponse
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
     * @return DepositsGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
