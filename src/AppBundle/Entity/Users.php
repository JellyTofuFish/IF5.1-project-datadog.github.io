<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsersRepository")
 * @UniqueEntity(fields="email", message="Email is already taken")
 * @UniqueEntity(fields="username", message="Username is already taken")
 */
class Users implements UserInterface, \Serializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=50, unique=true, nullable=false)
     * @Assert\Length(
     *     min="6",
     *     minMessage="Your name must be at least 6 characters long"
     * )
     * @Assert\NotBlank()
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="lastname", type="string", length=50, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, unique=true, nullable=false)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @Assert\Regex(
     *      pattern="/(?=.*[0-9])(?=.*[a-z]).{5,}$/",
     *      message="Password mush be at least 5 characters long, have a lover case character and a digit"
     * )
     */
    private $plainPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=64)
     *
     */
    private $password;

    /**
     * One User has Many Tasks
     * @ORM\OneToMany(targetEntity="Tasks", mappedBy="author")
     */
    private $usertasks;

    /**
     * One User has Many UsersTeams
     * @ORM\OneToMany(targetEntity="UsersTeams", mappedBy="user")
     */
    private $usersteamsUser;

    public function __construct()
    {
        $this->usertasks = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usersteamsUser = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Users
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
     * Set name
     *
     * @param string $name
     *
     * @return Users
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
     * Set email
     *
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }


    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Users
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
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getUsertasks()
    {
        return $this->usertasks;
    }

    /**
     * @param mixed $usertasks
     */
    public function setUsertasks($usertasks)
    {
        $this->usertasks = $usertasks;
    }

    /**
     * @return mixed
     */
    public function getUsersteamsUser()
    {
        return $this->usersteamsUser;
    }

    /**
     * @param mixed $usersteamsUser
     */
    public function setUsersteamsUser($usersteamsUser)
    {
        $this->usersteamsUser = $usersteamsUser;
    }




    /**
     * Add usertask
     *
     * @param \AppBundle\Entity\Tasks $usertask
     *
     * @return Users
     */
    public function addUsertask(\AppBundle\Entity\Tasks $usertask)
    {
        $this->usertasks[] = $usertask;

        return $this;
    }

    /**
     * Remove usertask
     *
     * @param \AppBundle\Entity\Tasks $usertask
     */
    public function removeUsertask(\AppBundle\Entity\Tasks $usertask)
    {
        $this->usertasks->removeElement($usertask);
    }

    /**
     * Add usersteamsUser
     *
     * @param \AppBundle\Entity\UsersTeams $usersteamsUser
     *
     * @return Users
     */
    public function addUsersteamsUser(\AppBundle\Entity\UsersTeams $usersteamsUser)
    {
        $this->usersteamsUser[] = $usersteamsUser;

        return $this;
    }

    /**
     * Remove usersteamsUser
     *
     * @param \AppBundle\Entity\UsersTeams $usersteamsUser
     */
    public function removeUsersteamsUser(\AppBundle\Entity\UsersTeams $usersteamsUser)
    {
        $this->usersteamsUser->removeElement($usersteamsUser);
    }

    public function serialize()
    {
        return serialize([
            $this->id,
            $this->username,
            $this->password
        ]);
    }

    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password
            ) = unserialize($serialized);
    }

    public function getRoles()
    {
        return [ 'ROLE_USER' ];
    }

    public function getSalt()
    {

    }

    public function eraseCredentials()
    {

    }

    public function __toString()
    {
        return $this->username;
    }
}