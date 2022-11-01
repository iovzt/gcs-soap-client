<?php

class ClientsGetADOResponse
{

    /**
     * @var ClientsGetADOResult $ClientsGetADOResult
     */
    protected $ClientsGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param ClientsGetADOResult $ClientsGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($ClientsGetADOResult, $rowCount, $pageCount)
    {
      $this->ClientsGetADOResult = $ClientsGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return ClientsGetADOResult
     */
    public function getClientsGetADOResult()
    {
      return $this->ClientsGetADOResult;
    }

    /**
     * @param ClientsGetADOResult $ClientsGetADOResult
     * @return ClientsGetADOResponse
     */
    public function setClientsGetADOResult($ClientsGetADOResult)
    {
      $this->ClientsGetADOResult = $ClientsGetADOResult;
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
     * @return ClientsGetADOResponse
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
     * @return ClientsGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
