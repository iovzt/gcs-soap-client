<?php

class ChargesDebitsLinkWSDS
{

    /**
     * @var ERRORS $ERRORS
     */
    protected $ERRORS = null;

    /**
     * @var META_INFO $META_INFO
     */
    protected $META_INFO = null;

    /**
     * @var CHARGES_DEBITS_LINK $CHARGES_DEBITS_LINK
     */
    protected $CHARGES_DEBITS_LINK = null;

    /**
     * @param ERRORS $ERRORS
     * @param META_INFO $META_INFO
     * @param CHARGES_DEBITS_LINK $CHARGES_DEBITS_LINK
     */
    public function __construct($ERRORS, $META_INFO, $CHARGES_DEBITS_LINK)
    {
      $this->ERRORS = $ERRORS;
      $this->META_INFO = $META_INFO;
      $this->CHARGES_DEBITS_LINK = $CHARGES_DEBITS_LINK;
    }

    /**
     * @return ERRORS
     */
    public function getERRORS()
    {
      return $this->ERRORS;
    }

    /**
     * @param ERRORS $ERRORS
     * @return ChargesDebitsLinkWSDS
     */
    public function setERRORS($ERRORS)
    {
      $this->ERRORS = $ERRORS;
      return $this;
    }

    /**
     * @return META_INFO
     */
    public function getMETA_INFO()
    {
      return $this->META_INFO;
    }

    /**
     * @param META_INFO $META_INFO
     * @return ChargesDebitsLinkWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

    /**
     * @return CHARGES_DEBITS_LINK
     */
    public function getCHARGES_DEBITS_LINK()
    {
      return $this->CHARGES_DEBITS_LINK;
    }

    /**
     * @param CHARGES_DEBITS_LINK $CHARGES_DEBITS_LINK
     * @return ChargesDebitsLinkWSDS
     */
    public function setCHARGES_DEBITS_LINK($CHARGES_DEBITS_LINK)
    {
      $this->CHARGES_DEBITS_LINK = $CHARGES_DEBITS_LINK;
      return $this;
    }

}
