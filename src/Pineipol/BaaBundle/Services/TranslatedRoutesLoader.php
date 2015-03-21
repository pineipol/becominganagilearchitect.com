<?php

namespace Pineipol\BaaBundle\Services;

use Doctrine\ORM\EntityManager;
use RuntimeException;
use Symfony\Component\Config\Loader\Loader;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class TranslatedRoutesLoader extends Loader {

    private $_loaded = false;
    private $_session = null;
    private static $_kernel = null;

    /**
     *
     * @param type $session
     * @param type $kernel
     */
    public function __construct($session, $kernel) {
        $this->_session = $session;
        self::$_kernel = $kernel;
    }

    /**
     * Gets Doctrine EM from service container
     *
     * @return EntityManager
     */
    private static function getDoctrineEm() {

        return self::$_kernel->getContainer()
                        ->get('doctrine')
                        ->getManager();
    }

    /**
     * Adds all DB special routes to received RouteCollection
     *
     * @param \Symfony\Component\Routing\RouteCollection $routes
     */
    private static function addCategoryRoutes(RouteCollection $routes) {

        $entityCollection = self::getDoctrineEm()->getRepository('PineipolBaaBundle:Category')->findAllCategoryRoutes();
        foreach ($entityCollection as $content) {
            // prepare a new route
            $pattern = $content->getRoute()->getPath();
            $defaults = array(
                '_controller' => $content->getRoute()->getAction(),
                'id' => $content->getCategory()->getCategoryId(),
                '_locale' => $content->getLocale()->getCode(),
            );
            $requirements = array(
                'id' => '\d+',
            );
            $route = new Route($pattern, $defaults, $requirements);

            // add the new route to the route collection:
            $routes->add($content->getRoute()->getName(), $route);
        }
    }

    /**
     * Adds all DB page routes to received RouteCollection
     *
     * @param \Symfony\Component\Routing\RouteCollection $routes
     */
    private static function addPageRoutes(RouteCollection $routes) {

        $entityCollection = self::getDoctrineEm()->getRepository('PineipolBaaBundle:Page')->findAllContentRoutes();
        foreach ($entityCollection as $content) {
            // prepare a new route
            $pattern = $content->getRoute()->getPath();
            $defaults = array(
                '_controller' => $content->getRoute()->getAction(),
                'id' => $content->getPage()->getPageId(),
                '_locale' => $content->getLocale()->getCode(),
            );
            $requirements = array(
                'id' => '\d+',
            );
            $route = new Route($pattern, $defaults, $requirements);

            // add the new route to the route collection:
            $routes->add($content->getRoute()->getName(), $route);
        }
    }

    /**
     * Adds all DB posts routes to received RouteCollection
     *
     * @param \Symfony\Component\Routing\RouteCollection $routes
     */
    private static function addPostRoutes(RouteCollection $routes) {

        $entityCollection = self::getDoctrineEm()->getRepository('PineipolBaaBundle:Post')->findAllContentRoutes();
        foreach ($entityCollection as $content) {
            // prepare a new route
            $pattern = $content->getRoute()->getPath();
            $defaults = array(
                '_controller' => $content->getRoute()->getAction(),
                'id' => $content->getPost()->getPostId(),
                '_locale' => $content->getLocale()->getCode(),
            );
            $requirements = array(
                'id' => '\d+',
            );
            $route = new Route($pattern, $defaults, $requirements);

            // add the new route to the route collection:
            $routes->add($content->getRoute()->getName(), $route);
        }
    }

    /**
     * Manages add all kind routes
     *
     * @param \Symfony\Component\Routing\RouteCollection $routes
     */
    private static function addRoutes(RouteCollection $routes) {

        self::addCategoryRoutes($routes);
//        self::addPageRoutes($routes);
//        self::addPostRoutes($routes);
    }

    /**
     * Generates routes from database entity titles
     *
     * @param string $resource
     * @param string $type
     * @return RouteCollection
     * @throws RuntimeException
     */
    public function load($resource, $type = null) {

        if (true === $this->_loaded) {
            throw new RuntimeException('Do not add the "extra" loader twice');
        }

        // Add all type routes
        $routes = new RouteCollection();
        self::addRoutes($routes);

        // Set loaded and return
        $this->_loaded = true;
        return $routes;
    }

    /**
     *
     * @param type $resource
     * @param type $type
     * @return type
     */
    public function supports($resource, $type = null) {
        return 'trans' === $type;
    }

}
