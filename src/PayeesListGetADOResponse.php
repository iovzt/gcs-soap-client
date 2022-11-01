<?php

class PayeesListGetADOResponse
{

    /**
     * @var PayeesListGetADOResult $PayeesListGetADOResult
     */
    protected $PayeesListGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param PayeesListGetADOResult $PayeesListGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($PayeesListGetADOResult, $rowCount, $pageCount)
    {
      $this->PayeesListGetADOResult = $PayeesListGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return PayeesListGetADOResult
     */
    public function getPayeesListGetADOResult()
    {
      return $this->PayeesListGetADOResult;
    }

    /**
     * @param PayeesListGetADOResult $PayeesListGetADOResult
     * @return PayeesListGetADOResponse
     */
    public function setPayeesListGetADOResult($PayeesListGetADOResult)
    {
      $this->PayeesListGetADOResult = $PayeesListGetADOResult;
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
     * @return PayeesListGetADOResponse
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
     * @return PayeesListGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
