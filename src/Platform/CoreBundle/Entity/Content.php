<?php
/**
 * Created by PhpStorm.
 * User: mrajaona
 * Date: 5/7/2016
 * Time: 1:02 AM
 */

namespace Platform\CoreBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Content
 *
 * @ORM\Table(name="core_content")
 * @ORM\Entity
 */
class Content
{
    /**
     * @var integer
     *
     * @ORM\Column(name="SITEID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contentid;

    /**
     * @var ContentType
     *
     * @ORM\ManyToOne(targetEntity="Platform\CoreBundle\Entity\ContentType")
     * @ORM\JoinColumn(name="CONTENTTYPEID", referencedColumnName="CONTENTTYPEID", nullable=true);
     */
    private $contenttype;

    /**
     * @var string
     *
     * @ORM\Column(name="CREATEBY", type="string", length=20, nullable=false)
     */
    private $createdBy;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="CREATEDON", type="date", nullable=false)
     */
    private $createdOn;

    /**
     * @var string
     *
     * @ORM\Column(name="UPDATEDBY", type="string", length=20, nullable=true)
     */
    private $updatedBy;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="UPDATEDON", type="date", nullable=true)
     */
    private $updatedOn;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Platform\CoreBundle\Entity\Site")
     * @ORM\JoinColumn(name="SITEID", referencedColumnName="SITEID", nullable=false);
     */
    private $site;

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
     * @return DateTime
     */
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }

    /**
     * @param DateTime $updatedOn
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
     * @return DateTime
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * @param DateTime $createdOn
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

}