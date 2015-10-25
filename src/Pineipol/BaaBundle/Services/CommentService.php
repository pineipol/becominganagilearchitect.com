<?php

namespace Pineipol\BaaBundle\Services;

use Doctrine\ORM\EntityManager;
use Pineipol\BaaBundle\Entity\Comment;
use Pineipol\BaaBundle\Entity\PostContent;
use Pineipol\BaaBundle\Entity\User;

/**
 *
 */
class CommentService {

    protected $_container;
    protected $_em;

    /**
     * Service constructor
     *
     * @param type $container
     */
    public function __construct($container, EntityManager $entityManager) {

        $this->_container = $container;
        $this->_em = $entityManager;
    }

    /**
     * Save a new comment related to one user. If user not exists creates it
     *
     * @param array $formData
     */
    public function saveNew(PostContent $postContentInstance, array $formData) {

        // Search user by email
        $userCollection = $this->_em->getRepository('PineipolBaaBundle:User')
                ->findByEmail($formData['email']);

        // If user doesn't exist create a new one
        if (!$userCollection) {
            // Find new user userStatus
            $userStatusCollection = $this->_em->getRepository('PineipolBaaBundle:UserStatus')
                    ->findByName($this->_container->getParameter('user')['status']['comment-user']);

            $userInstance = new User();
            $userInstance->setName($formData['name']);
            $userInstance->setEmail($formData['email']);
            $userInstance->setUsername($formData['name']);
            $userInstance->setActive(1);
            $userInstance->setUserStatus($userStatusCollection[0]);
            $this->_em->persist($userInstance);
        } else {
            $userInstance = $userCollection[0];
        }

        // Find new comment commentStatus
        $commentStatusCollection = $this->_em->getRepository('PineipolBaaBundle:CommentStatus')
                ->findByName($this->_container->getParameter('comment')['status']['new']);

        $commentInstance = new Comment();
        $commentInstance->setContent($formData['message']);
        $commentInstance->setUser($userInstance);
        $commentInstance->setCommentStatus($commentStatusCollection[0]);
        $commentInstance->setPost($postContentInstance->getPost());
        $this->_em->persist($commentInstance);
        $this->_em->flush();
    }

}
