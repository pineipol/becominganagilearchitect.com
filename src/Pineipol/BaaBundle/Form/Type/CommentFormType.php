<?php

namespace Pineipol\BaaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class CommentFormType extends AbstractType {

    /**
     *
     * @param FormBuilderInterface $builder
     * @param array $options
     * @param type $actionRoute
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->setAction($options['action'])
                ->add('postId', 'hidden', array())
                ->add('name', 'text', array(
                    'constraints' => array(new NotBlank(array(
                        'message' => 'pages.comment.form.name.validate_blank',
                    ))),
                    'label' => 'pages.comment.form.name',
                ))
                ->add('email', 'email', array(
                    'constraints' => array(new NotBlank(array(
                        'message' => 'pages.comment.form.email.validate_blank',
                    )), new Email(array(
                        'message' => 'pages.comment.form.email.validate_invalid_format',
                    ))),
                    'label' => 'pages.comment.form.email',
                ))
                ->add('message', 'textarea', array(
                    'constraints' => array(new NotBlank(array(
                        'message' => 'pages.comment.form.message.validate_blank',
                    ))),
                    'label' => 'pages.comment.form.message',
                    'attr' => array(
                        'style' => 'height:100px'
                    ),
                ))
                ->add('captcha', 'captcha', array(
                    'constraints' => array(new NotBlank(array(
                        'message' => 'pages.comment.form.captcha.validate_error',
                    ))),
                    'label' => 'pages.comment.form.captcha',
                ))
                ->add('send', 'submit', array(
                    'label' => 'pages.comment.form.submit',
                    'attr' => array(
                        'class' => 'comment-form-submit'
                    ),
        ));
    }

    /**
     *
     * @return string
     */
    public function getName() {
        return 'commentForm';
    }

}
