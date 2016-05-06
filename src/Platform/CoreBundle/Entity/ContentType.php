<?php
/**
 * Created by PhpStorm.
 * User: mrajaona
 * Date: 5/7/2016
 * Time: 12:59 AM
 */

namespace Platform\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContentType
 *
 * @ORM\Table(name="core_contenttype")
 * @ORM\Entity
 */
class ContentType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="CONTENTTYPEID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contenttypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPENAME", type="string", nullable=false)
     */
    private $typename;

    /**
     * @var string
     *
     * @ORM\Column(name="SEOTYPENAME", type="string", length=50, nullable=true)
     */
    private $seotypename;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=250, nullable=true)
     */
    private $description;

    /**
     * @return int
     */
    public function getContenttypeid()
    {
        return $this->contenttypeid;
    }

    /**
     * @param int $contenttypeid
     */
    public function setContenttypeid($contenttypeid)
    {
        $this->contenttypeid = $contenttypeid;
    }

    /**
     * @return string
     */
    public function getTypename()
    {
        return $this->typename;
    }

    /**
     * @param string $typename
     */
    public function setTypename($typename)
    {
        $this->typename = $typename;
    }

    /**
     * @return string
     */
    public function getSeotypename()
    {
        return $this->seotypename;
    }

    /**
     * @param string $seotypename
     */
    public function setSeotypename($seotypename)
    {
        $this->seotypename = $seotypename;
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

}