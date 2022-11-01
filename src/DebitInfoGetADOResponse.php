<?php

class DebitInfoGetADOResponse
{

    /**
     * @var DebitInfoGetADOResult $DebitInfoGetADOResult
     */
    protected $DebitInfoGetADOResult = null;

    /**
     * @param DebitInfoGetADOResult $DebitInfoGetADOResult
     */
    public function __construct($DebitInfoGetADOResult)
    {
      $this->DebitInfoGetADOResult = $DebitInfoGetADOResult;
    }

    /**
     * @return DebitInfoGetADOResult
     */
    public function getDebitInfoGetADOResult()
    {
      return $this->DebitInfoGetADOResult;
    }

    /**
     * @param DebitInfoGetADOResult $DebitInfoGetADOResult
     * @return DebitInfoGetADOResponse
     */
    public function setDebitInfoGetADOResult($DebitInfoGetADOResult)
    {
      $this->DebitInfoGetADOResult = $DebitInfoGetADOResult;
      return $this;
    }

}
