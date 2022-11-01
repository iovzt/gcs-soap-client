<?php

class BAVCompanyInquiryParmeters
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
     * @var string $FromDateLte
     */
    protected $FromDateLte = null;

    /**
     * @var string $FromDateGte
     */
    protected $FromDateGte = null;

    /**
     * @var string $ThruDateLte
     */
    protected $ThruDateLte = null;

    /**
     * @var string $ThruDateGte
     */
    protected $ThruDateGte = null;

    /**
     * @var string $CreatedDateLte
     */
    protected $CreatedDateLte = null;

    /**
     * @var string $CreatedDateGte
     */
    protected $CreatedDateGte = null;

    /**
     * @var string $ModifiedDateLte
     */
    protected $ModifiedDateLte = null;

    /**
     * @var string $ModifiedDateGte
     */
    protected $ModifiedDateGte = null;

    
    public function __construct()
    {
    
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
     * @return BAVCompanyInquiryParmeters
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
     * @return BAVCompanyInquiryParmeters
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
     * @return BAVCompanyInquiryParmeters
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
     * @return BAVCompanyInquiryParmeters
     */
    public function setVerificationStatusTypeDesc($VerificationStatusTypeDesc)
    {
      $this->VerificationStatusTypeDesc = $VerificationStatusTypeDesc;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromDateLte()
    {
      return $this->FromDateLte;
    }

    /**
     * @param string $FromDateLte
     * @return BAVCompanyInquiryParmeters
     */
    public function setFromDateLte($FromDateLte)
    {
      $this->FromDateLte = $FromDateLte;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromDateGte()
    {
      return $this->FromDateGte;
    }

    /**
     * @param string $FromDateGte
     * @return BAVCompanyInquiryParmeters
     */
    public function setFromDateGte($FromDateGte)
    {
      $this->FromDateGte = $FromDateGte;
      return $this;
    }

    /**
     * @return string
     */
    public function getThruDateLte()
    {
      return $this->ThruDateLte;
    }

    /**
     * @param string $ThruDateLte
     * @return BAVCompanyInquiryParmeters
     */
    public function setThruDateLte($ThruDateLte)
    {
      $this->ThruDateLte = $ThruDateLte;
      return $this;
    }

    /**
     * @return string
     */
    public function getThruDateGte()
    {
      return $this->ThruDateGte;
    }

    /**
     * @param string $ThruDateGte
     * @return BAVCompanyInquiryParmeters
     */
    public function setThruDateGte($ThruDateGte)
    {
      $this->ThruDateGte = $ThruDateGte;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDateLte()
    {
      return $this->CreatedDateLte;
    }

    /**
     * @param string $CreatedDateLte
     * @return BAVCompanyInquiryParmeters
     */
    public function setCreatedDateLte($CreatedDateLte)
    {
      $this->CreatedDateLte = $CreatedDateLte;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDateGte()
    {
      return $this->CreatedDateGte;
    }

    /**
     * @param string $CreatedDateGte
     * @return BAVCompanyInquiryParmeters
     */
    public function setCreatedDateGte($CreatedDateGte)
    {
      $this->CreatedDateGte = $CreatedDateGte;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDateLte()
    {
      return $this->ModifiedDateLte;
    }

    /**
     * @param string $ModifiedDateLte
     * @return BAVCompanyInquiryParmeters
     */
    public function setModifiedDateLte($ModifiedDateLte)
    {
      $this->ModifiedDateLte = $ModifiedDateLte;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDateGte()
    {
      return $this->ModifiedDateGte;
    }

    /**
     * @param string $ModifiedDateGte
     * @return BAVCompanyInquiryParmeters
     */
    public function setModifiedDateGte($ModifiedDateGte)
    {
      $this->ModifiedDateGte = $ModifiedDateGte;
      return $this;
    }

}
