<?php

class DocumentListGetXMLResponse
{

    /**
     * @var DocumentListGetXMLResult $DocumentListGetXMLResult
     */
    protected $DocumentListGetXMLResult = null;

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
     * @param DocumentListGetXMLResult $DocumentListGetXMLResult
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($DocumentListGetXMLResult, $pageSize, $pageNumber, $rowCount, $pageCount)
    {
      $this->DocumentListGetXMLResult = $DocumentListGetXMLResult;
      $this->pageSize = $pageSize;
      $this->pageNumber = $pageNumber;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return DocumentListGetXMLResult
     */
    public function getDocumentListGetXMLResult()
    {
      return $this->DocumentListGetXMLResult;
    }

    /**
     * @param DocumentListGetXMLResult $DocumentListGetXMLResult
     * @return DocumentListGetXMLResponse
     */
    public function setDocumentListGetXMLResult($DocumentListGetXMLResult)
    {
      $this->DocumentListGetXMLResult = $DocumentListGetXMLResult;
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
     * @return DocumentListGetXMLResponse
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
     * @return DocumentListGetXMLResponse
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
     * @return DocumentListGetXMLResponse
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
     * @return DocumentListGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
