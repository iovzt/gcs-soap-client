<?php

class PaymentInfoGetADOResponse
{

    /**
     * @var PaymentInfoGetADOResult $PaymentInfoGetADOResult
     */
    protected $PaymentInfoGetADOResult = null;

    /**
     * @param PaymentInfoGetADOResult $PaymentInfoGetADOResult
     */
    public function __construct($PaymentInfoGetADOResult)
    {
      $this->PaymentInfoGetADOResult = $PaymentInfoGetADOResult;
    }

    /**
     * @return PaymentInfoGetADOResult
     */
    public function getPaymentInfoGetADOResult()
    {
      return $this->PaymentInfoGetADOResult;
    }

    /**
     * @param PaymentInfoGetADOResult $PaymentInfoGetADOResult
     * @return PaymentInfoGetADOResponse
     */
    public function setPaymentInfoGetADOResult($PaymentInfoGetADOResult)
    {
      $this->PaymentInfoGetADOResult = $PaymentInfoGetADOResult;
      return $this;
    }

}
