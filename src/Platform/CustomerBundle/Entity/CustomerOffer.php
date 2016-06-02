<?php

namespace Platform\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerOffer
 *
 * @ORM\Table(name="customer_offer")
 * @ORM\Entity
 */
class CustomerOffer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="OFFERID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $offerid;

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
     * @ORM\Column(name="HTMLCONTENT", type="text", nullable=true)
     */
    private $htmlcontent;

    /**
     * @var string
     *
     * @ORM\Column(name="PRICE", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var integer
     *
     * @ORM\Column(name="DURATION", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="STARTDATE", type="datetime", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENDDATE", type="datetime", nullable=true)
     */
    private $enddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="CREATEDBY", type="integer", nullable=true)
     */
    private $createdby;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDON", type="datetime", nullable=true)
     */
    private $createdon;

    /**
     * @var integer
     *
     * @ORM\Column(name="UPDATEDBY", type="integer", nullable=true)
     */
    private $updatedby;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UPDATEDON", type="datetime", nullable=true)
     */
    private $updatedon;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUT", type="string", length=1, nullable=true)
     */
    private $statut;



    /**
     * Get offerid
     *
     * @return integer 
     */
    public function getOfferid()
    {
        return $this->offerid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return CustomerOffer
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
     * Set seotitle
     *
     * @param string $seotitle
     * @return CustomerOffer
     */
    public function setSeotitle($seotitle)
    {
        $this->seotitle = $seotitle;

        return $this;
    }

    /**
     * Get seotitle
     *
     * @return string 
     */
    public function getSeotitle()
    {
        return $this->seotitle;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return CustomerOffer
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
     * Set metadescription
     *
     * @param string $metadescription
     * @return CustomerOffer
     */
    public function setMetadescription($metadescription)
    {
        $this->metadescription = $metadescription;

        return $this;
    }

    /**
     * Get metadescription
     *
     * @return string 
     */
    public function getMetadescription()
    {
        return $this->metadescription;
    }

    /**
     * Set htmlcontent
     *
     * @param string $htmlcontent
     * @return CustomerOffer
     */
    public function setHtmlcontent($htmlcontent)
    {
        $this->htmlcontent = $htmlcontent;

        return $this;
    }

    /**
     * Get htmlcontent
     *
     * @return string 
     */
    public function getHtmlcontent()
    {
        return $this->htmlcontent;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return CustomerOffer
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return CustomerOffer
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return CustomerOffer
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     * @return CustomerOffer
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime 
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set createdby
     *
     * @param integer $createdby
     * @return CustomerOffer
     */
    public function setCreatedby($createdby)
    {
        $this->createdby = $createdby;

        return $this;
    }

    /**
     * Get createdby
     *
     * @return integer 
     */
    public function getCreatedby()
    {
        return $this->createdby;
    }

    /**
     * Set createdon
     *
     * @param \DateTime $createdon
     * @return CustomerOffer
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
     * Set updatedby
     *
     * @param integer $updatedby
     * @return CustomerOffer
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

    /**
     * Set updatedon
     *
     * @param \DateTime $updatedon
     * @return CustomerOffer
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
     * Set statut
     *
     * @param string $statut
     * @return CustomerOffer
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
