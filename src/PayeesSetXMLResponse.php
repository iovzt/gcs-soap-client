<?php

class PayeesSetXMLResponse
{

    /**
     * @var PayeesSetXMLResult $PayeesSetXMLResult
     */
    protected $PayeesSetXMLResult = null;

    /**
     * @param PayeesSetXMLResult $PayeesSetXMLResult
     */
    public function __construct($PayeesSetXMLResult)
    {
      $this->PayeesSetXMLResult = $PayeesSetXMLResult;
    }

    /**
     * @return PayeesSetXMLResult
     */
    public function getPayeesSetXMLResult()
    {
      return $this->PayeesSetXMLResult;
    }

    /**
     * @param PayeesSetXMLResult $PayeesSetXMLResult
     * @return PayeesSetXMLResponse
     */
    public function setPayeesSetXMLResult($PayeesSetXMLResult)
    {
      $this->PayeesSetXMLResult = $PayeesSetXMLResult;
      return $this;
    }

}
