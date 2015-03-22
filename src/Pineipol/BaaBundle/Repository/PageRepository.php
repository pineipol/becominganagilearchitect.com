<?php

namespace Pineipol\BaaBundle\Repository;

use Doctrine\ORM\NoResultException;

class PageRepository extends CustomBaseRepository {

    /**
     * Find all related pages, pageContents, routes and locales to generate page-based routes
     *
     * @return array
     */
    public function findAllPageContentRoutes() {

        $query = $this->getEntityManager()
                ->createQuery('
                            SELECT pc, p, r, l, m
                            FROM PineipolBaaBundle:PageContent pc
                                JOIN pc.page p
                                JOIN pc.route r
                                JOIN pc.locale l
                                JOIN r.routeType rt
                                LEFT JOIN r.menu m
                            WHERE
                                rt.name = :route_type_name
                ')
                ->setParameter('route_type_name', $this->getContainer()->getParameter('route-types')['page']);
        try {
            return $query->getResult();
        } catch (NoResultException $e) {
            return null;
        }
    }

    /**
     * Get page all data by page id and locale string code
     *
     * @param integer $id
     * @param string $localeCode
     */
    public function findFullDataByIdAndLocale($id, $localeCode) {

        // Find locale entity instance by code
        $localeEntity = $this->findLocaleByCode($localeCode);

        $query = $this->getEntityManager()
                ->createQuery('
                            SELECT pc, p, l, r
                            FROM PineipolBaaBundle:PageContent pc
                                JOIN pc.page p
                                JOIN pc.locale l
                                JOIN pc.route r
                            WHERE
                                p.pageId = :pageId
                                AND l.localeId = :localeId
                ')
                ->setParameter('pageId', $id)
                ->setParameter('localeId', $localeEntity->getLocaleId());

        try {
            return $query->getSingleResult();
        } catch (NoResultException $e) {
            return null;
        }
    }
}
