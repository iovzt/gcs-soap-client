<?php

class DocumentTypesGetXMLResponse
{

    /**
     * @var DocumentTypesGetXMLResult $DocumentTypesGetXMLResult
     */
    protected $DocumentTypesGetXMLResult = null;

    /**
     * @param DocumentTypesGetXMLResult $DocumentTypesGetXMLResult
     */
    public function __construct($DocumentTypesGetXMLResult)
    {
      $this->DocumentTypesGetXMLResult = $DocumentTypesGetXMLResult;
    }

    /**
     * @return DocumentTypesGetXMLResult
     */
    public function getDocumentTypesGetXMLResult()
    {
      return $this->DocumentTypesGetXMLResult;
    }

    /**
     * @param DocumentTypesGetXMLResult $DocumentTypesGetXMLResult
     * @return DocumentTypesGetXMLResponse
     */
    public function setDocumentTypesGetXMLResult($DocumentTypesGetXMLResult)
    {
      $this->DocumentTypesGetXMLResult = $DocumentTypesGetXMLResult;
      return $this;
    }

}
