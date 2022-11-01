<?php

class FeesSetADOResponse
{

    /**
     * @var FeesSetADOResult $FeesSetADOResult
     */
    protected $FeesSetADOResult = null;

    /**
     * @param FeesSetADOResult $FeesSetADOResult
     */
    public function __construct($FeesSetADOResult)
    {
      $this->FeesSetADOResult = $FeesSetADOResult;
    }

    /**
     * @return FeesSetADOResult
     */
    public function getFeesSetADOResult()
    {
      return $this->FeesSetADOResult;
    }

    /**
     * @param FeesSetADOResult $FeesSetADOResult
     * @return FeesSetADOResponse
     */
    public function setFeesSetADOResult($FeesSetADOResult)
    {
      $this->FeesSetADOResult = $FeesSetADOResult;
      return $this;
    }

}
