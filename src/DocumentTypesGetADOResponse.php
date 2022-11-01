<?php

class DocumentTypesGetADOResponse
{

    /**
     * @var DocumentTypesGetADOResult $DocumentTypesGetADOResult
     */
    protected $DocumentTypesGetADOResult = null;

    /**
     * @param DocumentTypesGetADOResult $DocumentTypesGetADOResult
     */
    public function __construct($DocumentTypesGetADOResult)
    {
      $this->DocumentTypesGetADOResult = $DocumentTypesGetADOResult;
    }

    /**
     * @return DocumentTypesGetADOResult
     */
    public function getDocumentTypesGetADOResult()
    {
      return $this->DocumentTypesGetADOResult;
    }

    /**
     * @param DocumentTypesGetADOResult $DocumentTypesGetADOResult
     * @return DocumentTypesGetADOResponse
     */
    public function setDocumentTypesGetADOResult($DocumentTypesGetADOResult)
    {
      $this->DocumentTypesGetADOResult = $DocumentTypesGetADOResult;
      return $this;
    }

}
