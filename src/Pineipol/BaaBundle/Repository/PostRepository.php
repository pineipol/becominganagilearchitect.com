<?php

namespace Pineipol\BaaBundle\Repository;

use Doctrine\ORM\NoResultException;

class PostRepository extends CustomBaseRepository {

    /**
     * Find all related pages, pageContents, routes and locales to generate page-based routes
     *
     * @return array
     */
    public function findAllPostContentRoutes() {

        $query = $this->getEntityManager()
                ->createQuery('
                            SELECT pc, p, r, l, m
                            FROM PineipolBaaBundle:PostContent pc
                                JOIN pc.post p
                                JOIN pc.route r
                                JOIN pc.locale l
                                JOIN r.routeType rt
                                LEFT JOIN r.menu m
                            WHERE
                                rt.name = :route_type_name
                ')
                ->setParameter('route_type_name', $this->getContainer()->getParameter('route-types')['post']);
        try {
            return $query->getResult();
        } catch (NoResultException $e) {
            return null;
        }
    }

    /**
     * Find all posts by locale string code
     *
     * @param string $localeCode
     * @return \Doctrine\Common\Collections\Collection
     */
    public function findAllByLocale($localeCode) {

        // Find locale entity instance by code
        $localeEntity = $this->findLocaleByCode($localeCode);

        $query = $this->getEntityManager()
                ->createQuery('
                            SELECT pc, p, r, l, ly, c
                            FROM PineipolBaaBundle:PostContent pc
                                JOIN pc.post p
                                JOIN pc.locale l
                                JOIN pc.route r
                                JOIN r.layout ly
                                JOIN p.categories c
                            WHERE
                                l.localeId = :localeId
                                AND p.show = :show
                            ORDER BY
                                p.order DESC, c.name ASC
                ')
                ->setParameter('localeId', $localeEntity->getLocaleId())
                ->setParameter('show', 1);
        try {
            return $query->getResult();
        } catch (NoResultException $e) {
            return null;
        }
    }

    /**
     * Find filtered posts by category id and locale string code
     *
     * @param integer $categoryId
     * @param string $localeCode
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function findByCategoryAndLocale($categoryId, $localeCode) {

        // Find locale entity instance by code
        $localeEntity = $this->findLocaleByCode($localeCode);

        $query = $this->getEntityManager()
                ->createQuery('
                            SELECT pc, p, r, l, ly
                            FROM PineipolBaaBundle:PostContent pc
                                JOIN pc.post p
                                JOIN pc.locale l
                                JOIN pc.route r
                                JOIN r.layout ly
                                JOIN p.categories c
                            WHERE
                                c.categoryId = :categoryId
                                AND l.localeId = :localeId
                            ORDER BY
                                p.order DESC
                ')
                ->setParameter('categoryId', $categoryId)
                ->setParameter('localeId', $localeEntity->getLocaleId());
        try {
            return $query->getResult();
        } catch (NoResultException $e) {
            return null;
        }
    }

    /**
     * Get post all data by post id and locale string code
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
                            FROM PineipolBaaBundle:PostContent pc
                                JOIN pc.post p
                                JOIN pc.locale l
                                JOIN pc.route r
                            WHERE
                                p.postId = :postId
                                AND l.localeId = :localeId
                ')
                ->setParameter('postId', $id)
                ->setParameter('localeId', $localeEntity->getLocaleId());

        try {
            return $query->getSingleResult();
        } catch (NoResultException $e) {
            return null;
        }
    }
}
