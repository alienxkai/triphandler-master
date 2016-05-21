<?php

namespace Platform\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="core_tag")
 * @ORM\Entity(repositoryClass="Platform\CoreBundle\Repository\TagRepository")
 */
class Tag
{
    /**
     * @var integer
     *
     * @ORM\Column(name="TAGID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagid;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME", type="string", length=128, nullable=true)
     */
    private $name;

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
     * Get tagid
     *
     * @return integer 
     */
    public function getTagid()
    {
        return $this->tagid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Tag
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set createdon
     *
     * @param \DateTime $createdon
     * @return Tag
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
     * @return Tag
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
     * @return Tag
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
     * @return Tag
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
