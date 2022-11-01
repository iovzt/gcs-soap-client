<?php

class PaymentsSetADOResponse
{

    /**
     * @var PaymentsSetADOResult $PaymentsSetADOResult
     */
    protected $PaymentsSetADOResult = null;

    /**
     * @param PaymentsSetADOResult $PaymentsSetADOResult
     */
    public function __construct($PaymentsSetADOResult)
    {
      $this->PaymentsSetADOResult = $PaymentsSetADOResult;
    }

    /**
     * @return PaymentsSetADOResult
     */
    public function getPaymentsSetADOResult()
    {
      return $this->PaymentsSetADOResult;
    }

    /**
     * @param PaymentsSetADOResult $PaymentsSetADOResult
     * @return PaymentsSetADOResponse
     */
    public function setPaymentsSetADOResult($PaymentsSetADOResult)
    {
      $this->PaymentsSetADOResult = $PaymentsSetADOResult;
      return $this;
    }

}
