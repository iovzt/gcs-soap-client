<?php

class paymentsNodeIn
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
     * @return paymentsNodeIn
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
