<?php

class NsfStatusGetXMLResponse
{

    /**
     * @var NsfStatusGetXMLResult $NsfStatusGetXMLResult
     */
    protected $NsfStatusGetXMLResult = null;

    /**
     * @param NsfStatusGetXMLResult $NsfStatusGetXMLResult
     */
    public function __construct($NsfStatusGetXMLResult)
    {
      $this->NsfStatusGetXMLResult = $NsfStatusGetXMLResult;
    }

    /**
     * @return NsfStatusGetXMLResult
     */
    public function getNsfStatusGetXMLResult()
    {
      return $this->NsfStatusGetXMLResult;
    }

    /**
     * @param NsfStatusGetXMLResult $NsfStatusGetXMLResult
     * @return NsfStatusGetXMLResponse
     */
    public function setNsfStatusGetXMLResult($NsfStatusGetXMLResult)
    {
      $this->NsfStatusGetXMLResult = $NsfStatusGetXMLResult;
      return $this;
    }

}
