<?php

namespace Pineipol\BaaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class CategoryController extends Controller {

    /**
     * Returns a By Category filtered home
     *
     * @param integer $id
     */
    public function getAction($id) {

        // set home request on flash messages
        $session = new Session();
        $session->getFlashBag()->add('request', array(
            'type' => 'home',
            'id' => null,
        ));

        $postCollection = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:Post')
                ->findByCategoryAndLocale($id, $this->getRequest()->getLocale());

        return $this->render('PineipolBaaBundle:Default:index.html.twig', array(
            'posts' => $postCollection,
        ));
    }
}
