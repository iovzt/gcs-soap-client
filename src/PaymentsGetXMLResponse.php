<?php

class PaymentsGetXMLResponse
{

    /**
     * @var PaymentsGetXMLResult $PaymentsGetXMLResult
     */
    protected $PaymentsGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param PaymentsGetXMLResult $PaymentsGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($PaymentsGetXMLResult, $rowCount, $pageCount)
    {
      $this->PaymentsGetXMLResult = $PaymentsGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return PaymentsGetXMLResult
     */
    public function getPaymentsGetXMLResult()
    {
      return $this->PaymentsGetXMLResult;
    }

    /**
     * @param PaymentsGetXMLResult $PaymentsGetXMLResult
     * @return PaymentsGetXMLResponse
     */
    public function setPaymentsGetXMLResult($PaymentsGetXMLResult)
    {
      $this->PaymentsGetXMLResult = $PaymentsGetXMLResult;
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
     * @return PaymentsGetXMLResponse
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
     * @return PaymentsGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
