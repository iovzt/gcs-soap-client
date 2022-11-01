<?php

class SettlementsGetXMLResponse
{

    /**
     * @var SettlementsGetXMLResult $SettlementsGetXMLResult
     */
    protected $SettlementsGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param SettlementsGetXMLResult $SettlementsGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($SettlementsGetXMLResult, $rowCount, $pageCount)
    {
      $this->SettlementsGetXMLResult = $SettlementsGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return SettlementsGetXMLResult
     */
    public function getSettlementsGetXMLResult()
    {
      return $this->SettlementsGetXMLResult;
    }

    /**
     * @param SettlementsGetXMLResult $SettlementsGetXMLResult
     * @return SettlementsGetXMLResponse
     */
    public function setSettlementsGetXMLResult($SettlementsGetXMLResult)
    {
      $this->SettlementsGetXMLResult = $SettlementsGetXMLResult;
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
     * @return SettlementsGetXMLResponse
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
     * @return SettlementsGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
