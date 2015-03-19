<?php

namespace Pineipol\BaaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Routes
 *
 * @ORM\Table(name="routes", uniqueConstraints={@ORM\UniqueConstraint(name="route_id", columns={"route_id"}), @ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="route_type_id", columns={"route_type_id"}), @ORM\Index(name="IDX_32D5C2B38C22AA1A", columns={"layout_id"})})
 * @ORM\Entity
 */
class Routes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="route_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $routeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=255, nullable=true)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=true)
     */
    private $modified;

    /**
     * @var \Pineipol\BaaBundle\Entity\Layouts
     *
     * @ORM\ManyToOne(targetEntity="Pineipol\BaaBundle\Entity\Layouts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="layout_id", referencedColumnName="layout_id")
     * })
     */
    private $layout;

    /**
     * @var \Pineipol\BaaBundle\Entity\RouteTypes
     *
     * @ORM\ManyToOne(targetEntity="Pineipol\BaaBundle\Entity\RouteTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="route_type_id", referencedColumnName="route_type_id")
     * })
     */
    private $routeType;



    /**
     * Get routeId
     *
     * @return integer 
     */
    public function getRouteId()
    {
        return $this->routeId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Routes
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
     * Set path
     *
     * @param string $path
     * @return Routes
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return Routes
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Routes
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
     * Set created
     *
     * @param \DateTime $created
     * @return Routes
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return Routes
     */
    public function setModified($modified)
    {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set layout
     *
     * @param \Pineipol\BaaBundle\Entity\Layouts $layout
     * @return Routes
     */
    public function setLayout(\Pineipol\BaaBundle\Entity\Layouts $layout = null)
    {
        $this->layout = $layout;

        return $this;
    }

    /**
     * Get layout
     *
     * @return \Pineipol\BaaBundle\Entity\Layouts 
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Set routeType
     *
     * @param \Pineipol\BaaBundle\Entity\RouteTypes $routeType
     * @return Routes
     */
    public function setRouteType(\Pineipol\BaaBundle\Entity\RouteTypes $routeType = null)
    {
        $this->routeType = $routeType;

        return $this;
    }

    /**
     * Get routeType
     *
     * @return \Pineipol\BaaBundle\Entity\RouteTypes 
     */
    public function getRouteType()
    {
        return $this->routeType;
    }
}
