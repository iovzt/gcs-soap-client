<?php

class PolicyGroupsGetXMLResponse
{

    /**
     * @var PolicyGroupsGetXMLResult $PolicyGroupsGetXMLResult
     */
    protected $PolicyGroupsGetXMLResult = null;

    /**
     * @param PolicyGroupsGetXMLResult $PolicyGroupsGetXMLResult
     */
    public function __construct($PolicyGroupsGetXMLResult)
    {
      $this->PolicyGroupsGetXMLResult = $PolicyGroupsGetXMLResult;
    }

    /**
     * @return PolicyGroupsGetXMLResult
     */
    public function getPolicyGroupsGetXMLResult()
    {
      return $this->PolicyGroupsGetXMLResult;
    }

    /**
     * @param PolicyGroupsGetXMLResult $PolicyGroupsGetXMLResult
     * @return PolicyGroupsGetXMLResponse
     */
    public function setPolicyGroupsGetXMLResult($PolicyGroupsGetXMLResult)
    {
      $this->PolicyGroupsGetXMLResult = $PolicyGroupsGetXMLResult;
      return $this;
    }

}
