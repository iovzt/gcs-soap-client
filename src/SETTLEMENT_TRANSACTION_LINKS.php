<?php

class SETTLEMENT_TRANSACTION_LINKS
{

    /**
     * @var string $SETTLEMENT_TRANSACTION_LINK_ID
     */
    protected $SETTLEMENT_TRANSACTION_LINK_ID = null;

    /**
     * @var string $SETTLEMENT_ID
     */
    protected $SETTLEMENT_ID = null;

    /**
     * @var string $SUPPORTING_ENTITY
     */
    protected $SUPPORTING_ENTITY = null;

    /**
     * @var string $ENTITY_ID_VALUE
     */
    protected $ENTITY_ID_VALUE = null;

    /**
     * @var string $CREATED_BY
     */
    protected $CREATED_BY = null;

    /**
     * @var string $CREATED_DATE
     */
    protected $CREATED_DATE = null;

    /**
     * @var string $MODIFIED_BY
     */
    protected $MODIFIED_BY = null;

    /**
     * @var string $MODIFIED_DATE
     */
    protected $MODIFIED_DATE = null;

    /**
     * @param string $SETTLEMENT_TRANSACTION_LINK_ID
     * @param string $SETTLEMENT_ID
     * @param string $SUPPORTING_ENTITY
     * @param string $ENTITY_ID_VALUE
     * @param string $CREATED_BY
     * @param string $CREATED_DATE
     * @param string $MODIFIED_BY
     * @param string $MODIFIED_DATE
     */
    public function __construct($SETTLEMENT_TRANSACTION_LINK_ID, $SETTLEMENT_ID, $SUPPORTING_ENTITY, $ENTITY_ID_VALUE, $CREATED_BY, $CREATED_DATE, $MODIFIED_BY, $MODIFIED_DATE)
    {
      $this->SETTLEMENT_TRANSACTION_LINK_ID = $SETTLEMENT_TRANSACTION_LINK_ID;
      $this->SETTLEMENT_ID = $SETTLEMENT_ID;
      $this->SUPPORTING_ENTITY = $SUPPORTING_ENTITY;
      $this->ENTITY_ID_VALUE = $ENTITY_ID_VALUE;
      $this->CREATED_BY = $CREATED_BY;
      $this->CREATED_DATE = $CREATED_DATE;
      $this->MODIFIED_BY = $MODIFIED_BY;
      $this->MODIFIED_DATE = $MODIFIED_DATE;
    }

    /**
     * @return string
     */
    public function getSETTLEMENT_TRANSACTION_LINK_ID()
    {
      return $this->SETTLEMENT_TRANSACTION_LINK_ID;
    }

    /**
     * @param string $SETTLEMENT_TRANSACTION_LINK_ID
     * @return SETTLEMENT_TRANSACTION_LINKS
     */
    public function setSETTLEMENT_TRANSACTION_LINK_ID($SETTLEMENT_TRANSACTION_LINK_ID)
    {
      $this->SETTLEMENT_TRANSACTION_LINK_ID = $SETTLEMENT_TRANSACTION_LINK_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSETTLEMENT_ID()
    {
      return $this->SETTLEMENT_ID;
    }

    /**
     * @param string $SETTLEMENT_ID
     * @return SETTLEMENT_TRANSACTION_LINKS
     */
    public function setSETTLEMENT_ID($SETTLEMENT_ID)
    {
      $this->SETTLEMENT_ID = $SETTLEMENT_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSUPPORTING_ENTITY()
    {
      return $this->SUPPORTING_ENTITY;
    }

    /**
     * @param string $SUPPORTING_ENTITY
     * @return SETTLEMENT_TRANSACTION_LINKS
     */
    public function setSUPPORTING_ENTITY($SUPPORTING_ENTITY)
    {
      $this->SUPPORTING_ENTITY = $SUPPORTING_ENTITY;
      return $this;
    }

    /**
     * @return string
     */
    public function getENTITY_ID_VALUE()
    {
      return $this->ENTITY_ID_VALUE;
    }

    /**
     * @param string $ENTITY_ID_VALUE
     * @return SETTLEMENT_TRANSACTION_LINKS
     */
    public function setENTITY_ID_VALUE($ENTITY_ID_VALUE)
    {
      $this->ENTITY_ID_VALUE = $ENTITY_ID_VALUE;
      return $this;
    }

    /**
     * @return string
     */
    public function getCREATED_BY()
    {
      return $this->CREATED_BY;
    }

    /**
     * @param string $CREATED_BY
     * @return SETTLEMENT_TRANSACTION_LINKS
     */
    public function setCREATED_BY($CREATED_BY)
    {
      $this->CREATED_BY = $CREATED_BY;
      return $this;
    }

    /**
     * @return string
     */
    public function getCREATED_DATE()
    {
      return $this->CREATED_DATE;
    }

    /**
     * @param string $CREATED_DATE
     * @return SETTLEMENT_TRANSACTION_LINKS
     */
    public function setCREATED_DATE($CREATED_DATE)
    {
      $this->CREATED_DATE = $CREATED_DATE;
      return $this;
    }

    /**
     * @return string
     */
    public function getMODIFIED_BY()
    {
      return $this->MODIFIED_BY;
    }

    /**
     * @param string $MODIFIED_BY
     * @return SETTLEMENT_TRANSACTION_LINKS
     */
    public function setMODIFIED_BY($MODIFIED_BY)
    {
      $this->MODIFIED_BY = $MODIFIED_BY;
      return $this;
    }

    /**
     * @return string
     */
    public function getMODIFIED_DATE()
    {
      return $this->MODIFIED_DATE;
    }

    /**
     * @param string $MODIFIED_DATE
     * @return SETTLEMENT_TRANSACTION_LINKS
     */
    public function setMODIFIED_DATE($MODIFIED_DATE)
    {
      $this->MODIFIED_DATE = $MODIFIED_DATE;
      return $this;
    }

}
