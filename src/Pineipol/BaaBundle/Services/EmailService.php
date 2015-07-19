<?php

namespace Pineipol\BaaBundle\Services;

use Symfony\Component\HttpFoundation\Request;

/**
 *
 */
class EmailService {

    protected $_container;

    /**
     * Service constructor
     *
     * @param type $container
     */
    public function __construct($container) {

        $this->_container = $container;
    }


    /**
     *
     * @param type $form
     * @return type
     */
    public function sendContactFormEmail(array $contactFormData) {

        echo '<br><br><br><br>';
        echo $this->_container->getParameter('emailing')['contact']['toAddress'];


//$contactFormData['name']
//$contactFormData['email']
//$contactFormData['subject']
//$contactFormData['message']




    }

}
