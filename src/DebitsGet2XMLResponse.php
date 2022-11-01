<?php

class DebitsGet2XMLResponse
{

    /**
     * @var DebitsGet2XMLResult $DebitsGet2XMLResult
     */
    protected $DebitsGet2XMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param DebitsGet2XMLResult $DebitsGet2XMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($DebitsGet2XMLResult, $rowCount, $pageCount)
    {
      $this->DebitsGet2XMLResult = $DebitsGet2XMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return DebitsGet2XMLResult
     */
    public function getDebitsGet2XMLResult()
    {
      return $this->DebitsGet2XMLResult;
    }

    /**
     * @param DebitsGet2XMLResult $DebitsGet2XMLResult
     * @return DebitsGet2XMLResponse
     */
    public function setDebitsGet2XMLResult($DebitsGet2XMLResult)
    {
      $this->DebitsGet2XMLResult = $DebitsGet2XMLResult;
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
     * @return DebitsGet2XMLResponse
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
     * @return DebitsGet2XMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
