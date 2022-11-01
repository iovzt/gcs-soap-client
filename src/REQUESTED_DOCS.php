<?php

class REQUESTED_DOCS
{

    /**
     * @var string $ACCOUNT_ID
     */
    protected $ACCOUNT_ID = null;

    /**
     * @var string $DOCUMENT_TYPE
     */
    protected $DOCUMENT_TYPE = null;

    /**
     * @var string $STATUS
     */
    protected $STATUS = null;

    /**
     * @param string $ACCOUNT_ID
     * @param string $DOCUMENT_TYPE
     * @param string $STATUS
     */
    public function __construct($ACCOUNT_ID, $DOCUMENT_TYPE, $STATUS)
    {
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      $this->DOCUMENT_TYPE = $DOCUMENT_TYPE;
      $this->STATUS = $STATUS;
    }

    /**
     * @return string
     */
    public function getACCOUNT_ID()
    {
      return $this->ACCOUNT_ID;
    }

    /**
     * @param string $ACCOUNT_ID
     * @return REQUESTED_DOCS
     */
    public function setACCOUNT_ID($ACCOUNT_ID)
    {
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDOCUMENT_TYPE()
    {
      return $this->DOCUMENT_TYPE;
    }

    /**
     * @param string $DOCUMENT_TYPE
     * @return REQUESTED_DOCS
     */
    public function setDOCUMENT_TYPE($DOCUMENT_TYPE)
    {
      $this->DOCUMENT_TYPE = $DOCUMENT_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getSTATUS()
    {
      return $this->STATUS;
    }

    /**
     * @param string $STATUS
     * @return REQUESTED_DOCS
     */
    public function setSTATUS($STATUS)
    {
      $this->STATUS = $STATUS;
      return $this;
    }

}
