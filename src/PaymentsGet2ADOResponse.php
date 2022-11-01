<?php

class PaymentsGet2ADOResponse
{

    /**
     * @var PaymentsGet2ADOResult $PaymentsGet2ADOResult
     */
    protected $PaymentsGet2ADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param PaymentsGet2ADOResult $PaymentsGet2ADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($PaymentsGet2ADOResult, $rowCount, $pageCount)
    {
      $this->PaymentsGet2ADOResult = $PaymentsGet2ADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return PaymentsGet2ADOResult
     */
    public function getPaymentsGet2ADOResult()
    {
      return $this->PaymentsGet2ADOResult;
    }

    /**
     * @param PaymentsGet2ADOResult $PaymentsGet2ADOResult
     * @return PaymentsGet2ADOResponse
     */
    public function setPaymentsGet2ADOResult($PaymentsGet2ADOResult)
    {
      $this->PaymentsGet2ADOResult = $PaymentsGet2ADOResult;
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
     * @return PaymentsGet2ADOResponse
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
     * @return PaymentsGet2ADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
