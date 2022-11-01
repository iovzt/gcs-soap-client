<?php

class DraftsSet2ADOResponse
{

    /**
     * @var DraftsSet2ADOResult $DraftsSet2ADOResult
     */
    protected $DraftsSet2ADOResult = null;

    /**
     * @param DraftsSet2ADOResult $DraftsSet2ADOResult
     */
    public function __construct($DraftsSet2ADOResult)
    {
      $this->DraftsSet2ADOResult = $DraftsSet2ADOResult;
    }

    /**
     * @return DraftsSet2ADOResult
     */
    public function getDraftsSet2ADOResult()
    {
      return $this->DraftsSet2ADOResult;
    }

    /**
     * @param DraftsSet2ADOResult $DraftsSet2ADOResult
     * @return DraftsSet2ADOResponse
     */
    public function setDraftsSet2ADOResult($DraftsSet2ADOResult)
    {
      $this->DraftsSet2ADOResult = $DraftsSet2ADOResult;
      return $this;
    }

}
