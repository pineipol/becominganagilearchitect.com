<?php

namespace Pineipol\BaaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostContents
 *
 * @ORM\Table(name="post_contents", uniqueConstraints={@ORM\UniqueConstraint(name="post_content_id", columns={"post_content_id"}), @ORM\UniqueConstraint(name="post_id_locale_id", columns={"post_id", "locale_id"})}, indexes={@ORM\Index(name="post_id", columns={"post_id"}), @ORM\Index(name="locale_id", columns={"locale_id"}), @ORM\Index(name="route_id", columns={"route_id"})})
 * @ORM\Entity
 */
class PostContents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="post_content_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $postContentId;

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
     * @var \Pineipol\BaaBundle\Entity\Routes
     *
     * @ORM\ManyToOne(targetEntity="Pineipol\BaaBundle\Entity\Routes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="route_id", referencedColumnName="route_id")
     * })
     */
    private $route;

    /**
     * @var \Pineipol\BaaBundle\Entity\Posts
     *
     * @ORM\ManyToOne(targetEntity="Pineipol\BaaBundle\Entity\Posts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_id", referencedColumnName="post_id")
     * })
     */
    private $post;

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
     * Get postContentId
     *
     * @return integer 
     */
    public function getPostContentId()
    {
        return $this->postContentId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return PostContents
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
     * @return PostContents
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
     * Set content
     *
     * @param string $content
     * @return PostContents
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set metaTitle
     *
     * @param string $metaTitle
     * @return PostContents
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    /**
     * Get metaTitle
     *
     * @return string 
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * Set metaDescription
     *
     * @param string $metaDescription
     * @return PostContents
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * Get metaDescription
     *
     * @return string 
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Set metaKeywords
     *
     * @param string $metaKeywords
     * @return PostContents
     */
    public function setMetaKeywords($metaKeywords)
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    /**
     * Get metaKeywords
     *
     * @return string 
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return PostContents
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
     * @return PostContents
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
     * Set route
     *
     * @param \Pineipol\BaaBundle\Entity\Routes $route
     * @return PostContents
     */
    public function setRoute(\Pineipol\BaaBundle\Entity\Routes $route = null)
    {
        $this->route = $route;

        return $this;
    }

    /**
     * Get route
     *
     * @return \Pineipol\BaaBundle\Entity\Routes 
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Set post
     *
     * @param \Pineipol\BaaBundle\Entity\Posts $post
     * @return PostContents
     */
    public function setPost(\Pineipol\BaaBundle\Entity\Posts $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \Pineipol\BaaBundle\Entity\Posts 
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set locale
     *
     * @param \Pineipol\BaaBundle\Entity\Locales $locale
     * @return PostContents
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
