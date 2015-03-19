<?php

namespace Pineipol\BaaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="user_id", columns={"user_id"}), @ORM\UniqueConstraint(name="email", columns={"email"}), @ORM\UniqueConstraint(name="username", columns={"username"})}, indexes={@ORM\Index(name="user_status_id", columns={"user_status_id"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class User extends BaseEntity {

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255, nullable=true)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="passwd", type="string", length=255, nullable=true)
     */
    private $passwd;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    private $active;

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
     * @var \Pineipol\BaaBundle\Entity\UserStatus
     *
     * @ORM\ManyToOne(targetEntity="Pineipol\BaaBundle\Entity\UserStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_status_id", referencedColumnName="user_status_id")
     * })
     */
    private $userStatus;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="\Pineipol\BaaBundle\Entity\Comment", mappedBy="user")
     */
    private $comments;

    /**
     * Constructor
     */
    public function __construct() {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId() {
        return $this->userId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
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
     * Set surname
     *
     * @param string $surname
     * @return User
     */
    public function setSurname($surname) {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname() {
        return $this->surname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set passwd
     *
     * @param string $passwd
     * @return User
     */
    public function setPasswd($passwd) {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd
     *
     * @return string
     */
    public function getPasswd() {
        return $this->passwd;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return User
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
     * Set active
     *
     * @param integer $active
     * @return User
     */
    public function setActive($active) {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return integer
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return User
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
     * @return User
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
     * Set userStatus
     *
     * @param \Pineipol\BaaBundle\Entity\UserStatus $userStatus
     * @return User
     */
    public function setUserStatus(\Pineipol\BaaBundle\Entity\UserStatus $userStatus = null) {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * Get userStatus
     *
     * @return \Pineipol\BaaBundle\Entity\UserStatus
     */
    public function getUserStatus() {
        return $this->userStatus;
    }

}
