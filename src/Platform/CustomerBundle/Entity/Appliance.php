<?php

namespace Platform\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appliance
 *
 * @ORM\Table(name="customer_appliance", indexes={@ORM\Index(name="FK_APPLIANCE_SITE", columns={"SITEID"}), @ORM\Index(name="FK_OFFER_APPLIANCE", columns={"OFFERID"})})
 * @ORM\Entity
 */
class Appliance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="APPLICANCEID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $applicanceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="SITEID", type="integer", nullable=false)
     */
    private $siteid;

    /**
     * @var integer
     *
     * @ORM\Column(name="OFFERID", type="integer", nullable=false)
     */
    private $offerid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="APPLIANCEDATE", type="datetime", nullable=true)
     */
    private $appliancedate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="EXPIRATEDATE", type="datetime", nullable=true)
     */
    private $expiratedate;

    /**
     * @var string
     *
     * @ORM\Column(name="MAIL", type="string", length=50, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="PHONE", type="string", length=50, nullable=true)
     */
    private $phone;



    /**
     * Get applicanceid
     *
     * @return integer 
     */
    public function getApplicanceid()
    {
        return $this->applicanceid;
    }

    /**
     * Set siteid
     *
     * @param integer $siteid
     * @return Appliance
     */
    public function setSiteid($siteid)
    {
        $this->siteid = $siteid;

        return $this;
    }

    /**
     * Get siteid
     *
     * @return integer 
     */
    public function getSiteid()
    {
        return $this->siteid;
    }

    /**
     * Set offerid
     *
     * @param integer $offerid
     * @return Appliance
     */
    public function setOfferid($offerid)
    {
        $this->offerid = $offerid;

        return $this;
    }

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
     * Set appliancedate
     *
     * @param \DateTime $appliancedate
     * @return Appliance
     */
    public function setAppliancedate($appliancedate)
    {
        $this->appliancedate = $appliancedate;

        return $this;
    }

    /**
     * Get appliancedate
     *
     * @return \DateTime 
     */
    public function getAppliancedate()
    {
        return $this->appliancedate;
    }

    /**
     * Set expiratedate
     *
     * @param \DateTime $expiratedate
     * @return Appliance
     */
    public function setExpiratedate($expiratedate)
    {
        $this->expiratedate = $expiratedate;

        return $this;
    }

    /**
     * Get expiratedate
     *
     * @return \DateTime 
     */
    public function getExpiratedate()
    {
        return $this->expiratedate;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Appliance
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Appliance
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }
}
