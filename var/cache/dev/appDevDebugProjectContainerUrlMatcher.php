<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // we_zik_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'we_zik_homepage');
            }

            return array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::indexAction',  '_route' => 'we_zik_homepage',);
        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'WeZikBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // info
        if ('/info' === $pathinfo) {
            return array (  '_controller' => 'WeZikBundle\\Controller\\SecurityController::loginAction',  '_route' => 'info',);
        }

        // generate_user
        if ('/user' === $pathinfo) {
            return array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::userToJSONAction',  '_route' => 'generate_user',);
        }

        // generate_morceau
        if ('/morceau' === $pathinfo) {
            return array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::morceauToJSONAction',  '_route' => 'generate_morceau',);
        }

        if (0 === strpos($pathinfo, '/tag')) {
            // generate_tag
            if ('/tag' === $pathinfo) {
                return array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::tagToJSONAction',  '_route' => 'generate_tag',);
            }

            // showTag
            if (0 === strpos($pathinfo, '/tags') && preg_match('#^/tags/(?P<id_tag>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showTag')), array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::showTagAction',));
            }

        }

        // test123
        if ('/test' === $pathinfo) {
            return array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::testReturn123Action',  '_route' => 'test123',);
        }

        if (0 === strpos($pathinfo, '/play')) {
            // generate_playlist
            if ('/playlist' === $pathinfo) {
                return array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::playlistToJSONAction',  '_route' => 'generate_playlist',);
            }

            // playJSON
            if (preg_match('#^/play/(?P<id_playlist>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'playJSON')), array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::playJSONAction',));
            }

        }

        // showUser
        if (0 === strpos($pathinfo, '/profile') && preg_match('#^/profile/(?P<id_user>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'showUser')), array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::showUserAction',));
        }

        // addToPlaylist
        if (0 === strpos($pathinfo, '/add') && preg_match('#^/add/(?P<id_playlist>[^/]++)/(?P<id_morceau>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addToPlaylist')), array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::addToPlaylistAction',));
        }

        // retireFromPlaylist
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id_playlist>[^/]++)/(?P<id_morceau>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'retireFromPlaylist')), array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::retireFromPlaylistAction',));
        }

        if (0 === strpos($pathinfo, '/get')) {
            if (0 === strpos($pathinfo, '/get/playlist')) {
                // getPlaylist
                if (preg_match('#^/get/playlist/(?P<id_playlist>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'getPlaylist')), array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::getPlaylistAction',));
                }

                // getAllPlaylists
                if ('/get/playlists' === $pathinfo) {
                    return array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::getAllPlaylistsAction',  '_route' => 'getAllPlaylists',);
                }

            }

            elseif (0 === strpos($pathinfo, '/get/tag')) {
                // getTaglist
                if (preg_match('#^/get/tag/(?P<id_taglist>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'getTaglist')), array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::getTaglistAction',));
                }

                // getAllTaglists
                if ('/get/taglists' === $pathinfo) {
                    return array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::getAllTaglistsAction',  '_route' => 'getAllTaglists',);
                }

            }

            elseif (0 === strpos($pathinfo, '/get/morceau')) {
                // getMorceau
                if (preg_match('#^/get/morceau/(?P<id_morceau>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'getMorceau')), array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::getMorceauAction',));
                }

                // getAllMorceaux
                if ('/get/morceaux' === $pathinfo) {
                    return array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::getAllMorceauxAction',  '_route' => 'getAllMorceaux',);
                }

            }

            elseif (0 === strpos($pathinfo, '/get/user')) {
                // getUser
                if (preg_match('#^/get/user/(?P<id_user>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'getUser')), array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::getUserAction',));
                }

                // getAllUsers
                if ('/get/users' === $pathinfo) {
                    return array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::getAllUsersAction',  '_route' => 'getAllUsers',);
                }

            }

        }

        // generateFakeMorceau
        if (0 === strpos($pathinfo, '/generateM') && preg_match('#^/generateM/(?P<titre>[^/]++)/(?P<url>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'generateFakeMorceau')), array (  '_controller' => 'WeZikBundle\\Controller\\DefaultController::generateFakeAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
