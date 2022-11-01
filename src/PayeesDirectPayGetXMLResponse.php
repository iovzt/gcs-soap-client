<?php

class PayeesDirectPayGetXMLResponse
{

    /**
     * @var PayeesDirectPayGetXMLResult $PayeesDirectPayGetXMLResult
     */
    protected $PayeesDirectPayGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param PayeesDirectPayGetXMLResult $PayeesDirectPayGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($PayeesDirectPayGetXMLResult, $rowCount, $pageCount)
    {
      $this->PayeesDirectPayGetXMLResult = $PayeesDirectPayGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return PayeesDirectPayGetXMLResult
     */
    public function getPayeesDirectPayGetXMLResult()
    {
      return $this->PayeesDirectPayGetXMLResult;
    }

    /**
     * @param PayeesDirectPayGetXMLResult $PayeesDirectPayGetXMLResult
     * @return PayeesDirectPayGetXMLResponse
     */
    public function setPayeesDirectPayGetXMLResult($PayeesDirectPayGetXMLResult)
    {
      $this->PayeesDirectPayGetXMLResult = $PayeesDirectPayGetXMLResult;
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
     * @return PayeesDirectPayGetXMLResponse
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
     * @return PayeesDirectPayGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
