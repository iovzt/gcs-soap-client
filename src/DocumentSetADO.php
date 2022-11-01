<?php

class DocumentSetADO
{

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $accountId
     */
    protected $accountId = null;

    /**
     * @var string $docType
     */
    protected $docType = null;

    /**
     * @var string $documentName
     */
    protected $documentName = null;

    /**
     * @var base64Binary $document
     */
    protected $document = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $accountId
     * @param string $docType
     * @param string $documentName
     * @param base64Binary $document
     */
    public function __construct($userName, $password, $accountId, $docType, $documentName, $document)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->accountId = $accountId;
      $this->docType = $docType;
      $this->documentName = $documentName;
      $this->document = $document;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->userName;
    }

    /**
     * @param string $userName
     * @return DocumentSetADO
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return DocumentSetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return DocumentSetADO
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocType()
    {
      return $this->docType;
    }

    /**
     * @param string $docType
     * @return DocumentSetADO
     */
    public function setDocType($docType)
    {
      $this->docType = $docType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentName()
    {
      return $this->documentName;
    }

    /**
     * @param string $documentName
     * @return DocumentSetADO
     */
    public function setDocumentName($documentName)
    {
      $this->documentName = $documentName;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getDocument()
    {
      return $this->document;
    }

    /**
     * @param base64Binary $document
     * @return DocumentSetADO
     */
    public function setDocument($document)
    {
      $this->document = $document;
      return $this;
    }

}
