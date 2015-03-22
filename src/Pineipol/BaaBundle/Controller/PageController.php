<?php

namespace Pineipol\BaaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class PageController extends Controller {

    /**
     * Finds one page by page id and returns an html page with its fulfilled content
     *
     * @param integer $id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAction($id) {

        // set home request on flash messages
        $session = new Session();
        $session->getFlashBag()->add('request', array(
            'type' => 'home',
            'id' => null,
        ));

        $pageInstance = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:Page')
                ->findFullDataByIdAndLocale($id, $this->getRequest()->getLocale());

        return $this->render('PineipolBaaBundle:Pages:page.html.twig', array(
                    'pageContent' => $pageInstance,
        ));
    }
}
