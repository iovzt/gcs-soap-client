<?php

class DraftsSet2XMLResponse
{

    /**
     * @var DraftsSet2XMLResult $DraftsSet2XMLResult
     */
    protected $DraftsSet2XMLResult = null;

    /**
     * @param DraftsSet2XMLResult $DraftsSet2XMLResult
     */
    public function __construct($DraftsSet2XMLResult)
    {
      $this->DraftsSet2XMLResult = $DraftsSet2XMLResult;
    }

    /**
     * @return DraftsSet2XMLResult
     */
    public function getDraftsSet2XMLResult()
    {
      return $this->DraftsSet2XMLResult;
    }

    /**
     * @param DraftsSet2XMLResult $DraftsSet2XMLResult
     * @return DraftsSet2XMLResponse
     */
    public function setDraftsSet2XMLResult($DraftsSet2XMLResult)
    {
      $this->DraftsSet2XMLResult = $DraftsSet2XMLResult;
      return $this;
    }

}
