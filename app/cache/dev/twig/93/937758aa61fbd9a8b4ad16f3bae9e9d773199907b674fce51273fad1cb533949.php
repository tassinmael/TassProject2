<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_2343e88ea0a9fcd41c5dad40616065937d366840f7755245872757f68f581741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BloggerBlogBundle::layout.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15ea4577985451d23b85376b4a07603cede8007e0b868ed39f22e7c09915bdda = $this->env->getExtension("native_profiler");
        $__internal_15ea4577985451d23b85376b4a07603cede8007e0b868ed39f22e7c09915bdda->enter($__internal_15ea4577985451d23b85376b4a07603cede8007e0b868ed39f22e7c09915bdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15ea4577985451d23b85376b4a07603cede8007e0b868ed39f22e7c09915bdda->leave($__internal_15ea4577985451d23b85376b4a07603cede8007e0b868ed39f22e7c09915bdda_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* */
/* */
