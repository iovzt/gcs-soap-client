<?php

class ChargesGetXMLResponse
{

    /**
     * @var ChargesGetXMLResult $ChargesGetXMLResult
     */
    protected $ChargesGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param ChargesGetXMLResult $ChargesGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($ChargesGetXMLResult, $rowCount, $pageCount)
    {
      $this->ChargesGetXMLResult = $ChargesGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return ChargesGetXMLResult
     */
    public function getChargesGetXMLResult()
    {
      return $this->ChargesGetXMLResult;
    }

    /**
     * @param ChargesGetXMLResult $ChargesGetXMLResult
     * @return ChargesGetXMLResponse
     */
    public function setChargesGetXMLResult($ChargesGetXMLResult)
    {
      $this->ChargesGetXMLResult = $ChargesGetXMLResult;
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
     * @return ChargesGetXMLResponse
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
     * @return ChargesGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
