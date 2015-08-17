<?php

namespace Pineipol\BaaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller {

    /**
     * Home page action
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction() {

        // set home request on flash messages
        $session = new Session();
        $session->getFlashBag()->add('request', array(
            'type' => 'home',
            'id' => null,
        ));

        $postCollection = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:Post')
                ->findAllByLocale($this->getRequest()->getLocale());

//        $a1Collection = $this->getDoctrine()
//                ->getRepository('PineipolBaaBundle:Post')
//                ->findAll();
//        $a2Collection = $this->getDoctrine()
//                ->getRepository('PineipolBaaBundle:Link')
//                ->findAll();
//        $a3Collection = $this->getDoctrine()
//                ->getRepository('PineipolBaaBundle:Category')
//                ->findAll();

//        return $this->render('PineipolBaaBundle:Design/Posts/Scrum:08-grooming-meeting.html.twig');
        return $this->render('PineipolBaaBundle:Default:index.html.twig', array(
            'posts' => $postCollection,
        ));
    }

}
