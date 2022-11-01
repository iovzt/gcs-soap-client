<?php

class ClientsGet2ADOResponse
{

    /**
     * @var ClientsGet2ADOResult $ClientsGet2ADOResult
     */
    protected $ClientsGet2ADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param ClientsGet2ADOResult $ClientsGet2ADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($ClientsGet2ADOResult, $rowCount, $pageCount)
    {
      $this->ClientsGet2ADOResult = $ClientsGet2ADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return ClientsGet2ADOResult
     */
    public function getClientsGet2ADOResult()
    {
      return $this->ClientsGet2ADOResult;
    }

    /**
     * @param ClientsGet2ADOResult $ClientsGet2ADOResult
     * @return ClientsGet2ADOResponse
     */
    public function setClientsGet2ADOResult($ClientsGet2ADOResult)
    {
      $this->ClientsGet2ADOResult = $ClientsGet2ADOResult;
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
     * @return ClientsGet2ADOResponse
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
     * @return ClientsGet2ADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
