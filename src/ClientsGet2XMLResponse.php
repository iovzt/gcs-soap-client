<?php

class ClientsGet2XMLResponse
{

    /**
     * @var ClientsGet2XMLResult $ClientsGet2XMLResult
     */
    protected $ClientsGet2XMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param ClientsGet2XMLResult $ClientsGet2XMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($ClientsGet2XMLResult, $rowCount, $pageCount)
    {
      $this->ClientsGet2XMLResult = $ClientsGet2XMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return ClientsGet2XMLResult
     */
    public function getClientsGet2XMLResult()
    {
      return $this->ClientsGet2XMLResult;
    }

    /**
     * @param ClientsGet2XMLResult $ClientsGet2XMLResult
     * @return ClientsGet2XMLResponse
     */
    public function setClientsGet2XMLResult($ClientsGet2XMLResult)
    {
      $this->ClientsGet2XMLResult = $ClientsGet2XMLResult;
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
     * @return ClientsGet2XMLResponse
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
     * @return ClientsGet2XMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
