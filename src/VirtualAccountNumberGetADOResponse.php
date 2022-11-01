<?php

class VirtualAccountNumberGetADOResponse
{

    /**
     * @var VirtualAccountNumberGetADOResult $VirtualAccountNumberGetADOResult
     */
    protected $VirtualAccountNumberGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param VirtualAccountNumberGetADOResult $VirtualAccountNumberGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($VirtualAccountNumberGetADOResult, $rowCount, $pageCount)
    {
      $this->VirtualAccountNumberGetADOResult = $VirtualAccountNumberGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return VirtualAccountNumberGetADOResult
     */
    public function getVirtualAccountNumberGetADOResult()
    {
      return $this->VirtualAccountNumberGetADOResult;
    }

    /**
     * @param VirtualAccountNumberGetADOResult $VirtualAccountNumberGetADOResult
     * @return VirtualAccountNumberGetADOResponse
     */
    public function setVirtualAccountNumberGetADOResult($VirtualAccountNumberGetADOResult)
    {
      $this->VirtualAccountNumberGetADOResult = $VirtualAccountNumberGetADOResult;
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
     * @return VirtualAccountNumberGetADOResponse
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
     * @return VirtualAccountNumberGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
