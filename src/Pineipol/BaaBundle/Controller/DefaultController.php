<?php

namespace Pineipol\BaaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {

        $aa = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:Category')
                ->findAll();

        $aa = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:CategoryContent')
                ->findAll();

        $aa = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:CommentStatus')
                ->findAll();

        $aa = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:Comment')
                ->findAll();

        $aa = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:Label')
                ->findAll();

        $aa = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:Layout')
                ->findAll();

        $aa = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:Link')
                ->findAll();

        $aa = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:Locale')
                ->findAll();

        $aa = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:Menu')
                ->findAll();

        $aa = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:PageContent')
                ->findAll();

        $aa = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:Page')
                ->findAll();

        $aa = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:PostContent')
                ->findAll();

        $aa = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:Post')
                ->findAll();

        $aa = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:RouteType')
                ->findAll();

        $aa = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:Route')
                ->findAll();

        $aa = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:UserStatus')
                ->findAll();

        $aa = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:User')
                ->findAll();

        return $this->render('PineipolBaaBundle:Default:index.html.twig');
    }

    public function rightColumnAction() {
        return $this->render('PineipolBaaBundle:Partials:right-column.html.twig');
    }

    public function contactAction() {
        return $this->render('PineipolBaaBundle:Default:contact.html.twig');
    }

    public function listAction() {
        return $this->render('PineipolBaaBundle:Default:list.html.twig');
    }
}
