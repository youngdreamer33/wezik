<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'we_zik_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'info' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'generate_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::userToJSONAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'generate_morceau' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::morceauToJSONAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/morceau',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'generate_tag' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::tagToJSONAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tag',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'generate_playlist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::playlistToJSONAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/playlist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addToPlaylist' => array (  0 =>   array (    0 => 'id_playlist',    1 => 'id_morceau',  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::addToPlaylistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_morceau',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_playlist',    ),    2 =>     array (      0 => 'text',      1 => '/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'retireFromPlaylist' => array (  0 =>   array (    0 => 'id_playlist',    1 => 'id_morceau',  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::retireFromPlaylistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_morceau',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_playlist',    ),    2 =>     array (      0 => 'text',      1 => '/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'playJSON' => array (  0 =>   array (    0 => 'id_playlist',  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::playJSONAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_playlist',    ),    1 =>     array (      0 => 'text',      1 => '/play',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'showUser' => array (  0 =>   array (    0 => 'id_user',  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::showUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_user',    ),    1 =>     array (      0 => 'text',      1 => '/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'showTag' => array (  0 =>   array (    0 => 'id_tag',  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::showTagAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_tag',    ),    1 =>     array (      0 => 'text',      1 => '/tags',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'test123' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::testReturn123Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getPlaylist' => array (  0 =>   array (    0 => 'id_playlist',  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::getPlaylistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_playlist',    ),    1 =>     array (      0 => 'text',      1 => '/get/playlist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getAllPlaylists' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::getAllPlaylistsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/get/playlists',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getTaglist' => array (  0 =>   array (    0 => 'id_taglist',  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::getTaglistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_taglist',    ),    1 =>     array (      0 => 'text',      1 => '/get/tag',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getAllTaglists' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::getAllTaglistsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/get/taglists',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getMorceau' => array (  0 =>   array (    0 => 'id_morceau',  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::getMorceauAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_morceau',    ),    1 =>     array (      0 => 'text',      1 => '/get/morceau',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getAllMorceaux' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::getAllMorceauxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/get/morceaux',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getUser' => array (  0 =>   array (    0 => 'id_user',  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::getUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_user',    ),    1 =>     array (      0 => 'text',      1 => '/get/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'getAllUsers' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::getAllUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/get/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'generateFakeMorceau' => array (  0 =>   array (    0 => 'titre',    1 => 'url',  ),  1 =>   array (    '_controller' => 'WeZikBundle\\Controller\\DefaultController::generateFakeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'url',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'titre',    ),    2 =>     array (      0 => 'text',      1 => '/generateM',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
