<?php

class paymentsDataADO
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return paymentsDataADO
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
