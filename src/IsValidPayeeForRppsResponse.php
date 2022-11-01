<?php

class IsValidPayeeForRppsResponse
{

    /**
     * @var IsValidPayeeForRppsResult $IsValidPayeeForRppsResult
     */
    protected $IsValidPayeeForRppsResult = null;

    /**
     * @param IsValidPayeeForRppsResult $IsValidPayeeForRppsResult
     */
    public function __construct($IsValidPayeeForRppsResult)
    {
      $this->IsValidPayeeForRppsResult = $IsValidPayeeForRppsResult;
    }

    /**
     * @return IsValidPayeeForRppsResult
     */
    public function getIsValidPayeeForRppsResult()
    {
      return $this->IsValidPayeeForRppsResult;
    }

    /**
     * @param IsValidPayeeForRppsResult $IsValidPayeeForRppsResult
     * @return IsValidPayeeForRppsResponse
     */
    public function setIsValidPayeeForRppsResult($IsValidPayeeForRppsResult)
    {
      $this->IsValidPayeeForRppsResult = $IsValidPayeeForRppsResult;
      return $this;
    }

}
