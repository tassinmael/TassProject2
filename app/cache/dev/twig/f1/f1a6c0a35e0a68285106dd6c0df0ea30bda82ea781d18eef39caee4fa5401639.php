<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_978c1fc0ee6ecd8c1c419212f05031d60792fbb4f021344cdb019bab6413011f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b1e7f6bd2d9fb29fac6b3613f131431265f756fd471f8df7bed54aaa4dc4608 = $this->env->getExtension("native_profiler");
        $__internal_7b1e7f6bd2d9fb29fac6b3613f131431265f756fd471f8df7bed54aaa4dc4608->enter($__internal_7b1e7f6bd2d9fb29fac6b3613f131431265f756fd471f8df7bed54aaa4dc4608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_7b1e7f6bd2d9fb29fac6b3613f131431265f756fd471f8df7bed54aaa4dc4608->leave($__internal_7b1e7f6bd2d9fb29fac6b3613f131431265f756fd471f8df7bed54aaa4dc4608_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
