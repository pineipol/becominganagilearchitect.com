<?php

namespace Pineipol\BaaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="posts", uniqueConstraints={@ORM\UniqueConstraint(name="post_id", columns={"post_id"}), @ORM\UniqueConstraint(name="name", columns={"name"}), @ORM\UniqueConstraint(name="order", columns={"order"})})
 * @ORM\Entity
 */
class Post {

    /**
     * @var integer
     *
     * @ORM\Column(name="post_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $postId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="show", type="integer", nullable=true)
     */
    private $show;

    /**
     * @var integer
     *
     * @ORM\Column(name="home", type="integer", nullable=true)
     */
    private $home;

    /**
     * @var integer
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

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
     * Get postId
     *
     * @return integer
     */
    public function getPostId() {
        return $this->postId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Post
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
     * Set show
     *
     * @param integer $show
     * @return Post
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
     * Set home
     *
     * @param integer $home
     * @return Post
     */
    public function setHome($home) {
        $this->home = $home;

        return $this;
    }

    /**
     * Get home
     *
     * @return integer
     */
    public function getHome() {
        return $this->home;
    }

    /**
     * Set order
     *
     * @param integer $order
     * @return Post
     */
    public function setOrder($order) {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return integer
     */
    public function getOrder() {
        return $this->order;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Post
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
     * @return Post
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

}
