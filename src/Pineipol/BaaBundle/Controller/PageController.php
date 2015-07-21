<?php

namespace Pineipol\BaaBundle\Controller;

use Pineipol\BaaBundle\Form\Type\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class PageController extends Controller {

    /**
     * Finds one page by page id and returns an html page with its fulfilled content
     *
     * @param integer $id
     *
     * @return Response
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

        // Replace link placeholders with current locale based routes
        $linkPlaceholders = array();
        preg_match_all("/(?<=\[\[ROUTE:).*?(?=]])/s", $pageInstance->getContent(), $linkPlaceholders);
        foreach ($linkPlaceholders[0] as $link) {
            $searchString = '[[ROUTE:' . $link . ']]';
            $replaceString = $this->get('router')->generate($link . $this->getRequest()->getLocale());
            $pageInstance->setContent(str_replace($searchString, $replaceString, $pageInstance->getContent()));
        }

        return $this->render('PineipolBaaBundle:Pages:page.html.twig', array(
                    'layout' => $pageInstance->getRoute()->getLayout()->getFile(),
                    'pageContent' => $pageInstance,
        ));
    }

    /**
     * Renders contact form partial and process its submit
     *
     * @return Response
     */
    public function contactFormAction() {

        $request = $this->getRequest();

        $form = $this->createForm(new ContactFormType(), null, array('action' => $this->get('router')->generate('pineipol_baa_contact-form-save')));
        $form->handleRequest($request);

        if ($form->isValid()) {
//            $em = $this->getDoctrine()->getManager();

            $this->container->get('pineipol_baa.email_service')->sendContactFormEmail($form->getData());

            try {
                return $this->render('PineipolBaaBundle:Partials:contact-form-success.html.twig', array(
                    'form' => $form->createView(),
                ));
            } catch (\Exception $e) {
                return $this->render('PineipolBaaBundle:Partials:contact-form-failure.html.twig', array(
                    'form' => $form->createView(),
                ));
            }
        }

        return $this->render('PineipolBaaBundle:Partials:contact-form.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
