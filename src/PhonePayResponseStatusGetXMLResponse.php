<?php

class PhonePayResponseStatusGetXMLResponse
{

    /**
     * @var PhonePayResponseStatusGetXMLResult $PhonePayResponseStatusGetXMLResult
     */
    protected $PhonePayResponseStatusGetXMLResult = null;

    /**
     * @var int $rowCount
     */
    protected $rowCount = null;

    /**
     * @var int $pageCount
     */
    protected $pageCount = null;

    /**
     * @param PhonePayResponseStatusGetXMLResult $PhonePayResponseStatusGetXMLResult
     * @param int $rowCount
     * @param int $pageCount
     */
    public function __construct($PhonePayResponseStatusGetXMLResult, $rowCount, $pageCount)
    {
      $this->PhonePayResponseStatusGetXMLResult = $PhonePayResponseStatusGetXMLResult;
      $this->rowCount = $rowCount;
      $this->pageCount = $pageCount;
    }

    /**
     * @return PhonePayResponseStatusGetXMLResult
     */
    public function getPhonePayResponseStatusGetXMLResult()
    {
      return $this->PhonePayResponseStatusGetXMLResult;
    }

    /**
     * @param PhonePayResponseStatusGetXMLResult $PhonePayResponseStatusGetXMLResult
     * @return PhonePayResponseStatusGetXMLResponse
     */
    public function setPhonePayResponseStatusGetXMLResult($PhonePayResponseStatusGetXMLResult)
    {
      $this->PhonePayResponseStatusGetXMLResult = $PhonePayResponseStatusGetXMLResult;
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
     * @return PhonePayResponseStatusGetXMLResponse
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
     * @return PhonePayResponseStatusGetXMLResponse
     */
    public function setPageCount($pageCount)
    {
      $this->pageCount = $pageCount;
      return $this;
    }

}
