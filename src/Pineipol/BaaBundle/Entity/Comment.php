<?php

namespace Pineipol\BaaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comments", uniqueConstraints={@ORM\UniqueConstraint(name="comment_id", columns={"comment_id"})}, indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="comment_status_id", columns={"comment_status_id"}), @ORM\Index(name="post_id", columns={"post_id"})})
 * @ORM\Entity(repositoryClass="Pineipol\BaaBundle\Repository\CommentRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Comment extends BaseEntity {

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commentId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=false)
     */
    private $content;

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
     * @var \Pineipol\BaaBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Pineipol\BaaBundle\Entity\User", inversedBy="comments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    /**
     * @var \Pineipol\BaaBundle\Entity\CommentStatus
     *
     * @ORM\ManyToOne(targetEntity="Pineipol\BaaBundle\Entity\CommentStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comment_status_id", referencedColumnName="comment_status_id")
     * })
     */
    private $commentStatus;

    /**
     * @var \Pineipol\BaaBundle\Entity\Post
     *
     * @ORM\ManyToOne(targetEntity="Pineipol\BaaBundle\Entity\Post", inversedBy="comments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_id", referencedColumnName="post_id")
     * })
     */
    private $post;

    /**
     * Get commentId
     *
     * @return integer
     */
    public function getCommentId() {
        return $this->commentId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Comment
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
     * Set content
     *
     * @param string $content
     * @return Comment
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
     * Set created
     *
     * @param \DateTime $created
     * @return Comment
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
     * @return Comment
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
     * Set user
     *
     * @param \Pineipol\BaaBundle\Entity\User $user
     * @return Comment
     */
    public function setUser(\Pineipol\BaaBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Pineipol\BaaBundle\Entity\User
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * Set commentStatus
     *
     * @param \Pineipol\BaaBundle\Entity\CommentStatus $commentStatus
     * @return Comment
     */
    public function setCommentStatus(\Pineipol\BaaBundle\Entity\CommentStatus $commentStatus = null) {
        $this->commentStatus = $commentStatus;

        return $this;
    }

    /**
     * Get commentStatus
     *
     * @return \Pineipol\BaaBundle\Entity\CommentStatus
     */
    public function getCommentStatus() {
        return $this->commentStatus;
    }

    /**
     * Set post
     *
     * @param \Pineipol\BaaBundle\Entity\Post $post
     * @return Comment
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
