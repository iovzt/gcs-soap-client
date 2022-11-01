<?php

class ClientStatementGetResponse
{

    /**
     * @var base64Binary $ClientStatementGetResult
     */
    protected $ClientStatementGetResult = null;

    /**
     * @param base64Binary $ClientStatementGetResult
     */
    public function __construct($ClientStatementGetResult)
    {
      $this->ClientStatementGetResult = $ClientStatementGetResult;
    }

    /**
     * @return base64Binary
     */
    public function getClientStatementGetResult()
    {
      return $this->ClientStatementGetResult;
    }

    /**
     * @param base64Binary $ClientStatementGetResult
     * @return ClientStatementGetResponse
     */
    public function setClientStatementGetResult($ClientStatementGetResult)
    {
      $this->ClientStatementGetResult = $ClientStatementGetResult;
      return $this;
    }

}
