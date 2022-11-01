<?php

class StatesGetADOResponse
{

    /**
     * @var StatesGetADOResult $StatesGetADOResult
     */
    protected $StatesGetADOResult = null;

    /**
     * @param StatesGetADOResult $StatesGetADOResult
     */
    public function __construct($StatesGetADOResult)
    {
      $this->StatesGetADOResult = $StatesGetADOResult;
    }

    /**
     * @return StatesGetADOResult
     */
    public function getStatesGetADOResult()
    {
      return $this->StatesGetADOResult;
    }

    /**
     * @param StatesGetADOResult $StatesGetADOResult
     * @return StatesGetADOResponse
     */
    public function setStatesGetADOResult($StatesGetADOResult)
    {
      $this->StatesGetADOResult = $StatesGetADOResult;
      return $this;
    }

}
