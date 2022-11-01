<?php

class DraftInfoGetADOResponse
{

    /**
     * @var DraftInfoGetADOResult $DraftInfoGetADOResult
     */
    protected $DraftInfoGetADOResult = null;

    /**
     * @param DraftInfoGetADOResult $DraftInfoGetADOResult
     */
    public function __construct($DraftInfoGetADOResult)
    {
      $this->DraftInfoGetADOResult = $DraftInfoGetADOResult;
    }

    /**
     * @return DraftInfoGetADOResult
     */
    public function getDraftInfoGetADOResult()
    {
      return $this->DraftInfoGetADOResult;
    }

    /**
     * @param DraftInfoGetADOResult $DraftInfoGetADOResult
     * @return DraftInfoGetADOResponse
     */
    public function setDraftInfoGetADOResult($DraftInfoGetADOResult)
    {
      $this->DraftInfoGetADOResult = $DraftInfoGetADOResult;
      return $this;
    }

}
