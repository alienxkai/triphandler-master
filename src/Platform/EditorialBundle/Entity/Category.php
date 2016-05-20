<?php

namespace Platform\EditorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="editorial_category", indexes={@ORM\Index(name="FK_CATEGORY_PARENT", columns={"PARENTID"})})
 * @ORM\Entity(repositoryClass="Platform\EditorialBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CATEGORYID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryid;

    /**
     * @var integer
     *
     * @ORM\Column(name="PARENTID", type="integer", nullable=true)
     */
    private $parentid;

    /**
     * @var string
     *
     * @ORM\Column(name="TITLE", type="string", length=128, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="SEOTITLE", type="string", length=128, nullable=true)
     */
    private $seotitle;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=256, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="METADESCRIPTION", type="string", length=256, nullable=true)
     */
    private $metadescription;

    /**
     * @var string
     *
     * @ORM\Column(name="ORDERBY", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $orderby;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @return int
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }

    /**
     * @param int $categoryid
     */
    public function setCategoryid($categoryid)
    {
        $this->categoryid = $categoryid;
    }

    /**
     * @return int
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * @param int $parentid
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getSeotitle()
    {
        return $this->seotitle;
    }

    /**
     * @param string $seotitle
     */
    public function setSeotitle($seotitle)
    {
        $this->seotitle = $seotitle;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getMetadescription()
    {
        return $this->metadescription;
    }

    /**
     * @param string $metadescription
     */
    public function setMetadescription($metadescription)
    {
        $this->metadescription = $metadescription;
    }

    /**
     * @return string
     */
    public function getOrderby()
    {
        return $this->orderby;
    }

    /**
     * @param string $orderby
     */
    public function setOrderby($orderby)
    {
        $this->orderby = $orderby;
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

}
