<?php

namespace Pineipol\BaaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Link
 *
 * @ORM\Table(name="links", uniqueConstraints={@ORM\UniqueConstraint(name="link_id", columns={"link_id"}), @ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="post_id", columns={"post_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Link extends BaseEntity {

    /**
     * @var integer
     *
     * @ORM\Column(name="link_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $linkId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="target_url", type="text", length=65535, nullable=true)
     */
    private $targetUrl;

    /**
     * @var integer
     *
     * @ORM\Column(name="open_blank", type="integer", nullable=true)
     */
    private $openBlank;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=false)
     */
    private $modified;

    /**
     * @var \Pineipol\BaaBundle\Entity\Post
     *
     * @ORM\ManyToOne(targetEntity="Pineipol\BaaBundle\Entity\Post", inversedBy="links")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_id", referencedColumnName="post_id")
     * })
     */
    private $post;

    /**
     * Get linkId
     *
     * @return integer
     */
    public function getLinkId() {
        return $this->linkId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Link
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
     * @return Link
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
     * @return Link
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
     * Set targetUrl
     *
     * @param string $targetUrl
     * @return Link
     */
    public function setTargetUrl($targetUrl) {
        $this->targetUrl = $targetUrl;

        return $this;
    }

    /**
     * Get targetUrl
     *
     * @return string
     */
    public function getTargetUrl() {
        return $this->targetUrl;
    }

    /**
     * Set openBlank
     *
     * @param integer $openBlank
     * @return Link
     */
    public function setOpenBlank($openBlank) {
        $this->openBlank = $openBlank;

        return $this;
    }

    /**
     * Get openBlank
     *
     * @return integer
     */
    public function getOpenBlank() {
        return $this->openBlank;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Link
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
     * @return Link
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
     * Set post
     *
     * @param \Pineipol\BaaBundle\Entity\Post $post
     * @return Link
     */
    public function setPost(\Pineipol\BaaBundle\Entity\Post $post = null) {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \Pineipol\BaaBundle\Entity\Post
     */
    public function getPost() {
        return $this->post;
    }

}
