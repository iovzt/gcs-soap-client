<?php

class NotesWSDS
{

    /**
     * @var NOTES $NOTES
     */
    protected $NOTES = null;

    /**
     * @var ERRORS $ERRORS
     */
    protected $ERRORS = null;

    /**
     * @var META_INFO $META_INFO
     */
    protected $META_INFO = null;

    /**
     * @param NOTES $NOTES
     * @param ERRORS $ERRORS
     * @param META_INFO $META_INFO
     */
    public function __construct($NOTES, $ERRORS, $META_INFO)
    {
      $this->NOTES = $NOTES;
      $this->ERRORS = $ERRORS;
      $this->META_INFO = $META_INFO;
    }

    /**
     * @return NOTES
     */
    public function getNOTES()
    {
      return $this->NOTES;
    }

    /**
     * @param NOTES $NOTES
     * @return NotesWSDS
     */
    public function setNOTES($NOTES)
    {
      $this->NOTES = $NOTES;
      return $this;
    }

    /**
     * @return ERRORS
     */
    public function getERRORS()
    {
      return $this->ERRORS;
    }

    /**
     * @param ERRORS $ERRORS
     * @return NotesWSDS
     */
    public function setERRORS($ERRORS)
    {
      $this->ERRORS = $ERRORS;
      return $this;
    }

    /**
     * @return META_INFO
     */
    public function getMETA_INFO()
    {
      return $this->META_INFO;
    }

    /**
     * @param META_INFO $META_INFO
     * @return NotesWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

}
