<?php

namespace Pineipol\BaaBundle\Services;

use Symfony\Component\Translation\Loader\LoaderInterface;
use Symfony\Component\Translation\MessageCatalogue;
use Doctrine\ORM\EntityManager;

class DbTranslationLoader implements LoaderInterface {

    private $_translationRepository;
    private $_languageRepository;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager) {

        $this->_translationRepository = $entityManager->getRepository("PineipolBaaBundle:Label");
        $this->_languageRepository = $entityManager->getRepository("PineipolBaaBundle:Locale");
    }

    /**
     *
     * @param type $resource
     * @param type $localeCode
     * @param type $domain
     * @return MessageCatalogue
     */
    function load($resource, $localeCode, $domain = 'messages') {

        $localeInstance = $this->_languageRepository->findBy(array('code' => $localeCode));
        $labelsCollection = $this->_translationRepository->findBy(array('locale' => $localeInstance));

        $catalogue = new MessageCatalogue($localeCode);
        foreach ($labelsCollection as $label) {
            $catalogue->set($label->getLabelKey(), $label->getTranslation(), $domain);
        }

        return $catalogue;
    }

}
