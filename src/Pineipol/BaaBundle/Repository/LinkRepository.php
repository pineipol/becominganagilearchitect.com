<?php

namespace Pineipol\BaaBundle\Repository;

use Doctrine\ORM\NoResultException;

class LinkRepository extends CustomBaseRepository {

    /**
     * Find home related links
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function findHomeLinks() {

        $query = $this->getEntityManager()
                ->createQuery('
                            SELECT l
                            FROM PineipolBaaBundle:Link l
                            WHERE l.home=1
                ');
        try {
            return $query->getResult();
        } catch (NoResultException $e) {
            return null;
        }
    }

    /**
     * Find post related links
     *
     * @param integer $id
     * @return \Doctrine\Common\Collections\Collection
     */
    public function findByPost($id) {

        $query = $this->getEntityManager()
                ->createQuery('
                            SELECT l, p
                            FROM PineipolBaaBundle:Link l
                                JOIN l.posts p
                            WHERE
                                p.postId = :postId
                ')
                ->setParameter('postId', $id);
        try {
            return $query->getResult();
        } catch (NoResultException $e) {
            return null;
        }
    }
}
