<?php

namespace Pineipol\BaaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class LayoutController extends Controller {

    /**
     * Generate menu links and titles based on request locale
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function headerAction() {

        return $this->render('PineipolBaaBundle:Partials:header.html.twig', array(
                    'menus' => $this->getDoctrine()
                            ->getRepository('PineipolBaaBundle:Menu')
                            ->findAllPublicMenusByLocale($this->getRequest()->getLocale()),
        ));
    }

    /**
     * Generate mobile menu links and titles based on request locale
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function mobileMenuAction() {

        return $this->render('PineipolBaaBundle:Partials:mobile-menu.html.twig', array(
                    'menus' => $this->getDoctrine()
                            ->getRepository('PineipolBaaBundle:Menu')
                            ->findAllPublicMenusByLocale($this->getRequest()->getLocale()),
        ));
    }

    /**
     * Generate menu links and titles based on request locale
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function footerAction() {

        return $this->render('PineipolBaaBundle:Partials:footer.html.twig', array(
                    'menus' => $this->getDoctrine()
                            ->getRepository('PineipolBaaBundle:Menu')
                            ->findAllPublicMenusByLocale($this->getRequest()->getLocale()),
        ));
    }

    /**
     * Returns an html partial with home or post related links
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function rightColumnAction() {

        // get request type from flash messages
        $session = new Session();
        $requestType = $session->getFlashBag()->get('request')[0];

        // get home related links or post related ones
        if ('home' == $requestType['type']) {
            $linkCollection = $this->getDoctrine()
                    ->getRepository('PineipolBaaBundle:Link')
                    ->findHomeLinks();
        } elseif ('post' == $requestType['type'] && !empty($requestType['id'])) {
            $linkCollection = $this->getDoctrine()
                    ->getRepository('PineipolBaaBundle:Link')
                    ->findByPost($requestType['id']);
        }

        return $this->render('PineipolBaaBundle:Partials:right-column.html.twig', array(
                    'links' => $linkCollection,
        ));
    }

}
