<?php

class IMAGE_DATA
{

    /**
     * @var string $EXCEPTION_ID
     */
    protected $EXCEPTION_ID = null;

    /**
     * @var base64Binary $BANK_ITEM_IMAGE
     */
    protected $BANK_ITEM_IMAGE = null;

    /**
     * @param string $EXCEPTION_ID
     * @param base64Binary $BANK_ITEM_IMAGE
     */
    public function __construct($EXCEPTION_ID, $BANK_ITEM_IMAGE)
    {
      $this->EXCEPTION_ID = $EXCEPTION_ID;
      $this->BANK_ITEM_IMAGE = $BANK_ITEM_IMAGE;
    }

    /**
     * @return string
     */
    public function getEXCEPTION_ID()
    {
      return $this->EXCEPTION_ID;
    }

    /**
     * @param string $EXCEPTION_ID
     * @return IMAGE_DATA
     */
    public function setEXCEPTION_ID($EXCEPTION_ID)
    {
      $this->EXCEPTION_ID = $EXCEPTION_ID;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getBANK_ITEM_IMAGE()
    {
      return $this->BANK_ITEM_IMAGE;
    }

    /**
     * @param base64Binary $BANK_ITEM_IMAGE
     * @return IMAGE_DATA
     */
    public function setBANK_ITEM_IMAGE($BANK_ITEM_IMAGE)
    {
      $this->BANK_ITEM_IMAGE = $BANK_ITEM_IMAGE;
      return $this;
    }

}
