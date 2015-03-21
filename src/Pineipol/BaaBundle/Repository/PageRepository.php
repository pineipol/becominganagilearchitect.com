<?php

namespace Pineipol\BaaBundle\Repository;

use Doctrine\ORM\NoResultException;

class PageRepository extends CustomBaseRepository {

    /**
     * Find all related pages, pageContents, routes and locales to generate page-based routes
     *
     * @return array
     */
    public function findAllContentRoutes() {
        $query = $this->getEntityManager()
                ->createQuery('
                            SELECT pc, p, r, l
                            FROM PineipolBaaBundle:PageContent pc
                            JOIN pc.page p
                            JOIN pc.locale l
                            JOIN pc.route r
                        ');

        try {
            return $query->getResult();
        } catch (NoResultException $e) {
            return null;
        }
    }

    /**
     * Generate all page-based menu links and menu titles
     *
     * @param type $id
     * @param type $localeCode
     */
    public function findFullDataByLocale($id, $localeCode) {

        // Find locale entity instance by code
        $localeEntity = $this->findLocaleByCode($localeCode);

        $query = $this->getEntityManager()
                ->createQuery('
                            SELECT p, pc, l, r, ly
                            FROM PineipolBaaBundle:PageContent pc
                                JOIN pc.page p
                                JOIN pc.locale l
                                JOIN pc.route r
                                JOIN r.layout ly
                            WHERE
                                l.localeId = :localeId
                                AND p.pageId = :pageId'
                )
                ->setParameter('localeId', $localeEntity->getLocaleId())
                ->setParameter('pageId', $id);

        try {
            return $query->getSingleResult();
        } catch (NoResultException $e) {
            return null;
        }
    }

}
