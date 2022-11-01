<?php

class BanksGetADOResponse
{

    /**
     * @var BanksGetADOResult $BanksGetADOResult
     */
    protected $BanksGetADOResult = null;

    /**
     * @param BanksGetADOResult $BanksGetADOResult
     */
    public function __construct($BanksGetADOResult)
    {
      $this->BanksGetADOResult = $BanksGetADOResult;
    }

    /**
     * @return BanksGetADOResult
     */
    public function getBanksGetADOResult()
    {
      return $this->BanksGetADOResult;
    }

    /**
     * @param BanksGetADOResult $BanksGetADOResult
     * @return BanksGetADOResponse
     */
    public function setBanksGetADOResult($BanksGetADOResult)
    {
      $this->BanksGetADOResult = $BanksGetADOResult;
      return $this;
    }

}
