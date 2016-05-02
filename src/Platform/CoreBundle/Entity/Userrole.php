<?php

namespace Platform\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userrole
 *
 * @ORM\Table(name="core_userrole")
 * @ORM\Entity
 */
class Userrole
{
    /**
     * @var integer
     *
     * @ORM\Column(name="USERROLEID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userroleid;

    /**
     * @var string
     *
     * @ORM\Column(name="USERROLENAME", type="string", length=50, nullable=true)
     */
    private $userrolename;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=20, nullable=true)
     */
    private $description;



    /**
     * Get userroleid
     *
     * @return integer 
     */
    public function getUserroleid()
    {
        return $this->userroleid;
    }

    /**
     * Set userrolename
     *
     * @param string $userrolename
     * @return Userrole
     */
    public function setUserrolename($userrolename)
    {
        $this->userrolename = $userrolename;

        return $this;
    }

    /**
     * Get userrolename
     *
     * @return string 
     */
    public function getUserrolename()
    {
        return $this->userrolename;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Userrole
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
