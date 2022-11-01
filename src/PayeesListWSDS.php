<?php

class PayeesListWSDS
{

    /**
     * @var PAYEES $PAYEES
     */
    protected $PAYEES = null;

    /**
     * @var ERRORS $ERRORS
     */
    protected $ERRORS = null;

    /**
     * @param PAYEES $PAYEES
     * @param ERRORS $ERRORS
     */
    public function __construct($PAYEES, $ERRORS)
    {
      $this->PAYEES = $PAYEES;
      $this->ERRORS = $ERRORS;
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
     * @return PayeesListWSDS
     */
    public function setPAYEES($PAYEES)
    {
      $this->PAYEES = $PAYEES;
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
     * @return PayeesListWSDS
     */
    public function setERRORS($ERRORS)
    {
      $this->ERRORS = $ERRORS;
      return $this;
    }

}
