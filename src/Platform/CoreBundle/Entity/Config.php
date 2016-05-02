<?php

namespace Platform\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Config
 *
 * @ORM\Table(name="core_config")
 * @ORM\Entity
 */
class Config
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CONFIGID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $configid;

    /**
     * @var string
     *
     * @ORM\Column(name="CONFIGKEY", type="string", length=50, nullable=true)
     */
    private $configkey;

    /**
     * @var string
     *
     * @ORM\Column(name="CONFIGVALUE", type="text", nullable=true)
     */
    private $configvalue;



    /**
     * Get configid
     *
     * @return integer 
     */
    public function getConfigid()
    {
        return $this->configid;
    }

    /**
     * Set configkey
     *
     * @param string $configkey
     * @return Config
     */
    public function setConfigkey($configkey)
    {
        $this->configkey = $configkey;

        return $this;
    }

    /**
     * Get configkey
     *
     * @return string 
     */
    public function getConfigkey()
    {
        return $this->configkey;
    }

    /**
     * Set configvalue
     *
     * @param string $configvalue
     * @return Config
     */
    public function setConfigvalue($configvalue)
    {
        $this->configvalue = $configvalue;

        return $this;
    }

    /**
     * Get configvalue
     *
     * @return string 
     */
    public function getConfigvalue()
    {
        return $this->configvalue;
    }
}
