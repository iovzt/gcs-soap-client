<?php

class ClientsGetXMLResponse
{

    /**
     * @var ClientsGetXMLResult $ClientsGetXMLResult
     */
    protected $ClientsGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param ClientsGetXMLResult $ClientsGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($ClientsGetXMLResult, $rowCount, $pageCount)
    {
      $this->ClientsGetXMLResult = $ClientsGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return ClientsGetXMLResult
     */
    public function getClientsGetXMLResult()
    {
      return $this->ClientsGetXMLResult;
    }

    /**
     * @param ClientsGetXMLResult $ClientsGetXMLResult
     * @return ClientsGetXMLResponse
     */
    public function setClientsGetXMLResult($ClientsGetXMLResult)
    {
      $this->ClientsGetXMLResult = $ClientsGetXMLResult;
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
     * @return ClientsGetXMLResponse
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
     * @return ClientsGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
