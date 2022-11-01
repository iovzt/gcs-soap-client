<?php

class StatesGetXMLResponse
{

    /**
     * @var StatesGetXMLResult $StatesGetXMLResult
     */
    protected $StatesGetXMLResult = null;

    /**
     * @param StatesGetXMLResult $StatesGetXMLResult
     */
    public function __construct($StatesGetXMLResult)
    {
      $this->StatesGetXMLResult = $StatesGetXMLResult;
    }

    /**
     * @return StatesGetXMLResult
     */
    public function getStatesGetXMLResult()
    {
      return $this->StatesGetXMLResult;
    }

    /**
     * @param StatesGetXMLResult $StatesGetXMLResult
     * @return StatesGetXMLResponse
     */
    public function setStatesGetXMLResult($StatesGetXMLResult)
    {
      $this->StatesGetXMLResult = $StatesGetXMLResult;
      return $this;
    }

}
