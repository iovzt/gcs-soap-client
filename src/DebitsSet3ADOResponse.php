<?php

class DebitsSet3ADOResponse
{

    /**
     * @var DebitsSet3ADOResult $DebitsSet3ADOResult
     */
    protected $DebitsSet3ADOResult = null;

    /**
     * @param DebitsSet3ADOResult $DebitsSet3ADOResult
     */
    public function __construct($DebitsSet3ADOResult)
    {
      $this->DebitsSet3ADOResult = $DebitsSet3ADOResult;
    }

    /**
     * @return DebitsSet3ADOResult
     */
    public function getDebitsSet3ADOResult()
    {
      return $this->DebitsSet3ADOResult;
    }

    /**
     * @param DebitsSet3ADOResult $DebitsSet3ADOResult
     * @return DebitsSet3ADOResponse
     */
    public function setDebitsSet3ADOResult($DebitsSet3ADOResult)
    {
      $this->DebitsSet3ADOResult = $DebitsSet3ADOResult;
      return $this;
    }

}
