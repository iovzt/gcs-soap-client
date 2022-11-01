<?php

class DebitsGetXMLResponse
{

    /**
     * @var DebitsGetXMLResult $DebitsGetXMLResult
     */
    protected $DebitsGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param DebitsGetXMLResult $DebitsGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($DebitsGetXMLResult, $rowCount, $pageCount)
    {
      $this->DebitsGetXMLResult = $DebitsGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return DebitsGetXMLResult
     */
    public function getDebitsGetXMLResult()
    {
      return $this->DebitsGetXMLResult;
    }

    /**
     * @param DebitsGetXMLResult $DebitsGetXMLResult
     * @return DebitsGetXMLResponse
     */
    public function setDebitsGetXMLResult($DebitsGetXMLResult)
    {
      $this->DebitsGetXMLResult = $DebitsGetXMLResult;
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
     * @return DebitsGetXMLResponse
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
     * @return DebitsGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
