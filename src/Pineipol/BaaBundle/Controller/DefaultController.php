<?php

namespace Pineipol\BaaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('PineipolBaaBundle:Default:index.html.twig');
    }

    public function rightColumnAction() {
        return $this->render('PineipolBaaBundle:Default:right-column.html.twig');
    }

    public function contactAction() {
        return $this->render('PineipolBaaBundle:Default:contact.html.twig');
    }

    public function listAction() {
        return $this->render('PineipolBaaBundle:Default:list.html.twig');
    }
}
