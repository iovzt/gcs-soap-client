<?php

class ClientDocuments
{

    /**
     * @var string $DOC_TYPE
     */
    protected $DOC_TYPE = null;

    /**
     * @var string $DOC_NAME
     */
    protected $DOC_NAME = null;

    /**
     * @var string $DOC_STATUS
     */
    protected $DOC_STATUS = null;

    /**
     * @var string $ACCOUNT_ID
     */
    protected $ACCOUNT_ID = null;

    /**
     * @var \DateTime $CREATED_DATE
     */
    protected $CREATED_DATE = null;

    /**
     * @var \DateTime $MODIFIED_DATE
     */
    protected $MODIFIED_DATE = null;

    /**
     * @var string $TAGS
     */
    protected $TAGS = null;

    /**
     * @var \DateTime $LAST_VIEWED_DATE
     */
    protected $LAST_VIEWED_DATE = null;

    /**
     * @param string $DOC_TYPE
     * @param string $DOC_NAME
     * @param string $DOC_STATUS
     * @param string $ACCOUNT_ID
     * @param \DateTime $CREATED_DATE
     * @param \DateTime $MODIFIED_DATE
     * @param string $TAGS
     * @param \DateTime $LAST_VIEWED_DATE
     */
    public function __construct($DOC_TYPE, $DOC_NAME, $DOC_STATUS, $ACCOUNT_ID, \DateTime $CREATED_DATE, \DateTime $MODIFIED_DATE, $TAGS, \DateTime $LAST_VIEWED_DATE)
    {
      $this->DOC_TYPE = $DOC_TYPE;
      $this->DOC_NAME = $DOC_NAME;
      $this->DOC_STATUS = $DOC_STATUS;
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      $this->CREATED_DATE = $CREATED_DATE->format(\DateTime::ATOM);
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
      $this->TAGS = $TAGS;
      $this->LAST_VIEWED_DATE = $LAST_VIEWED_DATE->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getDOC_TYPE()
    {
      return $this->DOC_TYPE;
    }

    /**
     * @param string $DOC_TYPE
     * @return ClientDocuments
     */
    public function setDOC_TYPE($DOC_TYPE)
    {
      $this->DOC_TYPE = $DOC_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getDOC_NAME()
    {
      return $this->DOC_NAME;
    }

    /**
     * @param string $DOC_NAME
     * @return ClientDocuments
     */
    public function setDOC_NAME($DOC_NAME)
    {
      $this->DOC_NAME = $DOC_NAME;
      return $this;
    }

    /**
     * @return string
     */
    public function getDOC_STATUS()
    {
      return $this->DOC_STATUS;
    }

    /**
     * @param string $DOC_STATUS
     * @return ClientDocuments
     */
    public function setDOC_STATUS($DOC_STATUS)
    {
      $this->DOC_STATUS = $DOC_STATUS;
      return $this;
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
     * @return ClientDocuments
     */
    public function setACCOUNT_ID($ACCOUNT_ID)
    {
      $this->ACCOUNT_ID = $ACCOUNT_ID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCREATED_DATE()
    {
      if ($this->CREATED_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CREATED_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CREATED_DATE
     * @return ClientDocuments
     */
    public function setCREATED_DATE(\DateTime $CREATED_DATE)
    {
      $this->CREATED_DATE = $CREATED_DATE->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMODIFIED_DATE()
    {
      if ($this->MODIFIED_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->MODIFIED_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $MODIFIED_DATE
     * @return ClientDocuments
     */
    public function setMODIFIED_DATE(\DateTime $MODIFIED_DATE)
    {
      $this->MODIFIED_DATE = $MODIFIED_DATE->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getTAGS()
    {
      return $this->TAGS;
    }

    /**
     * @param string $TAGS
     * @return ClientDocuments
     */
    public function setTAGS($TAGS)
    {
      $this->TAGS = $TAGS;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLAST_VIEWED_DATE()
    {
      if ($this->LAST_VIEWED_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LAST_VIEWED_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LAST_VIEWED_DATE
     * @return ClientDocuments
     */
    public function setLAST_VIEWED_DATE(\DateTime $LAST_VIEWED_DATE)
    {
      $this->LAST_VIEWED_DATE = $LAST_VIEWED_DATE->format(\DateTime::ATOM);
      return $this;
    }

}
