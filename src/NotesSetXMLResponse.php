<?php

class NotesSetXMLResponse
{

    /**
     * @var NotesSetXMLResult $NotesSetXMLResult
     */
    protected $NotesSetXMLResult = null;

    /**
     * @param NotesSetXMLResult $NotesSetXMLResult
     */
    public function __construct($NotesSetXMLResult)
    {
      $this->NotesSetXMLResult = $NotesSetXMLResult;
    }

    /**
     * @return NotesSetXMLResult
     */
    public function getNotesSetXMLResult()
    {
      return $this->NotesSetXMLResult;
    }

    /**
     * @param NotesSetXMLResult $NotesSetXMLResult
     * @return NotesSetXMLResponse
     */
    public function setNotesSetXMLResult($NotesSetXMLResult)
    {
      $this->NotesSetXMLResult = $NotesSetXMLResult;
      return $this;
    }

}
