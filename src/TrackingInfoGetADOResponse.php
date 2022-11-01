<?php

class TrackingInfoGetADOResponse
{

    /**
     * @var TrackingInfoGetADOResult $TrackingInfoGetADOResult
     */
    protected $TrackingInfoGetADOResult = null;

    /**
     * @param TrackingInfoGetADOResult $TrackingInfoGetADOResult
     */
    public function __construct($TrackingInfoGetADOResult)
    {
      $this->TrackingInfoGetADOResult = $TrackingInfoGetADOResult;
    }

    /**
     * @return TrackingInfoGetADOResult
     */
    public function getTrackingInfoGetADOResult()
    {
      return $this->TrackingInfoGetADOResult;
    }

    /**
     * @param TrackingInfoGetADOResult $TrackingInfoGetADOResult
     * @return TrackingInfoGetADOResponse
     */
    public function setTrackingInfoGetADOResult($TrackingInfoGetADOResult)
    {
      $this->TrackingInfoGetADOResult = $TrackingInfoGetADOResult;
      return $this;
    }

}
