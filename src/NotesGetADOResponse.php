<?php

class NotesGetADOResponse
{

    /**
     * @var NotesGetADOResult $NotesGetADOResult
     */
    protected $NotesGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param NotesGetADOResult $NotesGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($NotesGetADOResult, $rowCount, $pageCount)
    {
      $this->NotesGetADOResult = $NotesGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return NotesGetADOResult
     */
    public function getNotesGetADOResult()
    {
      return $this->NotesGetADOResult;
    }

    /**
     * @param NotesGetADOResult $NotesGetADOResult
     * @return NotesGetADOResponse
     */
    public function setNotesGetADOResult($NotesGetADOResult)
    {
      $this->NotesGetADOResult = $NotesGetADOResult;
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
     * @return NotesGetADOResponse
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
     * @return NotesGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
