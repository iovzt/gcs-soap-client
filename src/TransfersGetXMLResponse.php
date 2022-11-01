<?php

class TransfersGetXMLResponse
{

    /**
     * @var TransfersGetXMLResult $TransfersGetXMLResult
     */
    protected $TransfersGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param TransfersGetXMLResult $TransfersGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($TransfersGetXMLResult, $rowCount, $pageCount)
    {
      $this->TransfersGetXMLResult = $TransfersGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return TransfersGetXMLResult
     */
    public function getTransfersGetXMLResult()
    {
      return $this->TransfersGetXMLResult;
    }

    /**
     * @param TransfersGetXMLResult $TransfersGetXMLResult
     * @return TransfersGetXMLResponse
     */
    public function setTransfersGetXMLResult($TransfersGetXMLResult)
    {
      $this->TransfersGetXMLResult = $TransfersGetXMLResult;
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
     * @return TransfersGetXMLResponse
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
     * @return TransfersGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
