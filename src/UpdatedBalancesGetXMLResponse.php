<?php

class UpdatedBalancesGetXMLResponse
{

    /**
     * @var UpdatedBalancesGetXMLResult $UpdatedBalancesGetXMLResult
     */
    protected $UpdatedBalancesGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param UpdatedBalancesGetXMLResult $UpdatedBalancesGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($UpdatedBalancesGetXMLResult, $rowCount, $pageCount)
    {
      $this->UpdatedBalancesGetXMLResult = $UpdatedBalancesGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return UpdatedBalancesGetXMLResult
     */
    public function getUpdatedBalancesGetXMLResult()
    {
      return $this->UpdatedBalancesGetXMLResult;
    }

    /**
     * @param UpdatedBalancesGetXMLResult $UpdatedBalancesGetXMLResult
     * @return UpdatedBalancesGetXMLResponse
     */
    public function setUpdatedBalancesGetXMLResult($UpdatedBalancesGetXMLResult)
    {
      $this->UpdatedBalancesGetXMLResult = $UpdatedBalancesGetXMLResult;
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
     * @return UpdatedBalancesGetXMLResponse
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
     * @return UpdatedBalancesGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
