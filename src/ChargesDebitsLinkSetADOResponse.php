<?php

class ChargesDebitsLinkSetADOResponse
{

    /**
     * @var ChargesDebitsLinkSetADOResult $ChargesDebitsLinkSetADOResult
     */
    protected $ChargesDebitsLinkSetADOResult = null;

    /**
     * @param ChargesDebitsLinkSetADOResult $ChargesDebitsLinkSetADOResult
     */
    public function __construct($ChargesDebitsLinkSetADOResult)
    {
      $this->ChargesDebitsLinkSetADOResult = $ChargesDebitsLinkSetADOResult;
    }

    /**
     * @return ChargesDebitsLinkSetADOResult
     */
    public function getChargesDebitsLinkSetADOResult()
    {
      return $this->ChargesDebitsLinkSetADOResult;
    }

    /**
     * @param ChargesDebitsLinkSetADOResult $ChargesDebitsLinkSetADOResult
     * @return ChargesDebitsLinkSetADOResponse
     */
    public function setChargesDebitsLinkSetADOResult($ChargesDebitsLinkSetADOResult)
    {
      $this->ChargesDebitsLinkSetADOResult = $ChargesDebitsLinkSetADOResult;
      return $this;
    }

}
