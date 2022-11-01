<?php

class ChargesSetADOResponse
{

    /**
     * @var ChargesSetADOResult $ChargesSetADOResult
     */
    protected $ChargesSetADOResult = null;

    /**
     * @param ChargesSetADOResult $ChargesSetADOResult
     */
    public function __construct($ChargesSetADOResult)
    {
      $this->ChargesSetADOResult = $ChargesSetADOResult;
    }

    /**
     * @return ChargesSetADOResult
     */
    public function getChargesSetADOResult()
    {
      return $this->ChargesSetADOResult;
    }

    /**
     * @param ChargesSetADOResult $ChargesSetADOResult
     * @return ChargesSetADOResponse
     */
    public function setChargesSetADOResult($ChargesSetADOResult)
    {
      $this->ChargesSetADOResult = $ChargesSetADOResult;
      return $this;
    }

}
