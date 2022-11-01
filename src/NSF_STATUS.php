<?php

class NSF_STATUS
{

    /**
     * @var string $NSF_STATUS
     */
    protected $NSF_STATUS = null;

    /**
     * @var string $NSF_STATUS_DESCRIPTION
     */
    protected $NSF_STATUS_DESCRIPTION = null;

    /**
     * @param string $NSF_STATUS
     * @param string $NSF_STATUS_DESCRIPTION
     */
    public function __construct($NSF_STATUS, $NSF_STATUS_DESCRIPTION)
    {
      $this->NSF_STATUS = $NSF_STATUS;
      $this->NSF_STATUS_DESCRIPTION = $NSF_STATUS_DESCRIPTION;
    }

    /**
     * @return string
     */
    public function getNSF_STATUS()
    {
      return $this->NSF_STATUS;
    }

    /**
     * @param string $NSF_STATUS
     * @return NSF_STATUS
     */
    public function setNSF_STATUS($NSF_STATUS)
    {
      $this->NSF_STATUS = $NSF_STATUS;
      return $this;
    }

    /**
     * @return string
     */
    public function getNSF_STATUS_DESCRIPTION()
    {
      return $this->NSF_STATUS_DESCRIPTION;
    }

    /**
     * @param string $NSF_STATUS_DESCRIPTION
     * @return NSF_STATUS
     */
    public function setNSF_STATUS_DESCRIPTION($NSF_STATUS_DESCRIPTION)
    {
      $this->NSF_STATUS_DESCRIPTION = $NSF_STATUS_DESCRIPTION;
      return $this;
    }

}
