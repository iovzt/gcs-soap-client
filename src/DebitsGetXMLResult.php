<?php

class DebitsGetXMLResult
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
     * @return DebitsGetXMLResult
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
