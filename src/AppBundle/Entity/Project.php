<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectRepository")
 */
class Project
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="projectType", type="string", length=255)
     */
    private $projectType;

    /**
     * @var string
     *
     * @ORM\Column(name="projectLead", type="string", length=255)
     */
    private $projectLead;


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
     * Set name
     *
     * @param string $name
     *
     * @return Project
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
     * Set description
     *
     * @param string $description
     *
     * @return Project
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set projectType
     *
     * @param string $projectType
     *
     * @return Project
     */
    public function setProjectType($projectType)
    {
        $this->projectType = $projectType;

        return $this;
    }

    /**
     * Get projectType
     *
     * @return string
     */
    public function getProjectType()
    {
        return $this->projectType;
    }

    /**
     * Set projectLead
     *
     * @param string $projectLead
     *
     * @return Project
     */
    public function setProjectLead($projectLead)
    {
        $this->projectLead = $projectLead;

        return $this;
    }

    /**
     * Get projectLead
     *
     * @return string
     */
    public function getProjectLead()
    {
        return $this->projectLead;
    }
}

