<?php

class NextAccountGetADOResponse
{

    /**
     * @var NextAccountGetADOResult $NextAccountGetADOResult
     */
    protected $NextAccountGetADOResult = null;

    /**
     * @var int $numAccountsRemaining
     */
    protected $numAccountsRemaining = null;

    /**
     * @param NextAccountGetADOResult $NextAccountGetADOResult
     * @param int $numAccountsRemaining
     */
    public function __construct($NextAccountGetADOResult, $numAccountsRemaining)
    {
      $this->NextAccountGetADOResult = $NextAccountGetADOResult;
      $this->numAccountsRemaining = $numAccountsRemaining;
    }

    /**
     * @return NextAccountGetADOResult
     */
    public function getNextAccountGetADOResult()
    {
      return $this->NextAccountGetADOResult;
    }

    /**
     * @param NextAccountGetADOResult $NextAccountGetADOResult
     * @return NextAccountGetADOResponse
     */
    public function setNextAccountGetADOResult($NextAccountGetADOResult)
    {
      $this->NextAccountGetADOResult = $NextAccountGetADOResult;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumAccountsRemaining()
    {
      return $this->numAccountsRemaining;
    }

    /**
     * @param int $numAccountsRemaining
     * @return NextAccountGetADOResponse
     */
    public function setNumAccountsRemaining($numAccountsRemaining)
    {
      $this->numAccountsRemaining = $numAccountsRemaining;
      return $this;
    }

}
