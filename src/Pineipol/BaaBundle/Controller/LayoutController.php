<?php

namespace Pineipol\BaaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LayoutController extends Controller {

    public function headerAction() {

        return $this->render('PineipolBaaBundle:Partials:header.html.twig');
    }

    public function mobileMenuAction() {

        return $this->render('PineipolBaaBundle:Partials:mobile-menu.html.twig');
    }

}
