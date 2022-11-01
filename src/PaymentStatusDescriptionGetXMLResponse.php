<?php

class PaymentStatusDescriptionGetXMLResponse
{

    /**
     * @var PaymentStatusDescriptionGetXMLResult $PaymentStatusDescriptionGetXMLResult
     */
    protected $PaymentStatusDescriptionGetXMLResult = null;

    /**
     * @param PaymentStatusDescriptionGetXMLResult $PaymentStatusDescriptionGetXMLResult
     */
    public function __construct($PaymentStatusDescriptionGetXMLResult)
    {
      $this->PaymentStatusDescriptionGetXMLResult = $PaymentStatusDescriptionGetXMLResult;
    }

    /**
     * @return PaymentStatusDescriptionGetXMLResult
     */
    public function getPaymentStatusDescriptionGetXMLResult()
    {
      return $this->PaymentStatusDescriptionGetXMLResult;
    }

    /**
     * @param PaymentStatusDescriptionGetXMLResult $PaymentStatusDescriptionGetXMLResult
     * @return PaymentStatusDescriptionGetXMLResponse
     */
    public function setPaymentStatusDescriptionGetXMLResult($PaymentStatusDescriptionGetXMLResult)
    {
      $this->PaymentStatusDescriptionGetXMLResult = $PaymentStatusDescriptionGetXMLResult;
      return $this;
    }

}
