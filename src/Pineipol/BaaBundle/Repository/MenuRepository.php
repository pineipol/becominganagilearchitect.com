<?php

namespace Pineipol\BaaBundle\Repository;

use Doctrine\ORM\NoResultException;
use Pineipol\BaaBundle\Entity\Locale;

class MenuRepository extends CustomBaseRepository {

    /**
     * Find menus for category related routes
     *
     * @param Locale $localeEntity
     * @return array
     */
    protected function findAllCategoryRoutes(Locale $localeEntity) {

        $routesArray = array();
        try {
            $categoryMenusQuery = $this->getEntityManager()
                    ->createQuery('
                                SELECT cc, c, r, l, m
                                FROM PineipolBaaBundle:CategoryContent cc
                                    JOIN cc.category c
                                    JOIN cc.route r
                                    JOIN cc.locale l
                                    JOIN r.menu m
                                WHERE
                                    l.localeId = :localeId
                                    AND c.parentCategoryId is NULL
                                    AND m.show = :showMenu
                                ORDER BY cc.title ASC'
                    )
                    ->setParameter('localeId', $localeEntity->getLocaleId())
                    ->setParameter('showMenu', 1);

            $categoryMenusCollection = $categoryMenusQuery->getResult();
            foreach ($categoryMenusCollection as $routeMenu) {
                $routesArray[] = array(
                    'route' => $routeMenu->getRoute()->getName(),
                    'title' => $routeMenu->getRoute()->getMenu()[0]->getTitle(),
                );
            }
            return $routesArray;
        } catch (NoResultException $e) {
            return array();
        }
    }

    /**
     * Find menus for page related routes
     *
     * @param Locale $localeEntity
     * @return array
     */
    protected function findAllPageRoutes(Locale $localeEntity) {

        $routesArray = array();
        try {
            $pageMenusQuery = $this->getEntityManager()
                    ->createQuery('
                                SELECT pc, p, r, l, m
                                FROM PineipolBaaBundle:PageContent pc
                                    JOIN pc.page p
                                    JOIN pc.route r
                                    JOIN pc.locale l
                                    JOIN r.menu m
                                WHERE
                                    l.localeId = :localeId
                                    AND m.show = :showMenu
                                ORDER BY p.order ASC'
                    )
                    ->setParameter('localeId', $localeEntity->getLocaleId())
                    ->setParameter('showMenu', 1);

            $pageMenusCollection = $pageMenusQuery->getResult();
            foreach ($pageMenusCollection as $routeMenu) {
                $routesArray[] = array(
                    'route' => $routeMenu->getRoute()->getName(),
                    'title' => $routeMenu->getRoute()->getMenu()[0]->getTitle(),
                );
            }
            return $routesArray;
        } catch (NoResultException $e) {
            return array();
        }
    }

    /**
     * Generate all page and category based menu links and menu titles
     *
     * @param string $localeCode
     * @return array
     */
    public function findAllPublicMenusByLocale($localeCode) {

        // Find locale entity instance by code
        $localeEntity = $this->findLocaleByCode($localeCode);

        $categoryRoutesArray = $this->findAllCategoryRoutes($localeEntity);
        $pageRoutesArray = $this->findAllPageRoutes($localeEntity);

        return array_merge($categoryRoutesArray, $pageRoutesArray);
    }

}
