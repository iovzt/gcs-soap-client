<?php

class BAVClient
{

    /**
     * @var string $AccountId
     */
    protected $AccountId = null;

    /**
     * @var string $BankRoutingNumber
     */
    protected $BankRoutingNumber = null;

    /**
     * @var string $BankAccountNumber
     */
    protected $BankAccountNumber = null;

    /**
     * @var string $VerificationStatusTypeDesc
     */
    protected $VerificationStatusTypeDesc = null;

    /**
     * @var string $FromDate
     */
    protected $FromDate = null;

    /**
     * @var string $ThruDate
     */
    protected $ThruDate = null;

    /**
     * @var string $CreatedDate
     */
    protected $CreatedDate = null;

    /**
     * @var string $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var string $ReturnCode
     */
    protected $ReturnCode = null;

    /**
     * @var string $ReturnCodeDescription
     */
    protected $ReturnCodeDescription = null;

    /**
     * @param string $AccountId
     * @param string $BankRoutingNumber
     * @param string $BankAccountNumber
     * @param string $VerificationStatusTypeDesc
     * @param string $FromDate
     * @param string $ThruDate
     * @param string $CreatedDate
     * @param string $ModifiedDate
     * @param string $ReturnCode
     * @param string $ReturnCodeDescription
     */
    public function __construct($AccountId, $BankRoutingNumber, $BankAccountNumber, $VerificationStatusTypeDesc, $FromDate, $ThruDate, $CreatedDate, $ModifiedDate, $ReturnCode, $ReturnCodeDescription)
    {
      $this->AccountId = $AccountId;
      $this->BankRoutingNumber = $BankRoutingNumber;
      $this->BankAccountNumber = $BankAccountNumber;
      $this->VerificationStatusTypeDesc = $VerificationStatusTypeDesc;
      $this->FromDate = $FromDate;
      $this->ThruDate = $ThruDate;
      $this->CreatedDate = $CreatedDate;
      $this->ModifiedDate = $ModifiedDate;
      $this->ReturnCode = $ReturnCode;
      $this->ReturnCodeDescription = $ReturnCodeDescription;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
      return $this->AccountId;
    }

    /**
     * @param string $AccountId
     * @return BAVClient
     */
    public function setAccountId($AccountId)
    {
      $this->AccountId = $AccountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankRoutingNumber()
    {
      return $this->BankRoutingNumber;
    }

    /**
     * @param string $BankRoutingNumber
     * @return BAVClient
     */
    public function setBankRoutingNumber($BankRoutingNumber)
    {
      $this->BankRoutingNumber = $BankRoutingNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankAccountNumber()
    {
      return $this->BankAccountNumber;
    }

    /**
     * @param string $BankAccountNumber
     * @return BAVClient
     */
    public function setBankAccountNumber($BankAccountNumber)
    {
      $this->BankAccountNumber = $BankAccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getVerificationStatusTypeDesc()
    {
      return $this->VerificationStatusTypeDesc;
    }

    /**
     * @param string $VerificationStatusTypeDesc
     * @return BAVClient
     */
    public function setVerificationStatusTypeDesc($VerificationStatusTypeDesc)
    {
      $this->VerificationStatusTypeDesc = $VerificationStatusTypeDesc;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromDate()
    {
      return $this->FromDate;
    }

    /**
     * @param string $FromDate
     * @return BAVClient
     */
    public function setFromDate($FromDate)
    {
      $this->FromDate = $FromDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getThruDate()
    {
      return $this->ThruDate;
    }

    /**
     * @param string $ThruDate
     * @return BAVClient
     */
    public function setThruDate($ThruDate)
    {
      $this->ThruDate = $ThruDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate()
    {
      return $this->CreatedDate;
    }

    /**
     * @param string $CreatedDate
     * @return BAVClient
     */
    public function setCreatedDate($CreatedDate)
    {
      $this->CreatedDate = $CreatedDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDate()
    {
      return $this->ModifiedDate;
    }

    /**
     * @param string $ModifiedDate
     * @return BAVClient
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnCode()
    {
      return $this->ReturnCode;
    }

    /**
     * @param string $ReturnCode
     * @return BAVClient
     */
    public function setReturnCode($ReturnCode)
    {
      $this->ReturnCode = $ReturnCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnCodeDescription()
    {
      return $this->ReturnCodeDescription;
    }

    /**
     * @param string $ReturnCodeDescription
     * @return BAVClient
     */
    public function setReturnCodeDescription($ReturnCodeDescription)
    {
      $this->ReturnCodeDescription = $ReturnCodeDescription;
      return $this;
    }

}
