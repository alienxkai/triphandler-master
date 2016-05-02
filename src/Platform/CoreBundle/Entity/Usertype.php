<?php

namespace Platform\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usertype
 *
 * @ORM\Table(name="core_usertype")
 * @ORM\Entity
 */
class Usertype
{
    /**
     * @var integer
     *
     * @ORM\Column(name="USERTYPEID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $usertypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="USERTYPENAME", type="string", length=20, nullable=true)
     */
    private $usertypename;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=20, nullable=true)
     */
    private $description;



    /**
     * Get usertypeid
     *
     * @return integer 
     */
    public function getUsertypeid()
    {
        return $this->usertypeid;
    }

    /**
     * Set usertypename
     *
     * @param string $usertypename
     * @return Usertype
     */
    public function setUsertypename($usertypename)
    {
        $this->usertypename = $usertypename;

        return $this;
    }

    /**
     * Get usertypename
     *
     * @return string 
     */
    public function getUsertypename()
    {
        return $this->usertypename;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Usertype
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
