<?php

namespace Pineipol\BaaBundle\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class LocaleListener implements EventSubscriberInterface {

    private $defaultLocale;

    /**
     *
     * @param string $defaultLocale
     */
    public function __construct($defaultLocale = 'es') {
        $this->defaultLocale = $defaultLocale;
    }

    /**
     *
     * @param GetResponseEvent $event
     */
    public function onKernelRequest(GetResponseEvent $event) {

        $request = $event->getRequest();

        // try to see if the locale has been set as a _locale routing parameter
        $requestLocale = $request->attributes->get('_locale');
        $sessionLocale = $request->getSession()->get('_locale');
        if (!empty($requestLocale)) {
            $request->getSession()->set('_locale', $requestLocale);
        } elseif (!empty($sessionLocale)) {
            // if no explicit locale has been set on this request, use one from the session
            $request->setLocale($sessionLocale);
        } else {
            //$request->setLocale($this->defaultLocale);
            $preferredLanguage = $request->getPreferredLanguage();
            if (false !== strpos($preferredLanguage, '_')) {
                $preferredLanguage = split('_', $preferredLanguage);
                $preferredLanguage = $preferredLanguage[0];
            }
            if (!in_array($preferredLanguage, array('es', 'en'))) {
                $preferredLanguage = $this->defaultLocale;
            }
            $request->getSession()->set('_locale', $preferredLanguage);
        }
    }

    /**
     *
     * @return type
     */
    public static function getSubscribedEvents() {
        return array(
            // must be registered before the default Locale listener
            KernelEvents::REQUEST => array(array('onKernelRequest', 17)),
        );
    }

}
