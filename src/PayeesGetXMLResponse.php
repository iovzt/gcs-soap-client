<?php

class PayeesGetXMLResponse
{

    /**
     * @var PayeesGetXMLResult $PayeesGetXMLResult
     */
    protected $PayeesGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param PayeesGetXMLResult $PayeesGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($PayeesGetXMLResult, $rowCount, $pageCount)
    {
      $this->PayeesGetXMLResult = $PayeesGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return PayeesGetXMLResult
     */
    public function getPayeesGetXMLResult()
    {
      return $this->PayeesGetXMLResult;
    }

    /**
     * @param PayeesGetXMLResult $PayeesGetXMLResult
     * @return PayeesGetXMLResponse
     */
    public function setPayeesGetXMLResult($PayeesGetXMLResult)
    {
      $this->PayeesGetXMLResult = $PayeesGetXMLResult;
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
     * @return PayeesGetXMLResponse
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
     * @return PayeesGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
