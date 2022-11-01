<?php

class DebitsSetADOResponse
{

    /**
     * @var DebitsSetADOResult $DebitsSetADOResult
     */
    protected $DebitsSetADOResult = null;

    /**
     * @param DebitsSetADOResult $DebitsSetADOResult
     */
    public function __construct($DebitsSetADOResult)
    {
      $this->DebitsSetADOResult = $DebitsSetADOResult;
    }

    /**
     * @return DebitsSetADOResult
     */
    public function getDebitsSetADOResult()
    {
      return $this->DebitsSetADOResult;
    }

    /**
     * @param DebitsSetADOResult $DebitsSetADOResult
     * @return DebitsSetADOResponse
     */
    public function setDebitsSetADOResult($DebitsSetADOResult)
    {
      $this->DebitsSetADOResult = $DebitsSetADOResult;
      return $this;
    }

}
