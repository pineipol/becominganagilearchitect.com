<?php

namespace Pineipol\BaaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageContent
 *
 * @ORM\Table(name="page_contents", uniqueConstraints={@ORM\UniqueConstraint(name="page_content_id", columns={"page_content_id"})}, indexes={@ORM\Index(name="page_id", columns={"page_id"}), @ORM\Index(name="locale_id", columns={"locale_id"}), @ORM\Index(name="route_id", columns={"route_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class PageContent extends BaseEntity {

    /**
     * @var integer
     *
     * @ORM\Column(name="page_content_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pageContentId;

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
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_title", type="text", nullable=true)
     */
    private $metaTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_description", type="text", nullable=true)
     */
    private $metaDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_keywords", type="text", nullable=true)
     */
    private $metaKeywords;

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
     * @var \Pineipol\BaaBundle\Entity\Route
     *
     * @ORM\ManyToOne(targetEntity="Pineipol\BaaBundle\Entity\Route")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="route_id", referencedColumnName="route_id")
     * })
     */
    private $route;

    /**
     * @var \Pineipol\BaaBundle\Entity\Page
     *
     * @ORM\ManyToOne(targetEntity="Pineipol\BaaBundle\Entity\Page")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_id", referencedColumnName="page_id")
     * })
     */
    private $page;

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
     * Get pageContentId
     *
     * @return integer
     */
    public function getPageContentId() {
        return $this->pageContentId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return PageContent
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
     * @return PageContent
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
     * Set content
     *
     * @param string $content
     * @return PageContent
     */
    public function setContent($content) {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * Set metaTitle
     *
     * @param string $metaTitle
     * @return PageContent
     */
    public function setMetaTitle($metaTitle) {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * Get metaTitle
     *
     * @return string
     */
    public function getMetaTitle() {
        return $this->metaTitle;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     * @return PageContent
     */
    public function setMetaDescription($metaDescription) {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string
     */
    public function getMetaDescription() {
        return $this->metaDescription;
    }

    /**
     * Set metaKeywords
     *
     * @param string $metaKeywords
     * @return PageContent
     */
    public function setMetaKeywords($metaKeywords) {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * Get metaKeywords
     *
     * @return string
     */
    public function getMetaKeywords() {
        return $this->metaKeywords;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return PageContent
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
     * @return PageContent
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
     * @return PageContent
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

    /**
     * Set page
     *
     * @param \Pineipol\BaaBundle\Entity\Page $page
     * @return PageContent
     */
    public function setPage(\Pineipol\BaaBundle\Entity\Page $page = null) {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return \Pineipol\BaaBundle\Entity\Page
     */
    public function getPage() {
        return $this->page;
    }

    /**
     * Set locale
     *
     * @param \Pineipol\BaaBundle\Entity\Locale $locale
     * @return PageContent
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
