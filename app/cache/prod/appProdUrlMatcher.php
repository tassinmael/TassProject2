<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        // BloggerBlogBundle_homepage
        if ($pathinfo === '/home') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BloggerBlogBundle_homepage;
            }

            return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::indexAction',  '_route' => 'BloggerBlogBundle_homepage',);
        }
        not_BloggerBlogBundle_homepage:

        // BloggerBlogBundle_about
        if ($pathinfo === '/about') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BloggerBlogBundle_about;
            }

            return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::aboutAction',  '_route' => 'BloggerBlogBundle_about',);
        }
        not_BloggerBlogBundle_about:

        // BloggerBlogBundle_blog_show
        if (preg_match('#^/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_BloggerBlogBundle_blog_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'BloggerBlogBundle_blog_show')), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\BlogController::showAction',));
        }
        not_BloggerBlogBundle_blog_show:

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
