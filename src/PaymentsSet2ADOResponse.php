<?php

class PaymentsSet2ADOResponse
{

    /**
     * @var PaymentsSet2ADOResult $PaymentsSet2ADOResult
     */
    protected $PaymentsSet2ADOResult = null;

    /**
     * @param PaymentsSet2ADOResult $PaymentsSet2ADOResult
     */
    public function __construct($PaymentsSet2ADOResult)
    {
      $this->PaymentsSet2ADOResult = $PaymentsSet2ADOResult;
    }

    /**
     * @return PaymentsSet2ADOResult
     */
    public function getPaymentsSet2ADOResult()
    {
      return $this->PaymentsSet2ADOResult;
    }

    /**
     * @param PaymentsSet2ADOResult $PaymentsSet2ADOResult
     * @return PaymentsSet2ADOResponse
     */
    public function setPaymentsSet2ADOResult($PaymentsSet2ADOResult)
    {
      $this->PaymentsSet2ADOResult = $PaymentsSet2ADOResult;
      return $this;
    }

}
