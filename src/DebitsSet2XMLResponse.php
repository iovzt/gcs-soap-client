<?php

class DebitsSet2XMLResponse
{

    /**
     * @var DebitsSet2XMLResult $DebitsSet2XMLResult
     */
    protected $DebitsSet2XMLResult = null;

    /**
     * @param DebitsSet2XMLResult $DebitsSet2XMLResult
     */
    public function __construct($DebitsSet2XMLResult)
    {
      $this->DebitsSet2XMLResult = $DebitsSet2XMLResult;
    }

    /**
     * @return DebitsSet2XMLResult
     */
    public function getDebitsSet2XMLResult()
    {
      return $this->DebitsSet2XMLResult;
    }

    /**
     * @param DebitsSet2XMLResult $DebitsSet2XMLResult
     * @return DebitsSet2XMLResponse
     */
    public function setDebitsSet2XMLResult($DebitsSet2XMLResult)
    {
      $this->DebitsSet2XMLResult = $DebitsSet2XMLResult;
      return $this;
    }

}
