<?php

class NsfStatusGetADOResponse
{

    /**
     * @var NsfStatusGetADOResult $NsfStatusGetADOResult
     */
    protected $NsfStatusGetADOResult = null;

    /**
     * @param NsfStatusGetADOResult $NsfStatusGetADOResult
     */
    public function __construct($NsfStatusGetADOResult)
    {
      $this->NsfStatusGetADOResult = $NsfStatusGetADOResult;
    }

    /**
     * @return NsfStatusGetADOResult
     */
    public function getNsfStatusGetADOResult()
    {
      return $this->NsfStatusGetADOResult;
    }

    /**
     * @param NsfStatusGetADOResult $NsfStatusGetADOResult
     * @return NsfStatusGetADOResponse
     */
    public function setNsfStatusGetADOResult($NsfStatusGetADOResult)
    {
      $this->NsfStatusGetADOResult = $NsfStatusGetADOResult;
      return $this;
    }

}
