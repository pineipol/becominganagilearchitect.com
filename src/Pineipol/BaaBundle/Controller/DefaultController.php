<?php

namespace Pineipol\BaaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {

        return $this->render('PineipolBaaBundle:Default:index.html.twig');
    }

    public function rightColumnAction() {
        return $this->render('PineipolBaaBundle:Partials:right-column.html.twig');
    }

    public function contactAction() {
        return $this->render('PineipolBaaBundle:Partials:contact.html.twig');
    }

    public function listAction() {
        return $this->render('PineipolBaaBundle:Partials:list.html.twig');
    }
}
