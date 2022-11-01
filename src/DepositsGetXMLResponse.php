<?php

class DepositsGetXMLResponse
{

    /**
     * @var DepositsGetXMLResult $DepositsGetXMLResult
     */
    protected $DepositsGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param DepositsGetXMLResult $DepositsGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($DepositsGetXMLResult, $rowCount, $pageCount)
    {
      $this->DepositsGetXMLResult = $DepositsGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return DepositsGetXMLResult
     */
    public function getDepositsGetXMLResult()
    {
      return $this->DepositsGetXMLResult;
    }

    /**
     * @param DepositsGetXMLResult $DepositsGetXMLResult
     * @return DepositsGetXMLResponse
     */
    public function setDepositsGetXMLResult($DepositsGetXMLResult)
    {
      $this->DepositsGetXMLResult = $DepositsGetXMLResult;
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
     * @return DepositsGetXMLResponse
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
     * @return DepositsGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
