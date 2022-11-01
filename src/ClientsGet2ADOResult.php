<?php

class ClientsGet2ADOResult
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
     * @return ClientsGet2ADOResult
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
