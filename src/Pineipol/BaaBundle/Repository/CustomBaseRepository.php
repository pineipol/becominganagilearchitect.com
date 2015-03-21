<?php

namespace Pineipol\BaaBundle\Repository;

use AppKernel;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

/**
 * Repository base class. This class is used to centralice access to Doctrine EM
 * from an static context
 */
class CustomBaseRepository extends EntityRepository {

    // static kernel service container
    private static $_kernel = null;

    /**
     * Find locale entity instance by code
     *
     * @param string $localeCode
     * @return Gamelearn\WebBundle\Entity\Locale
     */
    public function findLocaleByCode($localeCode) {

        return $this->getEntityManager()
                        ->getRepository('GamelearnWebBundle:Locale')
                        ->findOneByCode($localeCode);
    }

    /**
     * Set environment and gets symfony container
     *
     * @return EntityManager
     */
    public static function getContainer() {

        if (!self::$_kernel) {
            $environment = 'pro';
            if (!array_key_exists('REMOTE_ADDR', $_SERVER)) {
                $environment = 'test';
            } elseif (false !== strpos(@$_SERVER['REMOTE_ADDR'], 'local')) {
                $environment = 'dev';
            }
            self::$_kernel = new AppKernel($environment, false);
            self::$_kernel->boot();
        }
        return self::$_kernel->getContainer();
    }

    /**
     * Set environment and gets Doctrine EM from service container
     *
     * @return EntityManager
     */
    public static function getDoctrineEm() {

        return self::getContainer()
                        ->get('doctrine')
                        ->getManager();
    }

}
