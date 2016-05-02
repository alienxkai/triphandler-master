<?php

namespace Platform\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="core_user", indexes={@ORM\Index(name="FK_DE_ROLE", columns={"USERROLEID"}), @ORM\Index(name="FK_DE_TYPE", columns={"USERTYPEID"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="USERID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userid;

    /**
     * @ORM\ManyToOne(targetEntity="Platform\CoreBundle\Entity\Usertype")
     * @ORM\JoinColumn(name="USERTYPEID", referencedColumnName="USERTYPEID", nullable=true);
     */
    private $usertype;

    /**
     * @var integer
     *
     * @ORM\Column(name="USERROLEID", type="integer", nullable=false)
     */

    /**
     * @ORM\ManyToOne(targetEntity="Platform\CoreBundle\Entity\Userrole")
     * @ORM\JoinColumn(name="USERROLEID", referencedColumnName="USERROLEID", nullable=true);
     */
    private $userrole;

    /**
     * @var string
     *
     * @ORM\Column(name="USERNAME", type="string", length=50, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=20, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="MAIL", type="string", length=50, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="SECRETQUESTION", type="string", length=150, nullable=true)
     */
    private $secretquestion;

    /**
     * @var string
     *
     * @ORM\Column(name="SECRETANSWER", type="string", length=150, nullable=true)
     */
    private $secretanswer;



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
     * Set usertypeid
     *
     * @param integer $usertype
     * @return User
     */
    public function setUsertype($usertype)
    {
        $this->usertype = $usertype;

        return $this;
    }

    /**
     * Get usertypeid
     *
     * @return integer 
     */
    public function getUsertype()
    {
        return $this->usertype;
    }

    /**
     * Set userroleid
     *
     * @param integer $userrole
     * @return User
     */
    public function setUserrole($userrole)
    {
        $this->userrole = $userrole;

        return $this;
    }

    /**
     * Get userroleid
     *
     * @return integer 
     */
    public function getUserrole()
    {
        return $this->userrole;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return User
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
     * Set secretquestion
     *
     * @param string $secretquestion
     * @return User
     */
    public function setSecretquestion($secretquestion)
    {
        $this->secretquestion = $secretquestion;

        return $this;
    }

    /**
     * Get secretquestion
     *
     * @return string 
     */
    public function getSecretquestion()
    {
        return $this->secretquestion;
    }

    /**
     * Set secretanswer
     *
     * @param string $secretanswer
     * @return User
     */
    public function setSecretanswer($secretanswer)
    {
        $this->secretanswer = $secretanswer;

        return $this;
    }

    /**
     * Get secretanswer
     *
     * @return string 
     */
    public function getSecretanswer()
    {
        return $this->secretanswer;
    }
}
