<?php

class RESET_ACKNOWLEDGE
{

    /**
     * @var int $RESET_ITEM_COUNT
     */
    protected $RESET_ITEM_COUNT = null;

    /**
     * @param int $RESET_ITEM_COUNT
     */
    public function __construct($RESET_ITEM_COUNT)
    {
      $this->RESET_ITEM_COUNT = $RESET_ITEM_COUNT;
    }

    /**
     * @return int
     */
    public function getRESET_ITEM_COUNT()
    {
      return $this->RESET_ITEM_COUNT;
    }

    /**
     * @param int $RESET_ITEM_COUNT
     * @return RESET_ACKNOWLEDGE
     */
    public function setRESET_ITEM_COUNT($RESET_ITEM_COUNT)
    {
      $this->RESET_ITEM_COUNT = $RESET_ITEM_COUNT;
      return $this;
    }

}
