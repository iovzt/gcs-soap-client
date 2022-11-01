<?php

class PaymentStatusDescriptionGetADOResponse
{

    /**
     * @var PaymentStatusDescriptionGetADOResult $PaymentStatusDescriptionGetADOResult
     */
    protected $PaymentStatusDescriptionGetADOResult = null;

    /**
     * @param PaymentStatusDescriptionGetADOResult $PaymentStatusDescriptionGetADOResult
     */
    public function __construct($PaymentStatusDescriptionGetADOResult)
    {
      $this->PaymentStatusDescriptionGetADOResult = $PaymentStatusDescriptionGetADOResult;
    }

    /**
     * @return PaymentStatusDescriptionGetADOResult
     */
    public function getPaymentStatusDescriptionGetADOResult()
    {
      return $this->PaymentStatusDescriptionGetADOResult;
    }

    /**
     * @param PaymentStatusDescriptionGetADOResult $PaymentStatusDescriptionGetADOResult
     * @return PaymentStatusDescriptionGetADOResponse
     */
    public function setPaymentStatusDescriptionGetADOResult($PaymentStatusDescriptionGetADOResult)
    {
      $this->PaymentStatusDescriptionGetADOResult = $PaymentStatusDescriptionGetADOResult;
      return $this;
    }

}
