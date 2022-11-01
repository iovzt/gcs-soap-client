<?php

class UpdatedBalancesGet2XMLResponse
{

    /**
     * @var UpdatedBalancesGet2XMLResult $UpdatedBalancesGet2XMLResult
     */
    protected $UpdatedBalancesGet2XMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param UpdatedBalancesGet2XMLResult $UpdatedBalancesGet2XMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($UpdatedBalancesGet2XMLResult, $rowCount, $pageCount)
    {
      $this->UpdatedBalancesGet2XMLResult = $UpdatedBalancesGet2XMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return UpdatedBalancesGet2XMLResult
     */
    public function getUpdatedBalancesGet2XMLResult()
    {
      return $this->UpdatedBalancesGet2XMLResult;
    }

    /**
     * @param UpdatedBalancesGet2XMLResult $UpdatedBalancesGet2XMLResult
     * @return UpdatedBalancesGet2XMLResponse
     */
    public function setUpdatedBalancesGet2XMLResult($UpdatedBalancesGet2XMLResult)
    {
      $this->UpdatedBalancesGet2XMLResult = $UpdatedBalancesGet2XMLResult;
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
     * @return UpdatedBalancesGet2XMLResponse
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
     * @return UpdatedBalancesGet2XMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
