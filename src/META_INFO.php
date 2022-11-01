<?php

class META_INFO
{

    /**
     * @var string $INFO_CLASS
     */
    protected $INFO_CLASS = null;

    /**
     * @var string $INFO_TYPE
     */
    protected $INFO_TYPE = null;

    /**
     * @var string $INFO_CODE
     */
    protected $INFO_CODE = null;

    /**
     * @var string $VALUE
     */
    protected $VALUE = null;

    /**
     * @param string $INFO_CLASS
     * @param string $INFO_TYPE
     * @param string $INFO_CODE
     * @param string $VALUE
     */
    public function __construct($INFO_CLASS, $INFO_TYPE, $INFO_CODE, $VALUE)
    {
      $this->INFO_CLASS = $INFO_CLASS;
      $this->INFO_TYPE = $INFO_TYPE;
      $this->INFO_CODE = $INFO_CODE;
      $this->VALUE = $VALUE;
    }

    /**
     * @return string
     */
    public function getINFO_CLASS()
    {
      return $this->INFO_CLASS;
    }

    /**
     * @param string $INFO_CLASS
     * @return META_INFO
     */
    public function setINFO_CLASS($INFO_CLASS)
    {
      $this->INFO_CLASS = $INFO_CLASS;
      return $this;
    }

    /**
     * @return string
     */
    public function getINFO_TYPE()
    {
      return $this->INFO_TYPE;
    }

    /**
     * @param string $INFO_TYPE
     * @return META_INFO
     */
    public function setINFO_TYPE($INFO_TYPE)
    {
      $this->INFO_TYPE = $INFO_TYPE;
      return $this;
    }

    /**
     * @return string
     */
    public function getINFO_CODE()
    {
      return $this->INFO_CODE;
    }

    /**
     * @param string $INFO_CODE
     * @return META_INFO
     */
    public function setINFO_CODE($INFO_CODE)
    {
      $this->INFO_CODE = $INFO_CODE;
      return $this;
    }

    /**
     * @return string
     */
    public function getVALUE()
    {
      return $this->VALUE;
    }

    /**
     * @param string $VALUE
     * @return META_INFO
     */
    public function setVALUE($VALUE)
    {
      $this->VALUE = $VALUE;
      return $this;
    }

}
