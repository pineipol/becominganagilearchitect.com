<?php

namespace Pineipol\BaaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories", uniqueConstraints={@ORM\UniqueConstraint(name="category_id", columns={"category_id"}), @ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="parent_category_id", columns={"parent_category_id"})})
 * @ORM\Entity(repositoryClass="Pineipol\BaaBundle\Repository\CategoryRepository")
 * @ORM\HasLifecycleCallbacks
  */
class Category extends BaseEntity {

    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryId;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_category_id", type="integer", nullable=true)
     */
    private $parentCategoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255, nullable=false)
     */
    private $color;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
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
     * @ORM\ManyToMany(targetEntity="Pineipol\BaaBundle\Entity\Post", mappedBy="categories")
     */
    private $posts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="\Pineipol\BaaBundle\Entity\CategoryContent", mappedBy="category")
     */
    private $contents;

    /**
     * Constructor
     */
    public function __construct() {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contents = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId() {
        return $this->categoryId;
    }

    /**
     * Set parentCategoryId
     *
     * @param integer $parentCategoryId
     * @return Category
     */
    public function setParentCategoryId($parentCategoryId) {
        $this->parentCategoryId = $parentCategoryId;

        return $this;
    }

    /**
     * Get parentCategoryId
     *
     * @return integer
     */
    public function getParentCategoryId() {
        return $this->parentCategoryId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Category
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
     * Set color
     *
     * @param string $color
     * @return Category
     */
    public function setColor($color) {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Category
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
     * @return Category
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
     * Add post
     *
     * @param \Pineipol\BaaBundle\Entity\Post $post
     * @return Category
     */
    public function addPost(\Pineipol\BaaBundle\Entity\Post $post) {
        $this->posts[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \Pineipol\BaaBundle\Entity\Post $post
     */
    public function removePost(\Pineipol\BaaBundle\Entity\Post $post) {
        $this->posts->removeElement($post);
    }

    /**
     * Get post
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosts() {
        return $this->posts;
    }

    /**
     * Add contents
     *
     * @param \Pineipol\BaaBundle\Entity\CategoryContent $contents
     * @return Category
     */
    public function addContent(\Pineipol\BaaBundle\Entity\CategoryContent $contents) {
        $this->contents[] = $contents;

        return $this;
    }

    /**
     * Remove contents
     *
     * @param \Pineipol\BaaBundle\Entity\CategoryContent $contents
     */
    public function removeContent(\Pineipol\BaaBundle\Entity\CategoryContent $contents) {
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

}
