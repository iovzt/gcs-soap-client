<?php

class DocumentListGetADOResponse
{

    /**
     * @var DocumentListGetADOResult $DocumentListGetADOResult
     */
    protected $DocumentListGetADOResult = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    /**
     * @var int $pageNumber
     */
    protected $pageNumber = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param DocumentListGetADOResult $DocumentListGetADOResult
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($DocumentListGetADOResult, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->DocumentListGetADOResult = $DocumentListGetADOResult;
      $this->pageSize = $pageSize;
      $this->pageNumber = $pageNumber;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return DocumentListGetADOResult
     */
    public function getDocumentListGetADOResult()
    {
      return $this->DocumentListGetADOResult;
    }

    /**
     * @param DocumentListGetADOResult $DocumentListGetADOResult
     * @return DocumentListGetADOResponse
     */
    public function setDocumentListGetADOResult($DocumentListGetADOResult)
    {
      $this->DocumentListGetADOResult = $DocumentListGetADOResult;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
      return $this->pageSize;
    }

    /**
     * @param int $pageSize
     * @return DocumentListGetADOResponse
     */
    public function setPageSize($pageSize)
    {
      $this->pageSize = $pageSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
      return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     * @return DocumentListGetADOResponse
     */
    public function setPageNumber($pageNumber)
    {
      $this->pageNumber = $pageNumber;
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
     * @return DocumentListGetADOResponse
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
     * @return DocumentListGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
