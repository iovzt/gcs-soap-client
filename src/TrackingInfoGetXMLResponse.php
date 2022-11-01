<?php

class TrackingInfoGetXMLResponse
{

    /**
     * @var TrackingInfoGetXMLResult $TrackingInfoGetXMLResult
     */
    protected $TrackingInfoGetXMLResult = null;

    /**
     * @param TrackingInfoGetXMLResult $TrackingInfoGetXMLResult
     */
    public function __construct($TrackingInfoGetXMLResult)
    {
      $this->TrackingInfoGetXMLResult = $TrackingInfoGetXMLResult;
    }

    /**
     * @return TrackingInfoGetXMLResult
     */
    public function getTrackingInfoGetXMLResult()
    {
      return $this->TrackingInfoGetXMLResult;
    }

    /**
     * @param TrackingInfoGetXMLResult $TrackingInfoGetXMLResult
     * @return TrackingInfoGetXMLResponse
     */
    public function setTrackingInfoGetXMLResult($TrackingInfoGetXMLResult)
    {
      $this->TrackingInfoGetXMLResult = $TrackingInfoGetXMLResult;
      return $this;
    }

}
