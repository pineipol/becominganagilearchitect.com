<?php

namespace Pineipol\BaaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class ContactFormType extends AbstractType {

    /**
     *
     * @param FormBuilderInterface $builder
     * @param array $options
     * @param type $actionRoute
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->setAction($options['action'])
                ->add('name', 'text', array(
                    'constraints' => array(new NotBlank()),
                    'label' => 'pages.contact.form.name',
                ))
                ->add('email', 'email', array(
                    'constraints' => array(new NotBlank(), new Email()),
                    'label' => 'pages.contact.form.email',
                ))
                ->add('subject', 'text', array(
                    'constraints' => array(new NotBlank()),
                    'label' => 'pages.contact.form.subject',
                ))
                ->add('message', 'textarea', array(
                    'constraints' => array(new NotBlank()),
                    'label' => 'pages.contact.form.message',
                    'attr' => array(
                        'style' => 'height:100px'
                    ),
                ))
//                ->add('captcha', 'captcha', array(
//                    'constraints' => array(new NotBlank()),
//                    'label' => 'pages.contact.form.captcha',
//                ))
                ->add('send', 'submit', array(
                    'label' => 'pages.contact.form.submit',
                    'attr' => array(
                        'class' => 'contact-form-submit'
                    ),
        ));
    }

    /**
     *
     * @return string
     */
    public function getName() {
        return 'contactForm';
    }

}
