<?php

namespace Pineipol\BaaBundle\Repository;

use Doctrine\ORM\NoResultException;

class CategoryRepository extends CustomBaseRepository {

    /**
     * Find all related menus and routes
     *
     * @return array
     */
    public function findAllCategoryRoutes() {

        $query = $this->getEntityManager()
                ->createQuery('
                            SELECT cc, c, r, l, m
                            FROM PineipolBaaBundle:CategoryContent cc
                                JOIN cc.category c
                                JOIN cc.route r
                                JOIN cc.locale l
                                JOIN r.routeType rt
                                LEFT JOIN r.menu m
                            WHERE
                                rt.name = :route_type_name
                ')
                ->setParameter('route_type_name', $this->getContainer()->getParameter('route-types')['category']);
        try {
            return $query->getResult();
        } catch (NoResultException $e) {
            return null;
        }
    }
}
