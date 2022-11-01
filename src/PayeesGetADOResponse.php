<?php

class PayeesGetADOResponse
{

    /**
     * @var PayeesGetADOResult $PayeesGetADOResult
     */
    protected $PayeesGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param PayeesGetADOResult $PayeesGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($PayeesGetADOResult, $rowCount, $pageCount)
    {
      $this->PayeesGetADOResult = $PayeesGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return PayeesGetADOResult
     */
    public function getPayeesGetADOResult()
    {
      return $this->PayeesGetADOResult;
    }

    /**
     * @param PayeesGetADOResult $PayeesGetADOResult
     * @return PayeesGetADOResponse
     */
    public function setPayeesGetADOResult($PayeesGetADOResult)
    {
      $this->PayeesGetADOResult = $PayeesGetADOResult;
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
     * @return PayeesGetADOResponse
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
     * @return PayeesGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
