<?php

class VirtualAccountNumberGetXMLResponse
{

    /**
     * @var VirtualAccountNumberGetXMLResult $VirtualAccountNumberGetXMLResult
     */
    protected $VirtualAccountNumberGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param VirtualAccountNumberGetXMLResult $VirtualAccountNumberGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($VirtualAccountNumberGetXMLResult, $rowCount, $pageCount)
    {
      $this->VirtualAccountNumberGetXMLResult = $VirtualAccountNumberGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return VirtualAccountNumberGetXMLResult
     */
    public function getVirtualAccountNumberGetXMLResult()
    {
      return $this->VirtualAccountNumberGetXMLResult;
    }

    /**
     * @param VirtualAccountNumberGetXMLResult $VirtualAccountNumberGetXMLResult
     * @return VirtualAccountNumberGetXMLResponse
     */
    public function setVirtualAccountNumberGetXMLResult($VirtualAccountNumberGetXMLResult)
    {
      $this->VirtualAccountNumberGetXMLResult = $VirtualAccountNumberGetXMLResult;
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
     * @return VirtualAccountNumberGetXMLResponse
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
     * @return VirtualAccountNumberGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
