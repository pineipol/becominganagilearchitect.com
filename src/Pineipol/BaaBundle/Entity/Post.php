<?php

namespace Pineipol\BaaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="posts", uniqueConstraints={@ORM\UniqueConstraint(name="post_id", columns={"post_id"}), @ORM\UniqueConstraint(name="name", columns={"name"}), @ORM\UniqueConstraint(name="order", columns={"order"})})
 * @ORM\Entity(repositoryClass="Pineipol\BaaBundle\Repository\PostRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Post extends BaseEntity {

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
     * @ORM\Column(name="modified", type="datetime", nullable=false, columnDefinition="TIMESTAMP ON UPDATE CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP")
     */
    private $modified;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Pineipol\BaaBundle\Entity\Category", inversedBy="posts")
     * @ORM\JoinTable(name="posts_categories",
     *   joinColumns={
     *     @ORM\JoinColumn(name="post_id", referencedColumnName="post_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     *   }
     * )
     */
    private $categories;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="\Pineipol\BaaBundle\Entity\PostContent", mappedBy="post")
     */
    private $contents;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="\Pineipol\BaaBundle\Entity\Comment", mappedBy="post")
     */
    private $comments;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="\Pineipol\BaaBundle\Entity\Link", mappedBy="post")
     */
    private $links;

    /**
     * Constructor
     */
    public function __construct() {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->links = new \Doctrine\Common\Collections\ArrayCollection();
    }

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

    /**
     * Add category
     *
     * @param \Pineipol\BaaBundle\Entity\Category $category
     * @return Post
     */
    public function addCategory(\Pineipol\BaaBundle\Entity\Category $category) {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \Pineipol\BaaBundle\Entity\Category $category
     */
    public function removeCategory(\Pineipol\BaaBundle\Entity\Category $category) {
        $this->categories->removeElement($category);
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategory() {
        return $this->categories;
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories() {
        return $this->categories;
    }

    /**
     * Add contents
     *
     * @param \Pineipol\BaaBundle\Entity\PostContent $contents
     * @return Post
     */
    public function addContent(\Pineipol\BaaBundle\Entity\PostContent $contents) {
        $this->contents[] = $contents;

        return $this;
    }

    /**
     * Remove contents
     *
     * @param \Pineipol\BaaBundle\Entity\PostContent $contents
     */
    public function removeContent(\Pineipol\BaaBundle\Entity\PostContent $contents) {
        $this->contents->removeElement($contents);
    }

    /**
     * Get contents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContents() {
        return $this->contents;
    }

    /**
     * Add comments
     *
     * @param \Pineipol\BaaBundle\Entity\Comment $comments
     * @return Post
     */
    public function addComment(\Pineipol\BaaBundle\Entity\Comment $comments) {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \Pineipol\BaaBundle\Entity\Comment $comments
     */
    public function removeComment(\Pineipol\BaaBundle\Entity\Comment $comments) {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments() {
        return $this->comments;
    }

    /**
     * Add links
     *
     * @param \Pineipol\BaaBundle\Entity\Link $links
     * @return Post
     */
    public function addLink(\Pineipol\BaaBundle\Entity\Link $links) {
        $this->links[] = $links;

        return $this;
    }

    /**
     * Remove links
     *
     * @param \Pineipol\BaaBundle\Entity\Link $links
     */
    public function removeLink(\Pineipol\BaaBundle\Entity\Link $links) {
        $this->links->removeElement($links);
    }

    /**
     * Get links
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLinks() {
        return $this->links;
    }

}
