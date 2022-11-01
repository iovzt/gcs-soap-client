<?php

class DraftsSetADOResponse
{

    /**
     * @var DraftsSetADOResult $DraftsSetADOResult
     */
    protected $DraftsSetADOResult = null;

    /**
     * @param DraftsSetADOResult $DraftsSetADOResult
     */
    public function __construct($DraftsSetADOResult)
    {
      $this->DraftsSetADOResult = $DraftsSetADOResult;
    }

    /**
     * @return DraftsSetADOResult
     */
    public function getDraftsSetADOResult()
    {
      return $this->DraftsSetADOResult;
    }

    /**
     * @param DraftsSetADOResult $DraftsSetADOResult
     * @return DraftsSetADOResponse
     */
    public function setDraftsSetADOResult($DraftsSetADOResult)
    {
      $this->DraftsSetADOResult = $DraftsSetADOResult;
      return $this;
    }

}
