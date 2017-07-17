<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * status
 *
 * @ORM\Table(name="status")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\statusRepository")
 */
class status
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
     * @ORM\Column(name="status", type="string", length=100, nullable=false)
     */
    private $status;

    /**
     * One Status has Many Tasks.
     * @ORM\OneToMany(targetEntity="Tasks", mappedBy="status")
     */
    private $statustask;

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
     * Add statustask
     *
     * @param \AppBundle\Entity\Tasks $statustask
     *
     * @return Status
     */
    public function addStatustask(\AppBundle\Entity\Tasks $statustask)
    {
        $this->statustask[] = $statustask;

        return $this;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return status
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Remove statustask
     *
     * @param \AppBundle\Entity\Tasks $statustask
     */
    public function removeStatustask(\AppBundle\Entity\Tasks $statustask)
    {
        $this->statustask->removeElement($statustask);
    }

    /**
     * Get statustask
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStatustask()
    {
        return $this->statustask;
    }

    public function __toString()
    {
        return $this->status;
    }

}

