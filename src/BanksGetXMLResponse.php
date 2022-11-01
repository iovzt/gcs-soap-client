<?php

class BanksGetXMLResponse
{

    /**
     * @var BanksGetXMLResult $BanksGetXMLResult
     */
    protected $BanksGetXMLResult = null;

    /**
     * @param BanksGetXMLResult $BanksGetXMLResult
     */
    public function __construct($BanksGetXMLResult)
    {
      $this->BanksGetXMLResult = $BanksGetXMLResult;
    }

    /**
     * @return BanksGetXMLResult
     */
    public function getBanksGetXMLResult()
    {
      return $this->BanksGetXMLResult;
    }

    /**
     * @param BanksGetXMLResult $BanksGetXMLResult
     * @return BanksGetXMLResponse
     */
    public function setBanksGetXMLResult($BanksGetXMLResult)
    {
      $this->BanksGetXMLResult = $BanksGetXMLResult;
      return $this;
    }

}
