<?php

class PaymentsGetADOResponse
{

    /**
     * @var PaymentsGetADOResult $PaymentsGetADOResult
     */
    protected $PaymentsGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param PaymentsGetADOResult $PaymentsGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($PaymentsGetADOResult, $rowCount, $pageCount)
    {
      $this->PaymentsGetADOResult = $PaymentsGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return PaymentsGetADOResult
     */
    public function getPaymentsGetADOResult()
    {
      return $this->PaymentsGetADOResult;
    }

    /**
     * @param PaymentsGetADOResult $PaymentsGetADOResult
     * @return PaymentsGetADOResponse
     */
    public function setPaymentsGetADOResult($PaymentsGetADOResult)
    {
      $this->PaymentsGetADOResult = $PaymentsGetADOResult;
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
     * @return PaymentsGetADOResponse
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
     * @return PaymentsGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
