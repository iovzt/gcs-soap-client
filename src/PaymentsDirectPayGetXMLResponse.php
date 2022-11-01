<?php

class PaymentsDirectPayGetXMLResponse
{

    /**
     * @var PaymentsDirectPayGetXMLResult $PaymentsDirectPayGetXMLResult
     */
    protected $PaymentsDirectPayGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param PaymentsDirectPayGetXMLResult $PaymentsDirectPayGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($PaymentsDirectPayGetXMLResult, $rowCount, $pageCount)
    {
      $this->PaymentsDirectPayGetXMLResult = $PaymentsDirectPayGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return PaymentsDirectPayGetXMLResult
     */
    public function getPaymentsDirectPayGetXMLResult()
    {
      return $this->PaymentsDirectPayGetXMLResult;
    }

    /**
     * @param PaymentsDirectPayGetXMLResult $PaymentsDirectPayGetXMLResult
     * @return PaymentsDirectPayGetXMLResponse
     */
    public function setPaymentsDirectPayGetXMLResult($PaymentsDirectPayGetXMLResult)
    {
      $this->PaymentsDirectPayGetXMLResult = $PaymentsDirectPayGetXMLResult;
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
     * @return PaymentsDirectPayGetXMLResponse
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
     * @return PaymentsDirectPayGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
