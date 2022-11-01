<?php

class CheckImagesIndicator
{

    /**
     * @var string $PaymentId
     */
    protected $PaymentId = null;

    /**
     * @var string $CanImageBeDisplayed
     */
    protected $CanImageBeDisplayed = null;

    /**
     * @param string $PaymentId
     * @param string $CanImageBeDisplayed
     */
    public function __construct($PaymentId, $CanImageBeDisplayed)
    {
      $this->PaymentId = $PaymentId;
      $this->CanImageBeDisplayed = $CanImageBeDisplayed;
    }

    /**
     * @return string
     */
    public function getPaymentId()
    {
      return $this->PaymentId;
    }

    /**
     * @param string $PaymentId
     * @return CheckImagesIndicator
     */
    public function setPaymentId($PaymentId)
    {
      $this->PaymentId = $PaymentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCanImageBeDisplayed()
    {
      return $this->CanImageBeDisplayed;
    }

    /**
     * @param string $CanImageBeDisplayed
     * @return CheckImagesIndicator
     */
    public function setCanImageBeDisplayed($CanImageBeDisplayed)
    {
      $this->CanImageBeDisplayed = $CanImageBeDisplayed;
      return $this;
    }

}
