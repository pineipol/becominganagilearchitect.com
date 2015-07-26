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

        // Replace link placeholders with current locale based routes
        $linkPlaceholders = array();
        preg_match_all("/(?<=\[\[ROUTE:).*?(?=]])/s", $postInstance->getContent(), $linkPlaceholders);
        foreach ($linkPlaceholders[0] as $link) {
            $searchString = '[[ROUTE:' . $link . ']]';
            $replaceString = $this->get('router')->generate($link . $this->getRequest()->getLocale());
            $postInstance->setContent(str_replace($searchString, $replaceString, $postInstance->getContent()));
        }

        return $this->render('PineipolBaaBundle:Default:post.html.twig', array(
                    'layout' => $postInstance->getRoute()->getLayout()->getFile(),
                    'postContent' => $postInstance,
        ));
    }

}
