<?php

class DraftInfoGetXMLResponse
{

    /**
     * @var DraftInfoGetXMLResult $DraftInfoGetXMLResult
     */
    protected $DraftInfoGetXMLResult = null;

    /**
     * @param DraftInfoGetXMLResult $DraftInfoGetXMLResult
     */
    public function __construct($DraftInfoGetXMLResult)
    {
      $this->DraftInfoGetXMLResult = $DraftInfoGetXMLResult;
    }

    /**
     * @return DraftInfoGetXMLResult
     */
    public function getDraftInfoGetXMLResult()
    {
      return $this->DraftInfoGetXMLResult;
    }

    /**
     * @param DraftInfoGetXMLResult $DraftInfoGetXMLResult
     * @return DraftInfoGetXMLResponse
     */
    public function setDraftInfoGetXMLResult($DraftInfoGetXMLResult)
    {
      $this->DraftInfoGetXMLResult = $DraftInfoGetXMLResult;
      return $this;
    }

}
