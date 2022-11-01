<?php

class RppsResponse
{

    /**
     * @var string $RppsResponse
     */
    protected $RppsResponse = null;

    /**
     * @param string $RppsResponse
     */
    public function __construct($RppsResponse)
    {
      $this->RppsResponse = $RppsResponse;
    }

    /**
     * @return string
     */
    public function getRppsResponse()
    {
      return $this->RppsResponse;
    }

    /**
     * @param string $RppsResponse
     * @return RppsResponse
     */
    public function setRppsResponse($RppsResponse)
    {
      $this->RppsResponse = $RppsResponse;
      return $this;
    }

}
