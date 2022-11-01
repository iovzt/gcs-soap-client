<?php

class CheckImagesGetResponse
{

    /**
     * @var ArrayOfBase64Binary $CheckImagesGetResult
     */
    protected $CheckImagesGetResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param ArrayOfBase64Binary $CheckImagesGetResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($CheckImagesGetResult, $rowCount, $pageCount)
    {
      $this->CheckImagesGetResult = $CheckImagesGetResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return ArrayOfBase64Binary
     */
    public function getCheckImagesGetResult()
    {
      return $this->CheckImagesGetResult;
    }

    /**
     * @param ArrayOfBase64Binary $CheckImagesGetResult
     * @return CheckImagesGetResponse
     */
    public function setCheckImagesGetResult($CheckImagesGetResult)
    {
      $this->CheckImagesGetResult = $CheckImagesGetResult;
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
     * @return CheckImagesGetResponse
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
     * @return CheckImagesGetResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
