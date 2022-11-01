<?php

class CheckImageGetResponse
{

    /**
     * @var base64Binary $CheckImageGetResult
     */
    protected $CheckImageGetResult = null;

    /**
     * @param base64Binary $CheckImageGetResult
     */
    public function __construct($CheckImageGetResult)
    {
      $this->CheckImageGetResult = $CheckImageGetResult;
    }

    /**
     * @return base64Binary
     */
    public function getCheckImageGetResult()
    {
      return $this->CheckImageGetResult;
    }

    /**
     * @param base64Binary $CheckImageGetResult
     * @return CheckImageGetResponse
     */
    public function setCheckImageGetResult($CheckImageGetResult)
    {
      $this->CheckImageGetResult = $CheckImageGetResult;
      return $this;
    }

}
