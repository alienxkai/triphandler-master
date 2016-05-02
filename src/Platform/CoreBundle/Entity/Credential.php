<?php

namespace Platform\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * CoreUser
 *
 * @ORM\Table(name="view_credential")
 * @ORM\Entity
 */
class Credential implements UserInterface
{

    /**
     * @var string
     *
     * @ORM\Column(name="USERNAME", type="string", length=50, nullable=true)
     * @ORM\Id
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
     * @var integer
     *
     * @ORM\Column(name="USERTYPENAME", type="string", nullable=false)
     */
    private $usertypename;

    /**
     * @var integer
     *
     * @ORM\Column(name="USERROLENAME", type="string", nullable=false)
     */
    private $userrolename;

    /**
     * Set usertypename
     *
     * @param integer $usertypename
     * @return Credential
     */
    public function setUsertypeid($usertypename)
    {
        $this->usertypename = $usertypename;

        return $this;
    }

    /**
     * Get usertypename
     *
     * @return integer 
     */
    public function getUsertypename()
    {
        return $this->usertypename;
    }

    /**
     * Set userrolename
     *
     * @param integer $userrolename
     * @return Credential
     */
    public function setUserrolename($userrolename)
    {
        $this->userrolename = $userrolename;

        return $this;
    }

    /**
     * Get userrolename
     *
     * @return integer 
     */
    public function getUserrolename()
    {
        return $this->userrolename;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Credential
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
     * @return Credential
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
     * @return Credential
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
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return Role[] The user roles
     */
    public function getRoles()
    {
        return array($this->userrolename);
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return '';
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}
