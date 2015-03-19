<?php

namespace Pineipol\BaaBundle\Entity;

use AppKernel;
use DateTime;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping as ORM;
use ReflectionClass;

class BaseEntity {

    // static kernel service container
    private static $_kernel = null;

    /**
     * Set environment
     */
    public static function kernelBoot() {
        $environment = 'prod';
        if (!array_key_exists('REMOTE_ADDR', $_SERVER)) {
            $environment = 'test';
        } elseif (false !== strpos(@$_SERVER['REMOTE_ADDR'], 'local')) {
            $environment = 'dev';
        }
        self::$_kernel = new AppKernel($environment, false);
        self::$_kernel->boot();
    }

    /**
     * Gets Doctrine EM from service container
     *
     * @return EntityManager
     */
    public static function getDoctrineEm() {

        if (is_null(self::$_kernel)) {
            self::kernelBoot();
        }
        return self::$_kernel->getContainer()
                        ->get('doctrine')
                        ->getManager();
    }

    /**
     * Gets Validator from service container
     *
     * @return EntityManager
     */
    public static function getValidator() {

        if (is_null(self::$_kernel)) {
            self::kernelBoot();
        }
        return self::$_kernel->getContainer()
                        ->get('validator');
    }

    /**
     * @ORM\PrePersist
     */
    public function prePersist() {

        $rc = new ReflectionClass(get_class($this));
        if ($rc->hasMethod('getTitle') && $rc->hasMethod('setName')) {
            $this->setName(str_replace(' ', '-', strtolower($this->getTitle())));
        }
        $this->setCreated(new DateTime('now'));
        $this->setModified(new DateTime('now'));
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate() {

        $rc = new ReflectionClass(get_class($this));
        if ($rc->hasMethod('getTitle') && $rc->hasMethod('setName')) {
            $this->setName(str_replace(' ', '-', strtolower($this->getTitle())));
        }
        $this->setModified(new DateTime('now'));
    }

}
