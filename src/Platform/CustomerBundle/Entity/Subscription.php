<?php

namespace Platform\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subscription
 *
 * @ORM\Table(name="customer_subscription", indexes={@ORM\Index(name="FK_CLIENT_SUBSCRIPTION", columns={"CLIENTID"}), @ORM\Index(name="FK_SUBSCRIPTION_APPLY", columns={"APPLICANCEID"}), @ORM\Index(name="FK_SUBSCRIPTION_USER", columns={"USERID"})})
 * @ORM\Entity
 */
class Subscription
{
    /**
     * @var integer
     *
     * @ORM\Column(name="SUBSCRIPTIONID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $subscriptionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="USERID", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="APPLICANCEID", type="integer", nullable=false)
     */
    private $applicanceid;

    /**
     * @var integer
     *
     * @ORM\Column(name="CLIENTID", type="integer", nullable=false)
     */
    private $clientid;

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
     * @var string
     *
     * @ORM\Column(name="STATUT", type="string", length=1, nullable=true)
     */
    private $statut;



    /**
     * Get subscriptionid
     *
     * @return integer 
     */
    public function getSubscriptionid()
    {
        return $this->subscriptionid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return Subscription
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set applicanceid
     *
     * @param integer $applicanceid
     * @return Subscription
     */
    public function setApplicanceid($applicanceid)
    {
        $this->applicanceid = $applicanceid;

        return $this;
    }

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
     * Set clientid
     *
     * @param integer $clientid
     * @return Subscription
     */
    public function setClientid($clientid)
    {
        $this->clientid = $clientid;

        return $this;
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
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return Subscription
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
     * @return Subscription
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
     * Set statut
     *
     * @param string $statut
     * @return Subscription
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
