<?php

class ChargesSetXMLResponse
{

    /**
     * @var ChargesSetXMLResult $ChargesSetXMLResult
     */
    protected $ChargesSetXMLResult = null;

    /**
     * @param ChargesSetXMLResult $ChargesSetXMLResult
     */
    public function __construct($ChargesSetXMLResult)
    {
      $this->ChargesSetXMLResult = $ChargesSetXMLResult;
    }

    /**
     * @return ChargesSetXMLResult
     */
    public function getChargesSetXMLResult()
    {
      return $this->ChargesSetXMLResult;
    }

    /**
     * @param ChargesSetXMLResult $ChargesSetXMLResult
     * @return ChargesSetXMLResponse
     */
    public function setChargesSetXMLResult($ChargesSetXMLResult)
    {
      $this->ChargesSetXMLResult = $ChargesSetXMLResult;
      return $this;
    }

}
