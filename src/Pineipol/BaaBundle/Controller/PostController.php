<?php

namespace Pineipol\BaaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class PostController extends Controller {

    /**
     * Finds one post by post id and returns an html page with its fulfilled content
     *
     * @param integer $id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAction($id) {

        // set home request on flash messages
        $session = new Session();
        $session->getFlashBag()->add('request', array(
            'type' => 'post',
            'id' => $id,
        ));

        $postInstance = $this->getDoctrine()
                ->getRepository('PineipolBaaBundle:Post')
                ->findFullDataByIdAndLocale($id, $this->getRequest()->getLocale());

        return $this->render('PineipolBaaBundle:Default:post.html.twig', array(
                    'postContent' => $postInstance,
        ));
    }

}
