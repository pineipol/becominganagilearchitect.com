<?php

namespace Pineipol\BaaBundle\Repository;

use Doctrine\ORM\NoResultException;

class LinkRepository extends CustomBaseRepository {

    /**
     * Find not post related links
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function findUnrelated() {

        $query = $this->getEntityManager()
                ->createQuery('
                            SELECT l, p
                            FROM PineipolBaaBundle:Link l
                                LEFT JOIN l.post p
                            WHERE p IS NULL
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
                                JOIN l.post p
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
