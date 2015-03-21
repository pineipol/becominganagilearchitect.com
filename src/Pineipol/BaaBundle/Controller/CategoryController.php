<?php

namespace Pineipol\BaaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller {

    /**
     *
     * @param integer $id
     */
    public function getAction($id) {

        return $this->render('PineipolBaaBundle:Default:list.html.twig');
    }
}
