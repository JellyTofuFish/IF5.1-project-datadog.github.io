<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * UsersTeams
 * @ORM\Table(name="usersteams")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsersTeamsRepository")
 */
class UsersTeams
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
     * Many Users have One Team.
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="usersteamsUser")
     *  @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * Many Teams have One User.
     * @ORM\ManyToOne(targetEntity="Teams", inversedBy="usersteamsTeam")
     *  @ORM\JoinColumn(name="teams_id", referencedColumnName="id")
     */
    private $team;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param mixed $team
     */
    public function setTeam($team)
    {
        $this->team = $team;
    }

}