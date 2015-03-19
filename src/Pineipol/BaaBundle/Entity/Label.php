<?php

namespace Pineipol\BaaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Label
 *
 * @ORM\Table(name="labels", uniqueConstraints={@ORM\UniqueConstraint(name="label_id", columns={"label_id"}), @ORM\UniqueConstraint(name="locale_key", columns={"locale_id", "label_key"})}, indexes={@ORM\Index(name="locale_id", columns={"locale_id"}), @ORM\Index(name="label_key", columns={"label_key"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Label extends BaseEntity {

    /**
     * @var integer
     *
     * @ORM\Column(name="label_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $labelId;

    /**
     * @var string
     *
     * @ORM\Column(name="label_key", type="string", length=255, nullable=true)
     */
    private $labelKey;

    /**
     * @var string
     *
     * @ORM\Column(name="translation", type="text", length=65535, nullable=true)
     */
    private $translation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=true)
     */
    private $modified;

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
     * Get labelId
     *
     * @return integer
     */
    public function getLabelId() {
        return $this->labelId;
    }

    /**
     * Set labelKey
     *
     * @param string $labelKey
     * @return Label
     */
    public function setLabelKey($labelKey) {
        $this->labelKey = $labelKey;

        return $this;
    }

    /**
     * Get labelKey
     *
     * @return string
     */
    public function getLabelKey() {
        return $this->labelKey;
    }

    /**
     * Set translation
     *
     * @param string $translation
     * @return Label
     */
    public function setTranslation($translation) {
        $this->translation = $translation;

        return $this;
    }

    /**
     * Get translation
     *
     * @return string
     */
    public function getTranslation() {
        return $this->translation;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Label
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
     * @return Label
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
     * Set locale
     *
     * @param \Pineipol\BaaBundle\Entity\Locale $locale
     * @return Label
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
