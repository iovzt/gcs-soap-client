<?php

class PayeesSetADOResponse
{

    /**
     * @var PayeesSetADOResult $PayeesSetADOResult
     */
    protected $PayeesSetADOResult = null;

    /**
     * @param PayeesSetADOResult $PayeesSetADOResult
     */
    public function __construct($PayeesSetADOResult)
    {
      $this->PayeesSetADOResult = $PayeesSetADOResult;
    }

    /**
     * @return PayeesSetADOResult
     */
    public function getPayeesSetADOResult()
    {
      return $this->PayeesSetADOResult;
    }

    /**
     * @param PayeesSetADOResult $PayeesSetADOResult
     * @return PayeesSetADOResponse
     */
    public function setPayeesSetADOResult($PayeesSetADOResult)
    {
      $this->PayeesSetADOResult = $PayeesSetADOResult;
      return $this;
    }

}
