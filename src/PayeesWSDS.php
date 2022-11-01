<?php

class PayeesWSDS
{

    /**
     * @var PAYEES $PAYEES
     */
    protected $PAYEES = null;

    /**
     * @var ADDRESSES $ADDRESSES
     */
    protected $ADDRESSES = null;

    /**
     * @var BANKS $BANKS
     */
    protected $BANKS = null;

    /**
     * @var CONTACTS $CONTACTS
     */
    protected $CONTACTS = null;

    /**
     * @var ERRORS $ERRORS
     */
    protected $ERRORS = null;

    /**
     * @var META_INFO $META_INFO
     */
    protected $META_INFO = null;

    /**
     * @param PAYEES $PAYEES
     * @param ADDRESSES $ADDRESSES
     * @param BANKS $BANKS
     * @param CONTACTS $CONTACTS
     * @param ERRORS $ERRORS
     * @param META_INFO $META_INFO
     */
    public function __construct($PAYEES, $ADDRESSES, $BANKS, $CONTACTS, $ERRORS, $META_INFO)
    {
      $this->PAYEES = $PAYEES;
      $this->ADDRESSES = $ADDRESSES;
      $this->BANKS = $BANKS;
      $this->CONTACTS = $CONTACTS;
      $this->ERRORS = $ERRORS;
      $this->META_INFO = $META_INFO;
    }

    /**
     * @return PAYEES
     */
    public function getPAYEES()
    {
      return $this->PAYEES;
    }

    /**
     * @param PAYEES $PAYEES
     * @return PayeesWSDS
     */
    public function setPAYEES($PAYEES)
    {
      $this->PAYEES = $PAYEES;
      return $this;
    }

    /**
     * @return ADDRESSES
     */
    public function getADDRESSES()
    {
      return $this->ADDRESSES;
    }

    /**
     * @param ADDRESSES $ADDRESSES
     * @return PayeesWSDS
     */
    public function setADDRESSES($ADDRESSES)
    {
      $this->ADDRESSES = $ADDRESSES;
      return $this;
    }

    /**
     * @return BANKS
     */
    public function getBANKS()
    {
      return $this->BANKS;
    }

    /**
     * @param BANKS $BANKS
     * @return PayeesWSDS
     */
    public function setBANKS($BANKS)
    {
      $this->BANKS = $BANKS;
      return $this;
    }

    /**
     * @return CONTACTS
     */
    public function getCONTACTS()
    {
      return $this->CONTACTS;
    }

    /**
     * @param CONTACTS $CONTACTS
     * @return PayeesWSDS
     */
    public function setCONTACTS($CONTACTS)
    {
      $this->CONTACTS = $CONTACTS;
      return $this;
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
     * @return PayeesWSDS
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
     * @return PayeesWSDS
     */
    public function setMETA_INFO($META_INFO)
    {
      $this->META_INFO = $META_INFO;
      return $this;
    }

}
