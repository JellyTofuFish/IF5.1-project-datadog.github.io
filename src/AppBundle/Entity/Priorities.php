<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Priorities
 *
 * @ORM\Table(name="priorities")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PrioritiesRepository")
 */
class Priorities
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
     * @ORM\Column(name="priorities", type="string", length=100, nullable=false)
     */
    private $priorities;

    /**
     * One Priority has Many Tasks.
     * @ORM\OneToMany(targetEntity="Tasks", mappedBy="priority")
     */
    private $prioritytask;

    public function __construct()
    {
        $this->prioritytask = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set priorities
     *
     * @param string $priorities
     *
     * @return Priorities
     */
    public function setPriorities($priorities)
    {
        $this->priorities = $priorities;

        return $this;
    }

    /**
     * Get priorities
     *
     * @return string
     */
    public function getPriorities()
    {
        return $this->priorities;
    }

    /**
     * Add prioritytask
     *
     * @param \AppBundle\Entity\Tasks $prioritytask
     *
     * @return Priorities
     */
    public function addPrioritytask(\AppBundle\Entity\Tasks $prioritytask)
    {
        $this->prioritytask[] = $prioritytask;

        return $this;
    }

    /**
     * Remove prioritytask
     *
     * @param \AppBundle\Entity\Tasks $prioritytask
     */
    public function removePrioritytask(\AppBundle\Entity\Tasks $prioritytask)
    {
        $this->prioritytask->removeElement($prioritytask);
    }

    /**
     * Get prioritytask
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrioritytask()
    {
        return $this->prioritytask;
    }

    public function __toString()
    {
        return $this->priorities;
    }
}
