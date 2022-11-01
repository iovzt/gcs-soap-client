<?php

class DebitsSet2ADOResponse
{

    /**
     * @var DebitsSet2ADOResult $DebitsSet2ADOResult
     */
    protected $DebitsSet2ADOResult = null;

    /**
     * @param DebitsSet2ADOResult $DebitsSet2ADOResult
     */
    public function __construct($DebitsSet2ADOResult)
    {
      $this->DebitsSet2ADOResult = $DebitsSet2ADOResult;
    }

    /**
     * @return DebitsSet2ADOResult
     */
    public function getDebitsSet2ADOResult()
    {
      return $this->DebitsSet2ADOResult;
    }

    /**
     * @param DebitsSet2ADOResult $DebitsSet2ADOResult
     * @return DebitsSet2ADOResponse
     */
    public function setDebitsSet2ADOResult($DebitsSet2ADOResult)
    {
      $this->DebitsSet2ADOResult = $DebitsSet2ADOResult;
      return $this;
    }

}
