<?php

class TRACKING_ACTIVITY
{

    /**
     * @var string $TRACKING_NUMBER
     */
    protected $TRACKING_NUMBER = null;

    /**
     * @var string $CARRIER
     */
    protected $CARRIER = null;

    /**
     * @var string $ACTIVITY_DATE
     */
    protected $ACTIVITY_DATE = null;

    /**
     * @var string $ACTIVITY
     */
    protected $ACTIVITY = null;

    /**
     * @param string $TRACKING_NUMBER
     * @param string $CARRIER
     * @param string $ACTIVITY_DATE
     * @param string $ACTIVITY
     */
    public function __construct($TRACKING_NUMBER, $CARRIER, $ACTIVITY_DATE, $ACTIVITY)
    {
      $this->TRACKING_NUMBER = $TRACKING_NUMBER;
      $this->CARRIER = $CARRIER;
      $this->ACTIVITY_DATE = $ACTIVITY_DATE;
      $this->ACTIVITY = $ACTIVITY;
    }

    /**
     * @return string
     */
    public function getTRACKING_NUMBER()
    {
      return $this->TRACKING_NUMBER;
    }

    /**
     * @param string $TRACKING_NUMBER
     * @return TRACKING_ACTIVITY
     */
    public function setTRACKING_NUMBER($TRACKING_NUMBER)
    {
      $this->TRACKING_NUMBER = $TRACKING_NUMBER;
      return $this;
    }

    /**
     * @return string
     */
    public function getCARRIER()
    {
      return $this->CARRIER;
    }

    /**
     * @param string $CARRIER
     * @return TRACKING_ACTIVITY
     */
    public function setCARRIER($CARRIER)
    {
      $this->CARRIER = $CARRIER;
      return $this;
    }

    /**
     * @return string
     */
    public function getACTIVITY_DATE()
    {
      return $this->ACTIVITY_DATE;
    }

    /**
     * @param string $ACTIVITY_DATE
     * @return TRACKING_ACTIVITY
     */
    public function setACTIVITY_DATE($ACTIVITY_DATE)
    {
      $this->ACTIVITY_DATE = $ACTIVITY_DATE;
      return $this;
    }

    /**
     * @return string
     */
    public function getACTIVITY()
    {
      return $this->ACTIVITY;
    }

    /**
     * @param string $ACTIVITY
     * @return TRACKING_ACTIVITY
     */
    public function setACTIVITY($ACTIVITY)
    {
      $this->ACTIVITY = $ACTIVITY;
      return $this;
    }

}
