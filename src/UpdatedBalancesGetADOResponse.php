<?php

class UpdatedBalancesGetADOResponse
{

    /**
     * @var UpdatedBalancesGetADOResult $UpdatedBalancesGetADOResult
     */
    protected $UpdatedBalancesGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param UpdatedBalancesGetADOResult $UpdatedBalancesGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($UpdatedBalancesGetADOResult, $rowCount, $pageCount)
    {
      $this->UpdatedBalancesGetADOResult = $UpdatedBalancesGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return UpdatedBalancesGetADOResult
     */
    public function getUpdatedBalancesGetADOResult()
    {
      return $this->UpdatedBalancesGetADOResult;
    }

    /**
     * @param UpdatedBalancesGetADOResult $UpdatedBalancesGetADOResult
     * @return UpdatedBalancesGetADOResponse
     */
    public function setUpdatedBalancesGetADOResult($UpdatedBalancesGetADOResult)
    {
      $this->UpdatedBalancesGetADOResult = $UpdatedBalancesGetADOResult;
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
     * @return UpdatedBalancesGetADOResponse
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
     * @return UpdatedBalancesGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
