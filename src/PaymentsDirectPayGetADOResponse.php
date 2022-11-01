<?php

class PaymentsDirectPayGetADOResponse
{

    /**
     * @var PaymentsDirectPayGetADOResult $PaymentsDirectPayGetADOResult
     */
    protected $PaymentsDirectPayGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param PaymentsDirectPayGetADOResult $PaymentsDirectPayGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($PaymentsDirectPayGetADOResult, $rowCount, $pageCount)
    {
      $this->PaymentsDirectPayGetADOResult = $PaymentsDirectPayGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return PaymentsDirectPayGetADOResult
     */
    public function getPaymentsDirectPayGetADOResult()
    {
      return $this->PaymentsDirectPayGetADOResult;
    }

    /**
     * @param PaymentsDirectPayGetADOResult $PaymentsDirectPayGetADOResult
     * @return PaymentsDirectPayGetADOResponse
     */
    public function setPaymentsDirectPayGetADOResult($PaymentsDirectPayGetADOResult)
    {
      $this->PaymentsDirectPayGetADOResult = $PaymentsDirectPayGetADOResult;
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
     * @return PaymentsDirectPayGetADOResponse
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
     * @return PaymentsDirectPayGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
