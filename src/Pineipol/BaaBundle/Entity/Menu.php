<?php

namespace Pineipol\BaaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="menus", uniqueConstraints={@ORM\UniqueConstraint(name="menu_id", columns={"menu_id"}), @ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="IDX_727508CF34ECB4E6", columns={"route_id"})})
 * @ORM\Entity(repositoryClass="Pineipol\BaaBundle\Repository\MenuRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Menu extends BaseEntity {

    /**
     * @var integer
     *
     * @ORM\Column(name="menu_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $menuId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="text", nullable=true)
     */
    private $style;

    /**
     * @var integer
     *
     * @ORM\Column(name="show", type="integer", nullable=true)
     */
    private $show;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=false, columnDefinition="TIMESTAMP ON UPDATE CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP")
     */
    private $modified;

    /**
     * @var \Pineipol\BaaBundle\Entity\Route
     *
     * @ORM\ManyToOne(targetEntity="Pineipol\BaaBundle\Entity\Route", inversedBy="menu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="route_id", referencedColumnName="route_id")
     * })
     */
    private $route;

    /**
     * Get menuId
     *
     * @return integer
     */
    public function getMenuId() {
        return $this->menuId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Menu
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Menu
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Menu
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set style
     *
     * @param string $style
     * @return Menu
     */
    public function setStyle($style) {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style
     *
     * @return string
     */
    public function getStyle() {
        return $this->style;
    }

    /**
     * Set show
     *
     * @param integer $show
     * @return Menu
     */
    public function setShow($show) {
        $this->show = $show;

        return $this;
    }

    /**
     * Get show
     *
     * @return integer
     */
    public function getShow() {
        return $this->show;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Menu
     */
    public function setCreated($created) {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return Menu
     */
    public function setModified($modified) {
        $this->modified = $modified;

        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime
     */
    public function getModified() {
        return $this->modified;
    }

    /**
     * Set route
     *
     * @param \Pineipol\BaaBundle\Entity\Route $route
     * @return Menu
     */
    public function setRoute(\Pineipol\BaaBundle\Entity\Route $route = null) {
        $this->route = $route;

        return $this;
    }

    /**
     * Get route
     *
     * @return \Pineipol\BaaBundle\Entity\Route
     */
    public function getRoute() {
        return $this->route;
    }

}
