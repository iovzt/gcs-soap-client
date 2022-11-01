<?php

class FeesGetXMLResponse
{

    /**
     * @var FeesGetXMLResult $FeesGetXMLResult
     */
    protected $FeesGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param FeesGetXMLResult $FeesGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($FeesGetXMLResult, $rowCount, $pageCount)
    {
      $this->FeesGetXMLResult = $FeesGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return FeesGetXMLResult
     */
    public function getFeesGetXMLResult()
    {
      return $this->FeesGetXMLResult;
    }

    /**
     * @param FeesGetXMLResult $FeesGetXMLResult
     * @return FeesGetXMLResponse
     */
    public function setFeesGetXMLResult($FeesGetXMLResult)
    {
      $this->FeesGetXMLResult = $FeesGetXMLResult;
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
     * @return FeesGetXMLResponse
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
     * @return FeesGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
