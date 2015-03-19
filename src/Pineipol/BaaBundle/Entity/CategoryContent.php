<?php

namespace Pineipol\BaaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryContents
 *
 * @ORM\Table(name="category_contents", uniqueConstraints={@ORM\UniqueConstraint(name="category_locale", columns={"category_id", "locale_id"}), @ORM\UniqueConstraint(name="category_content_id", columns={"category_content_id"})}, indexes={@ORM\Index(name="category_id", columns={"category_id"}), @ORM\Index(name="locale_id", columns={"locale_id"})})
 * @ORM\Entity
 */
class CategoryContents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="category_content_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryContentId;

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
     * @var \Pineipol\BaaBundle\Entity\Categories
     *
     * @ORM\ManyToOne(targetEntity="Pineipol\BaaBundle\Entity\Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     * })
     */
    private $category;

    /**
     * @var \Pineipol\BaaBundle\Entity\Locales
     *
     * @ORM\ManyToOne(targetEntity="Pineipol\BaaBundle\Entity\Locales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locale_id", referencedColumnName="locale_id")
     * })
     */
    private $locale;



    /**
     * Get categoryContentId
     *
     * @return integer 
     */
    public function getCategoryContentId()
    {
        return $this->categoryContentId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return CategoryContents
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return CategoryContents
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
     * @return CategoryContents
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
     * @return CategoryContents
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
     * Set category
     *
     * @param \Pineipol\BaaBundle\Entity\Categories $category
     * @return CategoryContents
     */
    public function setCategory(\Pineipol\BaaBundle\Entity\Categories $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Pineipol\BaaBundle\Entity\Categories 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set locale
     *
     * @param \Pineipol\BaaBundle\Entity\Locales $locale
     * @return CategoryContents
     */
    public function setLocale(\Pineipol\BaaBundle\Entity\Locales $locale = null)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return \Pineipol\BaaBundle\Entity\Locales 
     */
    public function getLocale()
    {
        return $this->locale;
    }
}
