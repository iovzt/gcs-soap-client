<?php

class NextAccountGetXMLResponse
{

    /**
     * @var NextAccountGetXMLResult $NextAccountGetXMLResult
     */
    protected $NextAccountGetXMLResult = null;

    /**
     * @var int $numAccountsRemaining
     */
    protected $numAccountsRemaining = null;

    /**
     * @param NextAccountGetXMLResult $NextAccountGetXMLResult
     * @param int $numAccountsRemaining
     */
    public function __construct($NextAccountGetXMLResult, $numAccountsRemaining)
    {
      $this->NextAccountGetXMLResult = $NextAccountGetXMLResult;
      $this->numAccountsRemaining = $numAccountsRemaining;
    }

    /**
     * @return NextAccountGetXMLResult
     */
    public function getNextAccountGetXMLResult()
    {
      return $this->NextAccountGetXMLResult;
    }

    /**
     * @param NextAccountGetXMLResult $NextAccountGetXMLResult
     * @return NextAccountGetXMLResponse
     */
    public function setNextAccountGetXMLResult($NextAccountGetXMLResult)
    {
      $this->NextAccountGetXMLResult = $NextAccountGetXMLResult;
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
     * @return NextAccountGetXMLResponse
     */
    public function setNumAccountsRemaining($numAccountsRemaining)
    {
      $this->numAccountsRemaining = $numAccountsRemaining;
      return $this;
    }

}
