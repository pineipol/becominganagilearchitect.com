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
     * When contact form request is generated sends an email to requesting user
     *
     * @param array $contactFormData
     */
    public function sendContactFormUserEmail(array $contactFormData) {

        $message = Swift_Message::newInstance()
                ->setContentType("text/html")
                ->setSubject($this->_container->getParameter('emailing')['contactUserResponse']['subject'])
                ->setFrom($this->_container->getParameter('emailing')['contactUserResponse']['fromAddress'])
                ->setTo(array(
                    $contactFormData['email']
                ))
                ->setBody($this->_container->get('twig')->render($this->_container->getParameter('emailing')['contactUserResponse']['template'], array(
                    'name' => $contactFormData['name'],
                    'email' => $contactFormData['email'],
                    'subject' => $contactFormData['subject'],
                    'message' => $contactFormData['message'],
        )));
        $this->_container->get('mailer')->send($message);
    }

    /**
     * When contact form request is generated sends an email to blog owner
     *
     * @param array $contactFormData
     */
    public function sendContactFormNotificationEmail(array $contactFormData) {

        $message = Swift_Message::newInstance()
                ->setContentType("text/html")
                ->setSubject($this->_container->getParameter('emailing')['contactNotification']['subject'])
                ->setFrom($this->_container->getParameter('emailing')['contactNotification']['fromAddress'])
                ->setTo(array(
                    $this->_container->getParameter('emailing')['contactNotification']['toAddress']
                ))
                ->setBody($this->_container->get('twig')->render($this->_container->getParameter('emailing')['contactNotification']['template'], array(
                    'name' => $contactFormData['name'],
                    'email' => $contactFormData['email'],
                    'subject' => $contactFormData['subject'],
                    'message' => $contactFormData['message'],
        )));
        $this->_container->get('mailer')->send($message);
    }

}