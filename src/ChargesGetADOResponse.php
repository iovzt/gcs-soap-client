<?php

class ChargesGetADOResponse
{

    /**
     * @var ChargesGetADOResult $ChargesGetADOResult
     */
    protected $ChargesGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param ChargesGetADOResult $ChargesGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($ChargesGetADOResult, $rowCount, $pageCount)
    {
      $this->ChargesGetADOResult = $ChargesGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return ChargesGetADOResult
     */
    public function getChargesGetADOResult()
    {
      return $this->ChargesGetADOResult;
    }

    /**
     * @param ChargesGetADOResult $ChargesGetADOResult
     * @return ChargesGetADOResponse
     */
    public function setChargesGetADOResult($ChargesGetADOResult)
    {
      $this->ChargesGetADOResult = $ChargesGetADOResult;
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
     * @return ChargesGetADOResponse
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
     * @return ChargesGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
