<?php

namespace Platform\EditorialBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Platform\CoreBundle\Entity\Content;
use Platform\CoreBundle\Entity\Media;

/**
 * Article
 *
 * @ORM\Table(name="editorial_article", indexes={@ORM\Index(name="FK_CATEGORISED_AS", columns={"CATEGORYID"})})
 * @ORM\Entity(repositoryClass="Platform\EditorialBundle\Repository\ArticleRepository")
 */
class Article extends Content
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
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="Platform\EditorialBundle\Entity\Category")
     * @ORM\JoinColumn(name="CATEGORYID", referencedColumnName="CATEGORYID", nullable=true);
     */
    private $categoryid;

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
     * @var string
     *
     * @ORM\Column(name="HTMLCONTENT", type="text", nullable=true)
     */
    private $htmlcontent;

    /**
     * @var string
     *
     * @ORM\Column(name="SEOTITLE", type="string", length=128, nullable=true)
     */
    private $seotitle;

    /**
     * @var string
     *
     * @ORM\Column(name="METADESCRIPTION", type="string", length=256, nullable=true)
     */
    private $metadescription;

    /**
     * @var string
     *
     * @ORM\Column(name="METAOPENGRAPH", type="string", length=256, nullable=true)
     */
    private $metaopengraph;

    /**
     * @var string
     *
     * @ORM\Column(name="METAOPENGRAPHTITLE", type="string", length=256, nullable=true)
     */
    private $metaopengraphtitle;

    /**
     * @var Media
     *
     * @ORM\ManyToOne(targetEntity="Platform\CoreBundle\Entity\Media")
     * @ORM\JoinColumn(name="MEDIAID1", referencedColumnName="MEDIAID", nullable=true);
     */
    private $imagebox1;

    /**
     * @var Media
     *
     * @ORM\ManyToOne(targetEntity="Platform\CoreBundle\Entity\Media")
     * @ORM\JoinColumn(name="MEDIAID2", referencedColumnName="MEDIAID", nullable=true);
     */
    private $imagebox2;

    /**
     * @var Media
     *
     * @ORM\ManyToOne(targetEntity="Platform\CoreBundle\Entity\Media")
     * @ORM\JoinColumn(name="MEDIAID3", referencedColumnName="MEDIAID", nullable=true);
     */
    private $imagebox3;

    /**
     * Article constructor.
     */
    public function __construct()
    {
        $this->createdOn = new \DateTime();
        $this->tags = new ArrayCollection();
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
    public function getHtmlcontent()
    {
        return $this->htmlcontent;
    }

    /**
     * @param string $htmlcontent
     */
    public function setHtmlcontent($htmlcontent)
    {
        $this->htmlcontent = $htmlcontent;
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
    public function getMetaopengraph()
    {
        return $this->metaopengraph;
    }

    /**
     * @param string $metaopengraph
     */
    public function setMetaopengraph($metaopengraph)
    {
        $this->metaopengraph = $metaopengraph;
    }

    /**
     * @return string
     */
    public function getMetaopengraphtitle()
    {
        return $this->metaopengraphtitle;
    }

    /**
     * @param string $metaopengraphtitle
     */
    public function setMetaopengraphtitle($metaopengraphtitle)
    {
        $this->metaopengraphtitle = $metaopengraphtitle;
    }

    /**
     * @return Media
     */
    public function getImagebox1()
    {
        return $this->imagebox1;
    }

    /**
     * @param Media $imagebox1
     */
    public function setImagebox1($imagebox1)
    {
        $this->imagebox1 = $imagebox1;
    }

    /**
     * @return Media
     */
    public function getImagebox2()
    {
        return $this->imagebox2;
    }

    /**
     * @param Media $imagebox2
     */
    public function setImagebox2($imagebox2)
    {
        $this->imagebox2 = $imagebox2;
    }

    /**
     * @return Media
     */
    public function getImagebox3()
    {
        return $this->imagebox3;
    }

    /**
     * @param Media $imagebox3
     */
    public function setImagebox3($imagebox3)
    {
        $this->imagebox3 = $imagebox3;
    }

}
