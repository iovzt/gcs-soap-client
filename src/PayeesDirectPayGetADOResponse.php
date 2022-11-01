<?php

class PayeesDirectPayGetADOResponse
{

    /**
     * @var PayeesDirectPayGetADOResult $PayeesDirectPayGetADOResult
     */
    protected $PayeesDirectPayGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param PayeesDirectPayGetADOResult $PayeesDirectPayGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($PayeesDirectPayGetADOResult, $rowCount, $pageCount)
    {
      $this->PayeesDirectPayGetADOResult = $PayeesDirectPayGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return PayeesDirectPayGetADOResult
     */
    public function getPayeesDirectPayGetADOResult()
    {
      return $this->PayeesDirectPayGetADOResult;
    }

    /**
     * @param PayeesDirectPayGetADOResult $PayeesDirectPayGetADOResult
     * @return PayeesDirectPayGetADOResponse
     */
    public function setPayeesDirectPayGetADOResult($PayeesDirectPayGetADOResult)
    {
      $this->PayeesDirectPayGetADOResult = $PayeesDirectPayGetADOResult;
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
     * @return PayeesDirectPayGetADOResponse
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
     * @return PayeesDirectPayGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
