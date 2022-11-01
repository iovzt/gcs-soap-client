<?php

class DebitsInfoGetXMLResponse
{

    /**
     * @var DebitsInfoGetXMLResult $DebitsInfoGetXMLResult
     */
    protected $DebitsInfoGetXMLResult = null;

    /**
     * @param DebitsInfoGetXMLResult $DebitsInfoGetXMLResult
     */
    public function __construct($DebitsInfoGetXMLResult)
    {
      $this->DebitsInfoGetXMLResult = $DebitsInfoGetXMLResult;
    }

    /**
     * @return DebitsInfoGetXMLResult
     */
    public function getDebitsInfoGetXMLResult()
    {
      return $this->DebitsInfoGetXMLResult;
    }

    /**
     * @param DebitsInfoGetXMLResult $DebitsInfoGetXMLResult
     * @return DebitsInfoGetXMLResponse
     */
    public function setDebitsInfoGetXMLResult($DebitsInfoGetXMLResult)
    {
      $this->DebitsInfoGetXMLResult = $DebitsInfoGetXMLResult;
      return $this;
    }

}
