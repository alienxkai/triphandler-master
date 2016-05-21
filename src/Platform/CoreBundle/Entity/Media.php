<?php

namespace Platform\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Media
 *
 * @ORM\Table(name="core_media")
 * @ORM\Entity(repositoryClass="Platform\CoreBundle\Repository\MediaRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Media
{
    /**
     * @var integer
     *
     * @ORM\Column(name="MEDIAID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mediaid;

    /**
     * @var string
     *
     * @ORM\Column(name="TITLE", type="string", length=128, nullable=true)
     * @Assert\NotBlank
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="ALT", type="string", length=128, nullable=true)
     */
    private $alt;

    /**
     * @var string
     *
     * @ORM\Column(name="URL", type="string", length=512, nullable=true)
     */
    private $url;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATEDON", type="datetime", nullable=true)
     */
    private $createdon;

    /**
     * @var integer
     *
     * @ORM\Column(name="CREATEBY", type="integer", nullable=true)
     */
    private $createby;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="UPDATEDON", type="datetime", nullable=true)
     */
    private $updatedon;

    /**
     * @var integer
     *
     * @ORM\Column(name="UPDATEDBY", type="integer", nullable=true)
     */
    private $updatedby;

    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;

    private $temp;

    public function __construct()
    {
        $this->createdon = new \DateTime();
    }

    /**
     * Get mediaid
     *
     * @return integer 
     */
    public function getMediaid()
    {
        return $this->mediaid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Media
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
     * Set alt
     *
     * @param string $alt
     * @return Media
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Media
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set createdon
     *
     * @param \DateTime $createdon
     * @return Media
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
     * Set createby
     *
     * @param integer $createby
     * @return Media
     */
    public function setCreateby($createby)
    {
        $this->createby = $createby;

        return $this;
    }

    /**
     * Get createby
     *
     * @return integer 
     */
    public function getCreateby()
    {
        return $this->createby;
    }

    /**
     * Set updatedon
     *
     * @param \DateTime $updatedon
     * @return Media
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
     * Set updatedby
     *
     * @param integer $updatedby
     * @return Media
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
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;

        if (isset($this->url)) {
            $this->temp = $this->url;
            $this->url = null;
        } else {
            $this->url = 'initial';
        }
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Get absolute path for media
     *
     * @return null|string
     */
    public function getAbsolutePath()
    {
        return null === $this->url
            ? null
            : $this->getUploadRootDir().'/'.$this->url;
    }

    /**
     * Get web path for media
     *
     * @return null|string
     */
    public function getWebPath()
    {
        return null === $this->url
            ? null
            : $this->getUploadDir().'/'.$this->url;
    }

    protected function getUploadDir()
    {

        return 'cdn/images';
    }

    protected function getUploadRootDir()
    {

        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }

        $extension = $this->getFile()->guessExtension();
        $filename = strtolower(str_replace(' ', '_', $this->title)) . '.' . $extension;

        $this->getFile()->move($this->getUploadRootDir(), $filename);

        if (isset($this->temp)) {
            unlink($this->getUploadRootDir().'/'.$this->temp);

            $this->temp = null;
        }

        $this->url = $filename;
        $this->file = null;
    }
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->getFile()) {

            $extension = $this->getFile()->guessExtension();
            $filename = $filename = strtolower(str_replace(' ', '_', $this->title)) . '.' . $extension;
            $this->url = $filename;
        }
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        $file = $this->getAbsolutePath();
        if ($file) {
            unlink($file);
        }
    }

}
