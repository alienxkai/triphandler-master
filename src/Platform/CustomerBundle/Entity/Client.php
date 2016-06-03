<?php

namespace Platform\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="customer_client")
 * @ORM\Entity
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CLIENTID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clientid;

    /**
     * @var string
     *
     * @ORM\Column(name="NAME", type="string", length=128, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=256, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="SEONAME", type="string", length=128, nullable=true)
     */
    private $seoname;

    /**
     * @var string
     *
     * @ORM\Column(name="METADESCRIPTION", type="string", length=256, nullable=true)
     */
    private $metadescription;

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

    public function __construct()
    {

        $this->createdon = new \DateTime();
    }

    /**
     * Get clientid
     *
     * @return integer 
     */
    public function getClientid()
    {
        return $this->clientid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Client
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
     * Set description
     *
     * @param string $description
     * @return Client
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
     * Set seoname
     *
     * @param string $seoname
     * @return Client
     */
    public function setSeoname($seoname)
    {
        $this->seoname = $seoname;

        return $this;
    }

    /**
     * Get seoname
     *
     * @return string 
     */
    public function getSeoname()
    {
        return $this->seoname;
    }

    /**
     * Set metadescription
     *
     * @param string $metadescription
     * @return Client
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
     * Set createdby
     *
     * @param integer $createdby
     * @return Client
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
     * @return Client
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
     * @return Client
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
     * @return Client
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
}
