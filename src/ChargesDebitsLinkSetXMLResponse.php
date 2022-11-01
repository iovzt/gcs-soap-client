<?php

class ChargesDebitsLinkSetXMLResponse
{

    /**
     * @var ChargesDebitsLinkSetXMLResult $ChargesDebitsLinkSetXMLResult
     */
    protected $ChargesDebitsLinkSetXMLResult = null;

    /**
     * @param ChargesDebitsLinkSetXMLResult $ChargesDebitsLinkSetXMLResult
     */
    public function __construct($ChargesDebitsLinkSetXMLResult)
    {
      $this->ChargesDebitsLinkSetXMLResult = $ChargesDebitsLinkSetXMLResult;
    }

    /**
     * @return ChargesDebitsLinkSetXMLResult
     */
    public function getChargesDebitsLinkSetXMLResult()
    {
      return $this->ChargesDebitsLinkSetXMLResult;
    }

    /**
     * @param ChargesDebitsLinkSetXMLResult $ChargesDebitsLinkSetXMLResult
     * @return ChargesDebitsLinkSetXMLResponse
     */
    public function setChargesDebitsLinkSetXMLResult($ChargesDebitsLinkSetXMLResult)
    {
      $this->ChargesDebitsLinkSetXMLResult = $ChargesDebitsLinkSetXMLResult;
      return $this;
    }

}
