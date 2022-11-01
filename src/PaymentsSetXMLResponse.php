<?php

class PaymentsSetXMLResponse
{

    /**
     * @var PaymentsSetXMLResult $PaymentsSetXMLResult
     */
    protected $PaymentsSetXMLResult = null;

    /**
     * @param PaymentsSetXMLResult $PaymentsSetXMLResult
     */
    public function __construct($PaymentsSetXMLResult)
    {
      $this->PaymentsSetXMLResult = $PaymentsSetXMLResult;
    }

    /**
     * @return PaymentsSetXMLResult
     */
    public function getPaymentsSetXMLResult()
    {
      return $this->PaymentsSetXMLResult;
    }

    /**
     * @param PaymentsSetXMLResult $PaymentsSetXMLResult
     * @return PaymentsSetXMLResponse
     */
    public function setPaymentsSetXMLResult($PaymentsSetXMLResult)
    {
      $this->PaymentsSetXMLResult = $PaymentsSetXMLResult;
      return $this;
    }

}
