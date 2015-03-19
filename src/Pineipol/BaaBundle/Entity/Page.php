<?php

namespace Pineipol\BaaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table(name="pages", uniqueConstraints={@ORM\UniqueConstraint(name="page_id", columns={"page_id"}), @ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="order", columns={"order"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Page extends BaseEntity {

    /**
     * @var integer
     *
     * @ORM\Column(name="page_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="order", type="integer", nullable=true)
     */
    private $order;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="js_callback", type="text", nullable=true)
     */
    private $jsCallback;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_private", type="integer", nullable=true)
     */
    private $isPrivate;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="\Pineipol\BaaBundle\Entity\PageContent", mappedBy="page")
     */
    private $contents;

    /**
     * Constructor
     */
    public function __construct() {
        $this->contents = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get pageId
     *
     * @return integer
     */
    public function getPageId() {
        return $this->pageId;
    }

    /**
     * Set order
     *
     * @param integer $order
     * @return Page
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
     * Set name
     *
     * @param string $name
     * @return Page
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
     * Set jsCallback
     *
     * @param string $jsCallback
     * @return Page
     */
    public function setJsCallback($jsCallback) {
        $this->jsCallback = $jsCallback;

        return $this;
    }

    /**
     * Get jsCallback
     *
     * @return string
     */
    public function getJsCallback() {
        return $this->jsCallback;
    }

    /**
     * Set isPrivate
     *
     * @param integer $isPrivate
     * @return Page
     */
    public function setIsPrivate($isPrivate) {
        $this->isPrivate = $isPrivate;

        return $this;
    }

    /**
     * Get isPrivate
     *
     * @return integer
     */
    public function getIsPrivate() {
        return $this->isPrivate;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Page
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
     * @return Page
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
     * Add contents
     *
     * @param \Pineipol\BaaBundle\Entity\PageContent $contents
     * @return Page
     */
    public function addContent(\Pineipol\BaaBundle\Entity\PageContent $contents) {
        $this->contents[] = $contents;

        return $this;
    }

    /**
     * Remove contents
     *
     * @param \Pineipol\BaaBundle\Entity\PageContent $contents
     */
    public function removeContent(\Pineipol\BaaBundle\Entity\PageContent $contents) {
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
