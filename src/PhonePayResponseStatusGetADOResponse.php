<?php

class PhonePayResponseStatusGetADOResponse
{

    /**
     * @var PhonePayResponseStatusGetADOResult $PhonePayResponseStatusGetADOResult
     */
    protected $PhonePayResponseStatusGetADOResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param PhonePayResponseStatusGetADOResult $PhonePayResponseStatusGetADOResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($PhonePayResponseStatusGetADOResult, $rowCount, $pageCount)
    {
      $this->PhonePayResponseStatusGetADOResult = $PhonePayResponseStatusGetADOResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return PhonePayResponseStatusGetADOResult
     */
    public function getPhonePayResponseStatusGetADOResult()
    {
      return $this->PhonePayResponseStatusGetADOResult;
    }

    /**
     * @param PhonePayResponseStatusGetADOResult $PhonePayResponseStatusGetADOResult
     * @return PhonePayResponseStatusGetADOResponse
     */
    public function setPhonePayResponseStatusGetADOResult($PhonePayResponseStatusGetADOResult)
    {
      $this->PhonePayResponseStatusGetADOResult = $PhonePayResponseStatusGetADOResult;
      return $this;
    }

    /**
     * @return int
     */
    public function getRowCount()
    {
      return $this->rowCount;
    }

    /**
     * @param int $rowCount
     * @return PhonePayResponseStatusGetADOResponse
     */
    public function setRowCount($rowCount)
    {
      $this->rowCount = $rowCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageCount()
    {
      return $this->pageCount;
    }

    /**
     * @param int $pageCount
     * @return PhonePayResponseStatusGetADOResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
