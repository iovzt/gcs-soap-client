<?php

class PaymentsGet2XMLResponse
{

    /**
     * @var PaymentsGet2XMLResult $PaymentsGet2XMLResult
     */
    protected $PaymentsGet2XMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param PaymentsGet2XMLResult $PaymentsGet2XMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($PaymentsGet2XMLResult, $rowCount, $pageCount)
    {
      $this->PaymentsGet2XMLResult = $PaymentsGet2XMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return PaymentsGet2XMLResult
     */
    public function getPaymentsGet2XMLResult()
    {
      return $this->PaymentsGet2XMLResult;
    }

    /**
     * @param PaymentsGet2XMLResult $PaymentsGet2XMLResult
     * @return PaymentsGet2XMLResponse
     */
    public function setPaymentsGet2XMLResult($PaymentsGet2XMLResult)
    {
      $this->PaymentsGet2XMLResult = $PaymentsGet2XMLResult;
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
     * @return PaymentsGet2XMLResponse
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
     * @return PaymentsGet2XMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
