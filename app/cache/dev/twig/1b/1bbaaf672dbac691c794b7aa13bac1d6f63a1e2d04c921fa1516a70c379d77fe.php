<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f803b46fa9d85f3c8f172f02547f1a3150fab591e927f257812013d829dd4420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f39d6c5fdf0e6e76300738567e885c6db976c7cd2f384a2c7d46d5da0030a54 = $this->env->getExtension("native_profiler");
        $__internal_8f39d6c5fdf0e6e76300738567e885c6db976c7cd2f384a2c7d46d5da0030a54->enter($__internal_8f39d6c5fdf0e6e76300738567e885c6db976c7cd2f384a2c7d46d5da0030a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f39d6c5fdf0e6e76300738567e885c6db976c7cd2f384a2c7d46d5da0030a54->leave($__internal_8f39d6c5fdf0e6e76300738567e885c6db976c7cd2f384a2c7d46d5da0030a54_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_565c1ad30a81b126d5fb9689b09e6eefcd0a0f3d6d83d780bda37d1131143ae7 = $this->env->getExtension("native_profiler");
        $__internal_565c1ad30a81b126d5fb9689b09e6eefcd0a0f3d6d83d780bda37d1131143ae7->enter($__internal_565c1ad30a81b126d5fb9689b09e6eefcd0a0f3d6d83d780bda37d1131143ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_565c1ad30a81b126d5fb9689b09e6eefcd0a0f3d6d83d780bda37d1131143ae7->leave($__internal_565c1ad30a81b126d5fb9689b09e6eefcd0a0f3d6d83d780bda37d1131143ae7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c26204bfc2ccf4e36fb8f3e13c7c5bd03463f25a609d4dd0efe162c57effe7b = $this->env->getExtension("native_profiler");
        $__internal_5c26204bfc2ccf4e36fb8f3e13c7c5bd03463f25a609d4dd0efe162c57effe7b->enter($__internal_5c26204bfc2ccf4e36fb8f3e13c7c5bd03463f25a609d4dd0efe162c57effe7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c26204bfc2ccf4e36fb8f3e13c7c5bd03463f25a609d4dd0efe162c57effe7b->leave($__internal_5c26204bfc2ccf4e36fb8f3e13c7c5bd03463f25a609d4dd0efe162c57effe7b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab886e7688f7c1240d3eaea663a6001d9c3910c18ebee769e4bc0bbbf384f9f1 = $this->env->getExtension("native_profiler");
        $__internal_ab886e7688f7c1240d3eaea663a6001d9c3910c18ebee769e4bc0bbbf384f9f1->enter($__internal_ab886e7688f7c1240d3eaea663a6001d9c3910c18ebee769e4bc0bbbf384f9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ab886e7688f7c1240d3eaea663a6001d9c3910c18ebee769e4bc0bbbf384f9f1->leave($__internal_ab886e7688f7c1240d3eaea663a6001d9c3910c18ebee769e4bc0bbbf384f9f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
