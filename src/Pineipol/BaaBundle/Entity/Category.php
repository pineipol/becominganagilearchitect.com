<?php

namespace Pineipol\BaaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories", uniqueConstraints={@ORM\UniqueConstraint(name="category_id", columns={"category_id"}), @ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="parent_category_id", columns={"parent_category_id"}), @ORM\Index(name="category_type_id", columns={"category_type_id"})})
 * @ORM\Entity
 */
class Categories
{
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
     * @var integer
     *
     * @ORM\Column(name="category_type_id", type="integer", nullable=false)
     */
    private $categoryTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Pineipol\BaaBundle\Entity\Posts", mappedBy="category")
     */
    private $post;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->post = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set parentCategoryId
     *
     * @param integer $parentCategoryId
     * @return Categories
     */
    public function setParentCategoryId($parentCategoryId)
    {
        $this->parentCategoryId = $parentCategoryId;

        return $this;
    }

    /**
     * Get parentCategoryId
     *
     * @return integer 
     */
    public function getParentCategoryId()
    {
        return $this->parentCategoryId;
    }

    /**
     * Set categoryTypeId
     *
     * @param integer $categoryTypeId
     * @return Categories
     */
    public function setCategoryTypeId($categoryTypeId)
    {
        $this->categoryTypeId = $categoryTypeId;

        return $this;
    }

    /**
     * Get categoryTypeId
     *
     * @return integer 
     */
    public function getCategoryTypeId()
    {
        return $this->categoryTypeId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Categories
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
     * Set created
     *
     * @param \DateTime $created
     * @return Categories
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
     * @return Categories
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
     * Add post
     *
     * @param \Pineipol\BaaBundle\Entity\Posts $post
     * @return Categories
     */
    public function addPost(\Pineipol\BaaBundle\Entity\Posts $post)
    {
        $this->post[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \Pineipol\BaaBundle\Entity\Posts $post
     */
    public function removePost(\Pineipol\BaaBundle\Entity\Posts $post)
    {
        $this->post->removeElement($post);
    }

    /**
     * Get post
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPost()
    {
        return $this->post;
    }
}
