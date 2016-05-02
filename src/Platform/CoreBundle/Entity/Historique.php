<?php

namespace Platform\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historique
 *
 * @ORM\Table(name="core_historique", indexes={@ORM\Index(name="FK_A_FAIT", columns={"USERID"})})
 * @ORM\Entity
 */
class Historique
{
    /**
     * @var integer
     *
     * @ORM\Column(name="HISTORIQUEID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $historiqueid;

    /**
     * @var integer
     *
     * @ORM\Column(name="USERID", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HISTORIQUEDATE", type="date", nullable=true)
     */
    private $historiquedate;

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATIONNAME", type="string", length=20, nullable=true)
     */
    private $operationname;

    /**
     * @var integer
     *
     * @ORM\Column(name="ENTITYID", type="integer", nullable=true)
     */
    private $entityid;



    /**
     * Get historiqueid
     *
     * @return integer 
     */
    public function getHistoriqueid()
    {
        return $this->historiqueid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return Historique
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
     * Set historiquedate
     *
     * @param \DateTime $historiquedate
     * @return Historique
     */
    public function setHistoriquedate($historiquedate)
    {
        $this->historiquedate = $historiquedate;

        return $this;
    }

    /**
     * Get historiquedate
     *
     * @return \DateTime 
     */
    public function getHistoriquedate()
    {
        return $this->historiquedate;
    }

    /**
     * Set operationname
     *
     * @param string $operationname
     * @return Historique
     */
    public function setOperationname($operationname)
    {
        $this->operationname = $operationname;

        return $this;
    }

    /**
     * Get operationname
     *
     * @return string 
     */
    public function getOperationname()
    {
        return $this->operationname;
    }

    /**
     * Set entityid
     *
     * @param integer $entityid
     * @return Historique
     */
    public function setEntityid($entityid)
    {
        $this->entityid = $entityid;

        return $this;
    }

    /**
     * Get entityid
     *
     * @return integer 
     */
    public function getEntityid()
    {
        return $this->entityid;
    }
}
