<?php

class SettlementsSetADOResponse
{

    /**
     * @var SettlementsSetADOResult $SettlementsSetADOResult
     */
    protected $SettlementsSetADOResult = null;

    /**
     * @param SettlementsSetADOResult $SettlementsSetADOResult
     */
    public function __construct($SettlementsSetADOResult)
    {
      $this->SettlementsSetADOResult = $SettlementsSetADOResult;
    }

    /**
     * @return SettlementsSetADOResult
     */
    public function getSettlementsSetADOResult()
    {
      return $this->SettlementsSetADOResult;
    }

    /**
     * @param SettlementsSetADOResult $SettlementsSetADOResult
     * @return SettlementsSetADOResponse
     */
    public function setSettlementsSetADOResult($SettlementsSetADOResult)
    {
      $this->SettlementsSetADOResult = $SettlementsSetADOResult;
      return $this;
    }

}
