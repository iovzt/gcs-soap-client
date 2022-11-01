<?php

class ChargesDebitLinksGetXMLResponse
{

    /**
     * @var ChargesDebitLinksGetXMLResult $ChargesDebitLinksGetXMLResult
     */
    protected $ChargesDebitLinksGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param ChargesDebitLinksGetXMLResult $ChargesDebitLinksGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($ChargesDebitLinksGetXMLResult, $rowCount, $pageCount)
    {
      $this->ChargesDebitLinksGetXMLResult = $ChargesDebitLinksGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return ChargesDebitLinksGetXMLResult
     */
    public function getChargesDebitLinksGetXMLResult()
    {
      return $this->ChargesDebitLinksGetXMLResult;
    }

    /**
     * @param ChargesDebitLinksGetXMLResult $ChargesDebitLinksGetXMLResult
     * @return ChargesDebitLinksGetXMLResponse
     */
    public function setChargesDebitLinksGetXMLResult($ChargesDebitLinksGetXMLResult)
    {
      $this->ChargesDebitLinksGetXMLResult = $ChargesDebitLinksGetXMLResult;
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
     * @return ChargesDebitLinksGetXMLResponse
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
     * @return ChargesDebitLinksGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
