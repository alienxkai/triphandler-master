<?php

namespace Platform\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table(name="core_section", indexes={@ORM\Index(name="FK_ACCESSIBLE_POUR", columns={"USERROLEID"})})
 * @ORM\Entity
 */
class Section
{
    /**
     * @var integer
     *
     * @ORM\Column(name="SECTIONID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sectionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="USERROLEID", type="integer", nullable=false)
     */
    private $userroleid;

    /**
     * @var string
     *
     * @ORM\Column(name="SECTIONNAME", type="string", length=20, nullable=true)
     */
    private $sectionname;

    /**
     * @var string
     *
     * @ORM\Column(name="ICONE", type="string", length=20, nullable=true)
     */
    private $icone;

    /**
     * @var integer
     *
     * @ORM\Column(name="DISPLAYORDER", type="integer", nullable=true)
     */
    private $displayorder;



    /**
     * Get sectionid
     *
     * @return integer 
     */
    public function getSectionid()
    {
        return $this->sectionid;
    }

    /**
     * Set userroleid
     *
     * @param integer $userroleid
     * @return Section
     */
    public function setUserroleid($userroleid)
    {
        $this->userroleid = $userroleid;

        return $this;
    }

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
     * Set sectionname
     *
     * @param string $sectionname
     * @return Section
     */
    public function setSectionname($sectionname)
    {
        $this->sectionname = $sectionname;

        return $this;
    }

    /**
     * Get sectionname
     *
     * @return string 
     */
    public function getSectionname()
    {
        return $this->sectionname;
    }

    /**
     * Set icone
     *
     * @param string $icone
     * @return Section
     */
    public function setIcone($icone)
    {
        $this->icone = $icone;

        return $this;
    }

    /**
     * Get icone
     *
     * @return string 
     */
    public function getIcone()
    {
        return $this->icone;
    }

    /**
     * Set displayorder
     *
     * @param integer $displayorder
     * @return Section
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;

        return $this;
    }

    /**
     * Get displayorder
     *
     * @return integer 
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }
}
