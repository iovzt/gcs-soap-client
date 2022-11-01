<?php

class DocumentTypes
{

    /**
     * @var string $Doc_Type
     */
    protected $Doc_Type = null;

    /**
     * @var string $Doc_Type_Desc
     */
    protected $Doc_Type_Desc = null;

    /**
     * @param string $Doc_Type
     * @param string $Doc_Type_Desc
     */
    public function __construct($Doc_Type, $Doc_Type_Desc)
    {
      $this->Doc_Type = $Doc_Type;
      $this->Doc_Type_Desc = $Doc_Type_Desc;
    }

    /**
     * @return string
     */
    public function getDoc_Type()
    {
      return $this->Doc_Type;
    }

    /**
     * @param string $Doc_Type
     * @return DocumentTypes
     */
    public function setDoc_Type($Doc_Type)
    {
      $this->Doc_Type = $Doc_Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getDoc_Type_Desc()
    {
      return $this->Doc_Type_Desc;
    }

    /**
     * @param string $Doc_Type_Desc
     * @return DocumentTypes
     */
    public function setDoc_Type_Desc($Doc_Type_Desc)
    {
      $this->Doc_Type_Desc = $Doc_Type_Desc;
      return $this;
    }

}
