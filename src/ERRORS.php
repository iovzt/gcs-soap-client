<?php

class ERRORS
{

    /**
     * @var float $ERROR_ID
     */
    protected $ERROR_ID = null;

    /**
     * @var string $TABLE_NAME
     */
    protected $TABLE_NAME = null;

    /**
     * @var string $TABLE_ID
     */
    protected $TABLE_ID = null;

    /**
     * @var float $ROW_ID
     */
    protected $ROW_ID = null;

    /**
     * @var string $COLUMN_ID
     */
    protected $COLUMN_ID = null;

    /**
     * @var string $ERROR_TYPE
     */
    protected $ERROR_TYPE = null;

    /**
     * @var string $ERROR_CODE
     */
    protected $ERROR_CODE = null;

    /**
     * @var string $ERROR_TEXT
     */
    protected $ERROR_TEXT = null;

    /**
     * @param float $ERROR_ID
     * @param string $TABLE_NAME
     * @param string $TABLE_ID
     * @param float $ROW_ID
     * @param string $COLUMN_ID
     * @param string $ERROR_TYPE
     * @param string $ERROR_CODE
     * @param string $ERROR_TEXT
     */
    public function __construct($ERROR_ID, $TABLE_NAME, $TABLE_ID, $ROW_ID, $COLUMN_ID, $ERROR_TYPE, $ERROR_CODE, $ERROR_TEXT)
    {
      $this->ERROR_ID = $ERROR_ID;
      $this->TABLE_NAME = $TABLE_NAME;
      $this->TABLE_ID = $TABLE_ID;
      $this->ROW_ID = $ROW_ID;
      $this->COLUMN_ID = $COLUMN_ID;
      $this->ERROR_TYPE = $ERROR_TYPE;
      $this->ERROR_CODE = $ERROR_CODE;
      $this->ERROR_TEXT = $ERROR_TEXT;
    }

    /**
     * @return float
     */
    public function getERROR_ID()
    {
      return $this->ERROR_ID;
    }

    /**
     * @param float $ERROR_ID
     * @return ERRORS
     */
    public function setERROR_ID($ERROR_ID)
    {
      $this->ERROR_ID = $ERROR_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTABLE_NAME()
    {
      return $this->TABLE_NAME;
    }

    /**
     * @param string $TABLE_NAME
     * @return ERRORS
     */
    public function setTABLE_NAME($TABLE_NAME)
    {
      $this->TABLE_NAME = $TABLE_NAME;
      return $this;
    }

    /**
     * @return string
     */
    public function getTABLE_ID()
    {
      return $this->TABLE_ID;
    }

    /**
     * @param string $TABLE_ID
     * @return ERRORS
     */
    public function setTABLE_ID($TABLE_ID)
    {
      $this->TABLE_ID = $TABLE_ID;
      return $this;
    }

    /**
     * @return float
     */
    public function getROW_ID()
    {
      return $this->ROW_ID;
    }

    /**
     * @param float $ROW_ID
     * @return ERRORS
     */
    public function setROW_ID($ROW_ID)
    {
      $this->ROW_ID = $ROW_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCOLUMN_ID()
    {
      return $this->COLUMN_ID;
    }

    /**
     * @param string $COLUMN_ID
     * @return ERRORS
     */
    public function setCOLUMN_ID($COLUMN_ID)
    {
      $this->COLUMN_ID = $COLUMN_ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getERROR_TYPE()
    {
      return $this->ERROR_TYPE;
    }

    /**
     * @param string $ERROR_TYPE
     * @return ERRORS
     */
    public function setERROR_TYPE($ERROR_TYPE)
    {
      $this->ERROR_TYPE = $ERROR_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getERROR_CODE()
    {
      return $this->ERROR_CODE;
    }

    /**
     * @param string $ERROR_CODE
     * @return ERRORS
     */
    public function setERROR_CODE($ERROR_CODE)
    {
      $this->ERROR_CODE = $ERROR_CODE;
      return $this;
    }

    /**
     * @return string
     */
    public function getERROR_TEXT()
    {
      return $this->ERROR_TEXT;
    }

    /**
     * @param string $ERROR_TEXT
     * @return ERRORS
     */
    public function setERROR_TEXT($ERROR_TEXT)
    {
      $this->ERROR_TEXT = $ERROR_TEXT;
      return $this;
    }

}
