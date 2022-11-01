<?php

class PaymentsSet2XMLResponse
{

    /**
     * @var PaymentsSet2XMLResult $PaymentsSet2XMLResult
     */
    protected $PaymentsSet2XMLResult = null;

    /**
     * @param PaymentsSet2XMLResult $PaymentsSet2XMLResult
     */
    public function __construct($PaymentsSet2XMLResult)
    {
      $this->PaymentsSet2XMLResult = $PaymentsSet2XMLResult;
    }

    /**
     * @return PaymentsSet2XMLResult
     */
    public function getPaymentsSet2XMLResult()
    {
      return $this->PaymentsSet2XMLResult;
    }

    /**
     * @param PaymentsSet2XMLResult $PaymentsSet2XMLResult
     * @return PaymentsSet2XMLResponse
     */
    public function setPaymentsSet2XMLResult($PaymentsSet2XMLResult)
    {
      $this->PaymentsSet2XMLResult = $PaymentsSet2XMLResult;
      return $this;
    }

}
