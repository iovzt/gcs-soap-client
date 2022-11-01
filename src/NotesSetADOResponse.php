<?php

class NotesSetADOResponse
{

    /**
     * @var NotesSetADOResult $NotesSetADOResult
     */
    protected $NotesSetADOResult = null;

    /**
     * @param NotesSetADOResult $NotesSetADOResult
     */
    public function __construct($NotesSetADOResult)
    {
      $this->NotesSetADOResult = $NotesSetADOResult;
    }

    /**
     * @return NotesSetADOResult
     */
    public function getNotesSetADOResult()
    {
      return $this->NotesSetADOResult;
    }

    /**
     * @param NotesSetADOResult $NotesSetADOResult
     * @return NotesSetADOResponse
     */
    public function setNotesSetADOResult($NotesSetADOResult)
    {
      $this->NotesSetADOResult = $NotesSetADOResult;
      return $this;
    }

}
