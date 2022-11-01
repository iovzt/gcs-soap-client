<?php

class DocumentSetXMLResponse
{

    /**
     * @var DocumentSetXMLResult $DocumentSetXMLResult
     */
    protected $DocumentSetXMLResult = null;

    /**
     * @param DocumentSetXMLResult $DocumentSetXMLResult
     */
    public function __construct($DocumentSetXMLResult)
    {
      $this->DocumentSetXMLResult = $DocumentSetXMLResult;
    }

    /**
     * @return DocumentSetXMLResult
     */
    public function getDocumentSetXMLResult()
    {
      return $this->DocumentSetXMLResult;
    }

    /**
     * @param DocumentSetXMLResult $DocumentSetXMLResult
     * @return DocumentSetXMLResponse
     */
    public function setDocumentSetXMLResult($DocumentSetXMLResult)
    {
      $this->DocumentSetXMLResult = $DocumentSetXMLResult;
      return $this;
    }

}
