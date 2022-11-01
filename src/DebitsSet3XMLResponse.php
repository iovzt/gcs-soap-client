<?php

class DebitsSet3XMLResponse
{

    /**
     * @var DebitsSet3XMLResult $DebitsSet3XMLResult
     */
    protected $DebitsSet3XMLResult = null;

    /**
     * @param DebitsSet3XMLResult $DebitsSet3XMLResult
     */
    public function __construct($DebitsSet3XMLResult)
    {
      $this->DebitsSet3XMLResult = $DebitsSet3XMLResult;
    }

    /**
     * @return DebitsSet3XMLResult
     */
    public function getDebitsSet3XMLResult()
    {
      return $this->DebitsSet3XMLResult;
    }

    /**
     * @param DebitsSet3XMLResult $DebitsSet3XMLResult
     * @return DebitsSet3XMLResponse
     */
    public function setDebitsSet3XMLResult($DebitsSet3XMLResult)
    {
      $this->DebitsSet3XMLResult = $DebitsSet3XMLResult;
      return $this;
    }

}
