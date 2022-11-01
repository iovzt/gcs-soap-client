<?php

class PhonePayImageWSDS
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
     * @return PhonePayImageWSDS
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
