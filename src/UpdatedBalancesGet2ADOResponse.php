<?php

class UpdatedBalancesGet2ADOResponse
{

    /**
     * @var UpdatedBalancesGet2ADOResult $UpdatedBalancesGet2ADOResult
     */
    protected $UpdatedBalancesGet2ADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param UpdatedBalancesGet2ADOResult $UpdatedBalancesGet2ADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($UpdatedBalancesGet2ADOResult, $rowCount, $pageCount)
    {
      $this->UpdatedBalancesGet2ADOResult = $UpdatedBalancesGet2ADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return UpdatedBalancesGet2ADOResult
     */
    public function getUpdatedBalancesGet2ADOResult()
    {
      return $this->UpdatedBalancesGet2ADOResult;
    }

    /**
     * @param UpdatedBalancesGet2ADOResult $UpdatedBalancesGet2ADOResult
     * @return UpdatedBalancesGet2ADOResponse
     */
    public function setUpdatedBalancesGet2ADOResult($UpdatedBalancesGet2ADOResult)
    {
      $this->UpdatedBalancesGet2ADOResult = $UpdatedBalancesGet2ADOResult;
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
     * @return UpdatedBalancesGet2ADOResponse
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
     * @return UpdatedBalancesGet2ADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
