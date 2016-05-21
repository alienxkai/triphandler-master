<?php

namespace Platform\EditorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Platform\CoreBundle\Entity\Media;

/**
 * EditorialBanner
 *
 * @ORM\Table(name="editorial_banner", indexes={@ORM\Index(name="FK_IMAGE_BANNER", columns={"MEDIAID"})})
 * @ORM\Entity
 */
class Banner
{
    /**
     * @var integer
     *
     * @ORM\Column(name="BANNERID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bannerid;

    /**
     * @var Media
     *
     * @ORM\ManyToOne(targetEntity="Platform\CoreBundle\Entity\Media")
     * @ORM\JoinColumn(name="MEDIAID", referencedColumnName="MEDIAID", nullable=true);
     */
    private $mediaid;

    /**
     * @var string
     *
     * @ORM\Column(name="TITLE", type="string", length=128, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=256, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDON", type="datetime", nullable=true)
     */
    private $createdon;

    /**
     * @var integer
     *
     * @ORM\Column(name="CREATEBY", type="integer", nullable=true)
     */
    private $createby;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UPDATEDON", type="datetime", nullable=true)
     */
    private $updatedon;

    /**
     * @var integer
     *
     * @ORM\Column(name="UPDATEDBY", type="integer", nullable=true)
     */
    private $updatedby;


    public function __construct()
    {
        $this->createdon = new \DateTime();
    }

    /**
     * Get bannerid
     *
     * @return integer 
     */
    public function getBannerid()
    {
        return $this->bannerid;
    }

    /**
     * Set mediaid
     *
     * @param Media $mediaid
     * @return Banner
     */
    public function setMediaid($mediaid)
    {
        $this->mediaid = $mediaid;

        return $this;
    }

    /**
     * Get mediaid
     *
     * @return Media
     */
    public function getMediaid()
    {
        return $this->mediaid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Banner
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Banner
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

    /**
     * Set createdon
     *
     * @param \DateTime $createdon
     * @return Banner
     */
    public function setCreatedon($createdon)
    {
        $this->createdon = $createdon;

        return $this;
    }

    /**
     * Get createdon
     *
     * @return \DateTime 
     */
    public function getCreatedon()
    {
        return $this->createdon;
    }

    /**
     * Set createby
     *
     * @param integer $createby
     * @return Banner
     */
    public function setCreateby($createby)
    {
        $this->createby = $createby;

        return $this;
    }

    /**
     * Get createby
     *
     * @return integer 
     */
    public function getCreateby()
    {
        return $this->createby;
    }

    /**
     * Set updatedon
     *
     * @param \DateTime $updatedon
     * @return Banner
     */
    public function setUpdatedon($updatedon)
    {
        $this->updatedon = $updatedon;

        return $this;
    }

    /**
     * Get updatedon
     *
     * @return \DateTime 
     */
    public function getUpdatedon()
    {
        return $this->updatedon;
    }

    /**
     * Set updatedby
     *
     * @param integer $updatedby
     * @return Banner
     */
    public function setUpdatedby($updatedby)
    {
        $this->updatedby = $updatedby;

        return $this;
    }

    /**
     * Get updatedby
     *
     * @return integer 
     */
    public function getUpdatedby()
    {
        return $this->updatedby;
    }
}
