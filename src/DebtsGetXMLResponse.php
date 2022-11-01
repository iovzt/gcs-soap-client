<?php

class DebtsGetXMLResponse
{

    /**
     * @var DebtsGetXMLResult $DebtsGetXMLResult
     */
    protected $DebtsGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param DebtsGetXMLResult $DebtsGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($DebtsGetXMLResult, $rowCount, $pageCount)
    {
      $this->DebtsGetXMLResult = $DebtsGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return DebtsGetXMLResult
     */
    public function getDebtsGetXMLResult()
    {
      return $this->DebtsGetXMLResult;
    }

    /**
     * @param DebtsGetXMLResult $DebtsGetXMLResult
     * @return DebtsGetXMLResponse
     */
    public function setDebtsGetXMLResult($DebtsGetXMLResult)
    {
      $this->DebtsGetXMLResult = $DebtsGetXMLResult;
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
     * @return DebtsGetXMLResponse
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
     * @return DebtsGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
