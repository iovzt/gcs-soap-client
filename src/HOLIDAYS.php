<?php

class HOLIDAYS
{

    /**
     * @var \DateTime $HOLIDAY_DATE
     */
    protected $HOLIDAY_DATE = null;

    /**
     * @var string $HOLIDAY_DESCRIPTION
     */
    protected $HOLIDAY_DESCRIPTION = null;

    /**
     * @param \DateTime $HOLIDAY_DATE
     * @param string $HOLIDAY_DESCRIPTION
     */
    public function __construct(\DateTime $HOLIDAY_DATE, $HOLIDAY_DESCRIPTION)
    {
      $this->HOLIDAY_DATE = $HOLIDAY_DATE->format(\DateTime::ATOM);
      $this->HOLIDAY_DESCRIPTION = $HOLIDAY_DESCRIPTION;
    }

    /**
     * @return \DateTime
     */
    public function getHOLIDAY_DATE()
    {
      if ($this->HOLIDAY_DATE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->HOLIDAY_DATE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $HOLIDAY_DATE
     * @return HOLIDAYS
     */
    public function setHOLIDAY_DATE(\DateTime $HOLIDAY_DATE)
    {
      $this->HOLIDAY_DATE = $HOLIDAY_DATE->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getHOLIDAY_DESCRIPTION()
    {
      return $this->HOLIDAY_DESCRIPTION;
    }

    /**
     * @param string $HOLIDAY_DESCRIPTION
     * @return HOLIDAYS
     */
    public function setHOLIDAY_DESCRIPTION($HOLIDAY_DESCRIPTION)
    {
      $this->HOLIDAY_DESCRIPTION = $HOLIDAY_DESCRIPTION;
      return $this;
    }

}
