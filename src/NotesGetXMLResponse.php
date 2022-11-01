<?php

class NotesGetXMLResponse
{

    /**
     * @var NotesGetXMLResult $NotesGetXMLResult
     */
    protected $NotesGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param NotesGetXMLResult $NotesGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($NotesGetXMLResult, $rowCount, $pageCount)
    {
      $this->NotesGetXMLResult = $NotesGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return NotesGetXMLResult
     */
    public function getNotesGetXMLResult()
    {
      return $this->NotesGetXMLResult;
    }

    /**
     * @param NotesGetXMLResult $NotesGetXMLResult
     * @return NotesGetXMLResponse
     */
    public function setNotesGetXMLResult($NotesGetXMLResult)
    {
      $this->NotesGetXMLResult = $NotesGetXMLResult;
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
     * @return NotesGetXMLResponse
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
     * @return NotesGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
