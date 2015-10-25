<?php

namespace Pineipol\BaaBundle\Controller;

use Exception;
use Pineipol\BaaBundle\Entity\Comment;
use Pineipol\BaaBundle\Entity\User;
use Pineipol\BaaBundle\Form\Type\CommentFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class CommentController extends Controller {

    /**
     * Renders comment list and comment form partial and process its submit
     *
     * @return Response
     */
    public function commentListAction() {

        $session = new Session();

        // get request type from flash messages
        $sessionRequest = $session->getFlashBag()->get('request');
        if (count($sessionRequest)) {
            $requestType = $sessionRequest[0];

            $postInstance = $this->getDoctrine()
                    ->getRepository('PineipolBaaBundle:Post')
                    ->find($requestType['id']);

            $commentCollection = $this->getDoctrine()
                    ->getRepository('PineipolBaaBundle:Comment')
                    ->findByPost($postInstance);

            // set home request on flash messages
            $session->getFlashBag()->add('request', array(
                'type' => 'home',
                'id' => $requestType['id'],
            ));
        } else {
            $commentCollection = array();

            // set home request on flash messages
            $session->getFlashBag()->add('request', array(
                'type' => 'home',
                'id' => null,
            ));
        }

        return $this->render('PineipolBaaBundle:Partials:comment-list.html.twig', array(
            'layout' => false,
            'comments' => $commentCollection,
        ));
    }

    /**
     * Renders comment list and comment form partial and process its submit
     *
     * @return Response
     */
    public function commentFormAction() {

        $session = new Session();

        // get request type from flash messages
        $sessionRequest = $session->getFlashBag()->get('request');
        if (count($sessionRequest)) {
            $requestType = $sessionRequest[0];

            // set home request on flash messages
            $session->getFlashBag()->add('request', array(
                'type' => 'home',
                'id' => $requestType['id'],
            ));
        } else {
            // set home request on flash messages
            $session->getFlashBag()->add('request', array(
                'type' => 'home',
                'id' => null,
            ));
        }

        $request = $this->getRequest();

        $form = $this->createForm(new CommentFormType(), null, array(
            'action' => $this->get('router')->generate('pineipol_baa_comment-form-save')
        ));
        if (isset($requestType)) {
            $form->get('postId')->setData($requestType['id']);
        }
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                // Find current post by locale
                $postContentInstance = $this->getDoctrine()
                        ->getRepository('PineipolBaaBundle:Post')
                        ->findFullDataByIdAndLocale($form->getData()['postId'], $this->getRequest()->getLocale());

                try {
                    $this->container->get('pineipol_baa.comment_service')->saveNew($postContentInstance, $form->getData());

                    $this->container->get('pineipol_baa.email_service')->sendCommentFormUserEmail($form->getData());
                    $this->container->get('pineipol_baa.email_service')->sendCommentFormNotificationEmail($form->getData());

                    return $this->render('PineipolBaaBundle:Partials:comment-form-success.html.twig', array(
                        'form' => $form->createView(),
                        'route' => $postContentInstance->getRoute()->getName(),
                    ));
                } catch (Exception $e) {
                    return $this->render('PineipolBaaBundle:Partials:comment-form-failure.html.twig', array(
                        'form' => $form->createView(),
                        'route' => $postContentInstance->getRoute()->getName(),
                    ));
                }
            } else {
                return $this->render('PineipolBaaBundle:Partials:comment-form.html.twig', array(
                    'layout' => true,
                    'form' => $form->createView(),
                ));
            }
        }

        return $this->render('PineipolBaaBundle:Partials:comment-form.html.twig', array(
            'layout' => false,
            'form' => $form->createView(),
        ));
    }
}
