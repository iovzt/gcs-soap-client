<?php

class PayeesListGetXMLResponse
{

    /**
     * @var PayeesListGetXMLResult $PayeesListGetXMLResult
     */
    protected $PayeesListGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param PayeesListGetXMLResult $PayeesListGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($PayeesListGetXMLResult, $rowCount, $pageCount)
    {
      $this->PayeesListGetXMLResult = $PayeesListGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return PayeesListGetXMLResult
     */
    public function getPayeesListGetXMLResult()
    {
      return $this->PayeesListGetXMLResult;
    }

    /**
     * @param PayeesListGetXMLResult $PayeesListGetXMLResult
     * @return PayeesListGetXMLResponse
     */
    public function setPayeesListGetXMLResult($PayeesListGetXMLResult)
    {
      $this->PayeesListGetXMLResult = $PayeesListGetXMLResult;
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
     * @return PayeesListGetXMLResponse
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
     * @return PayeesListGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
