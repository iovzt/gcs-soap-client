<?php

class DocumentSetADOResponse
{

    /**
     * @var DocumentSetADOResult $DocumentSetADOResult
     */
    protected $DocumentSetADOResult = null;

    /**
     * @param DocumentSetADOResult $DocumentSetADOResult
     */
    public function __construct($DocumentSetADOResult)
    {
      $this->DocumentSetADOResult = $DocumentSetADOResult;
    }

    /**
     * @return DocumentSetADOResult
     */
    public function getDocumentSetADOResult()
    {
      return $this->DocumentSetADOResult;
    }

    /**
     * @param DocumentSetADOResult $DocumentSetADOResult
     * @return DocumentSetADOResponse
     */
    public function setDocumentSetADOResult($DocumentSetADOResult)
    {
      $this->DocumentSetADOResult = $DocumentSetADOResult;
      return $this;
    }

}
