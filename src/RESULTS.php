<?php

class RESULTS
{

    /**
     * @var string $PASSED_VALIDATION
     */
    protected $PASSED_VALIDATION = null;

    /**
     * @var string $DOCUMENT_LIST
     */
    protected $DOCUMENT_LIST = null;

    /**
     * @param string $PASSED_VALIDATION
     * @param string $DOCUMENT_LIST
     */
    public function __construct($PASSED_VALIDATION, $DOCUMENT_LIST)
    {
      $this->PASSED_VALIDATION = $PASSED_VALIDATION;
      $this->DOCUMENT_LIST = $DOCUMENT_LIST;
    }

    /**
     * @return string
     */
    public function getPASSED_VALIDATION()
    {
      return $this->PASSED_VALIDATION;
    }

    /**
     * @param string $PASSED_VALIDATION
     * @return RESULTS
     */
    public function setPASSED_VALIDATION($PASSED_VALIDATION)
    {
      $this->PASSED_VALIDATION = $PASSED_VALIDATION;
      return $this;
    }

    /**
     * @return string
     */
    public function getDOCUMENT_LIST()
    {
      return $this->DOCUMENT_LIST;
    }

    /**
     * @param string $DOCUMENT_LIST
     * @return RESULTS
     */
    public function setDOCUMENT_LIST($DOCUMENT_LIST)
    {
      $this->DOCUMENT_LIST = $DOCUMENT_LIST;
      return $this;
    }

}
