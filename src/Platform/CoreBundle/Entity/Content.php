<?php
/**
 * Created by PhpStorm.
 * User: mrajaona
 * Date: 5/7/2016
 * Time: 1:02 AM
 */

namespace Platform\CoreBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\InheritanceType;
use Doctrine\ORM\Mapping\DiscriminatorColumn;
use Doctrine\ORM\Mapping\DiscriminatorMap;

/**
 * Content
 *
 * @ORM\Table(name="core_content")
 * @ORM\Entity(repositoryClass="Platform\CoreBundle\Repository\ContentRepository")
 * @InheritanceType("JOINED")
 * @DiscriminatorColumn(name="CONTENTTYPEID", type="integer")
 * @DiscriminatorMap({
 *     "1" = "Platform\EditorialBundle\Entity\Article"
 * })
 */
abstract class Content
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CONTENTID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $contentid;

    /**
     * @var ContentType
     *
     * @ORM\ManyToOne(targetEntity="Platform\CoreBundle\Entity\ContentType")
     * @ORM\JoinColumn(name="CONTENTTYPEID", referencedColumnName="CONTENTTYPEID", nullable=true);
     */
    protected $contenttype;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEBY", type="string", length=20, nullable=false)
     */
    protected $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDON", type="datetime", nullable=false)
     */
    protected $createdOn;

    /**
     * @var string
     *
     * @ORM\Column(name="UPDATEDBY", type="string", length=20, nullable=true)
     */
    protected $updatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UPDATEDON", type="datetime", nullable=true)
     */
    protected $updatedOn;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=20, nullable=false)
     */
    protected $status;

    /**
     * @ORM\ManyToOne(targetEntity="Platform\CoreBundle\Entity\Site")
     * @ORM\JoinColumn(name="SITEID", referencedColumnName="SITEID", nullable=false);
     */
    protected $site;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Platform\CoreBundle\Entity\Tag", cascade={"remove"})
     * @ORM\JoinTable(name="content_tags",
     *  joinColumns={@ORM\JoinColumn(name="CONTENTID", referencedColumnName="CONTENTID")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="TAGID", referencedColumnName="TAGID")}
     * )
     */
    protected $tags;

    /**
     * @return mixed
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param mixed $site
     */
    public function setSite($site)
    {
        $this->site = $site;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }

    /**
     * @param \DateTime $updatedOn
     */
    public function setUpdatedOn($updatedOn)
    {
        $this->updatedOn = $updatedOn;
    }

    /**
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * @param string $updatedBy
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * @param \DateTime $createdOn
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param string $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return ContentType
     */
    public function getContenttype()
    {
        return $this->contenttype;
    }

    /**
     * @param ContentType $contenttype
     */
    public function setContenttype($contenttype)
    {
        $this->contenttype = $contenttype;
    }

    /**
     * @return int
     */
    public function getContentid()
    {
        return $this->contentid;
    }

    /**
     * @param int $contentid
     */
    public function setContentid($contentid)
    {
        $this->contentid = $contentid;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @param Tag $tag
     */
    public function addTags(Tag $tag)
    {
        $this->tags->add($tag);
    }

    /**
     * @param Tag $tag
     */
    public function removeTags(Tag $tag)
    {
        $this->tags->removeElement($tag);
    }

}