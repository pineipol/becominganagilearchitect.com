<?php

namespace Pineipol\BaaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryContent
 *
 * @ORM\Table(name="category_contents", uniqueConstraints={@ORM\UniqueConstraint(name="category_locale", columns={"category_id", "locale_id"}), @ORM\UniqueConstraint(name="category_content_id", columns={"category_content_id"})}, indexes={@ORM\Index(name="category_id", columns={"category_id"}), @ORM\Index(name="locale_id", columns={"locale_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class CategoryContent extends BaseEntity {

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
     * @var \Pineipol\BaaBundle\Entity\Category
     *
     * @ORM\ManyToOne(targetEntity="Pineipol\BaaBundle\Entity\Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     * })
     */
    private $category;

    /**
     * @var \Pineipol\BaaBundle\Entity\Locale
     *
     * @ORM\ManyToOne(targetEntity="Pineipol\BaaBundle\Entity\Locale")
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
    public function getCategoryContentId() {
        return $this->categoryContentId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return CategoryContent
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
     * @return CategoryContent
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
     * Set created
     *
     * @param \DateTime $created
     * @return CategoryContent
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
     * @return CategoryContent
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
     * Set category
     *
     * @param \Pineipol\BaaBundle\Entity\Category $category
     * @return CategoryContent
     */
    public function setCategory(\Pineipol\BaaBundle\Entity\Category $category = null) {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Pineipol\BaaBundle\Entity\Category
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Set locale
     *
     * @param \Pineipol\BaaBundle\Entity\Locale $locale
     * @return CategoryContent
     */
    public function setLocale(\Pineipol\BaaBundle\Entity\Locale $locale = null) {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return \Pineipol\BaaBundle\Entity\Locale
     */
    public function getLocale() {
        return $this->locale;
    }

}
