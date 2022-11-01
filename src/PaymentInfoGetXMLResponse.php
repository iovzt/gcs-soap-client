<?php

class PaymentInfoGetXMLResponse
{

    /**
     * @var PaymentInfoGetXMLResult $PaymentInfoGetXMLResult
     */
    protected $PaymentInfoGetXMLResult = null;

    /**
     * @param PaymentInfoGetXMLResult $PaymentInfoGetXMLResult
     */
    public function __construct($PaymentInfoGetXMLResult)
    {
      $this->PaymentInfoGetXMLResult = $PaymentInfoGetXMLResult;
    }

    /**
     * @return PaymentInfoGetXMLResult
     */
    public function getPaymentInfoGetXMLResult()
    {
      return $this->PaymentInfoGetXMLResult;
    }

    /**
     * @param PaymentInfoGetXMLResult $PaymentInfoGetXMLResult
     * @return PaymentInfoGetXMLResponse
     */
    public function setPaymentInfoGetXMLResult($PaymentInfoGetXMLResult)
    {
      $this->PaymentInfoGetXMLResult = $PaymentInfoGetXMLResult;
      return $this;
    }

}
