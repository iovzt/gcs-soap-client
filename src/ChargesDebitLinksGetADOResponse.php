<?php

class ChargesDebitLinksGetADOResponse
{

    /**
     * @var ChargesDebitLinksGetADOResult $ChargesDebitLinksGetADOResult
     */
    protected $ChargesDebitLinksGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param ChargesDebitLinksGetADOResult $ChargesDebitLinksGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($ChargesDebitLinksGetADOResult, $rowCount, $pageCount)
    {
      $this->ChargesDebitLinksGetADOResult = $ChargesDebitLinksGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return ChargesDebitLinksGetADOResult
     */
    public function getChargesDebitLinksGetADOResult()
    {
      return $this->ChargesDebitLinksGetADOResult;
    }

    /**
     * @param ChargesDebitLinksGetADOResult $ChargesDebitLinksGetADOResult
     * @return ChargesDebitLinksGetADOResponse
     */
    public function setChargesDebitLinksGetADOResult($ChargesDebitLinksGetADOResult)
    {
      $this->ChargesDebitLinksGetADOResult = $ChargesDebitLinksGetADOResult;
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
     * @return ChargesDebitLinksGetADOResponse
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
     * @return ChargesDebitLinksGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
