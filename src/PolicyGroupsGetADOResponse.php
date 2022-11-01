<?php

class PolicyGroupsGetADOResponse
{

    /**
     * @var PolicyGroupsGetADOResult $PolicyGroupsGetADOResult
     */
    protected $PolicyGroupsGetADOResult = null;

    /**
     * @param PolicyGroupsGetADOResult $PolicyGroupsGetADOResult
     */
    public function __construct($PolicyGroupsGetADOResult)
    {
      $this->PolicyGroupsGetADOResult = $PolicyGroupsGetADOResult;
    }

    /**
     * @return PolicyGroupsGetADOResult
     */
    public function getPolicyGroupsGetADOResult()
    {
      return $this->PolicyGroupsGetADOResult;
    }

    /**
     * @param PolicyGroupsGetADOResult $PolicyGroupsGetADOResult
     * @return PolicyGroupsGetADOResponse
     */
    public function setPolicyGroupsGetADOResult($PolicyGroupsGetADOResult)
    {
      $this->PolicyGroupsGetADOResult = $PolicyGroupsGetADOResult;
      return $this;
    }

}
