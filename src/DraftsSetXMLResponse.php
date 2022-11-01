<?php

class DraftsSetXMLResponse
{

    /**
     * @var DraftsSetXMLResult $DraftsSetXMLResult
     */
    protected $DraftsSetXMLResult = null;

    /**
     * @param DraftsSetXMLResult $DraftsSetXMLResult
     */
    public function __construct($DraftsSetXMLResult)
    {
      $this->DraftsSetXMLResult = $DraftsSetXMLResult;
    }

    /**
     * @return DraftsSetXMLResult
     */
    public function getDraftsSetXMLResult()
    {
      return $this->DraftsSetXMLResult;
    }

    /**
     * @param DraftsSetXMLResult $DraftsSetXMLResult
     * @return DraftsSetXMLResponse
     */
    public function setDraftsSetXMLResult($DraftsSetXMLResult)
    {
      $this->DraftsSetXMLResult = $DraftsSetXMLResult;
      return $this;
    }

}
