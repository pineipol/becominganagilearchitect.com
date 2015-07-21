<?php

namespace Pineipol\BaaBundle\Services;

use Swift_Message;

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

        $message = Swift_Message::newInstance()
                ->setContentType("text/html")
                ->setSubject($this->_container->getParameter('emailing')['contact']['subject'])
                ->setFrom($this->_container->getParameter('emailing')['contact']['fromAddress'])
                ->setTo(array(
                    $this->_container->getParameter('emailing')['contact']['toAddress']
                ))
                ->setBody($this->_container->get('twig')->render($this->_container->getParameter('emailing')['contact']['template'], array(
                    'name' => $contactFormData['name'],
                    'email' => $contactFormData['email'],
                    'subject' => $contactFormData['subject'],
                    'message' => $contactFormData['message'],
        )));
        $this->_container->get('mailer')->send($message);
    }

}
