<?php

class BankHolidaysGetADO
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
     * @var string $year
     */
    protected $year = null;

    /**
     * @param string $userName
     * @param string $password
     * @param string $year
     */
    public function __construct($userName, $password, $year)
    {
      $this->userName = $userName;
      $this->password = $password;
      $this->year = $year;
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
     * @return BankHolidaysGetADO
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
     * @return BankHolidaysGetADO
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getYear()
    {
      return $this->year;
    }

    /**
     * @param string $year
     * @return BankHolidaysGetADO
     */
    public function setYear($year)
    {
      $this->year = $year;
      return $this;
    }

}
