<?php

class DebtsSetADOResponse
{

    /**
     * @var DebtsSetADOResult $DebtsSetADOResult
     */
    protected $DebtsSetADOResult = null;

    /**
     * @param DebtsSetADOResult $DebtsSetADOResult
     */
    public function __construct($DebtsSetADOResult)
    {
      $this->DebtsSetADOResult = $DebtsSetADOResult;
    }

    /**
     * @return DebtsSetADOResult
     */
    public function getDebtsSetADOResult()
    {
      return $this->DebtsSetADOResult;
    }

    /**
     * @param DebtsSetADOResult $DebtsSetADOResult
     * @return DebtsSetADOResponse
     */
    public function setDebtsSetADOResult($DebtsSetADOResult)
    {
      $this->DebtsSetADOResult = $DebtsSetADOResult;
      return $this;
    }

}
