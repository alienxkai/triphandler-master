<?php
/**
 * Created by PhpStorm.
 * User: mrajaona
 * Date: 5/6/2016
 * Time: 9:41 PM
 */

namespace Platform\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Site
 *
 * @ORM\Table(name="core_site")
 * @ORM\Entity
 */
class Site
{
    /**
     * @var integer
     *
     * @ORM\Column(name="SITEID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $siteid;

    /**
     * @var string
     *
     * @ORM\Column(name="SITENAME", type="string", length=5, nullable=false)
     */
    private $sitename;

    /**
     * @var string
     *
     * @ORM\Column(name="CULTURE", type="string", length=5, nullable=false)
     */
    private $culture;

    /**
     * @return int
     */
    public function getSiteid()
    {
        return $this->siteid;
    }

    /**
     * @param int $siteid
     */
    public function setSiteid($siteid)
    {
        $this->siteid = $siteid;
    }

    /**
     * @return string
     */
    public function getSitename()
    {
        return $this->sitename;
    }

    /**
     * @param string $sitename
     */
    public function setSitename($sitename)
    {
        $this->sitename = $sitename;
    }

    /**
     * @return string
     */
    public function getCulture()
    {
        return $this->culture;
    }

    /**
     * @param string $culture
     */
    public function setCulture($culture)
    {
        $this->culture = $culture;
    }

}