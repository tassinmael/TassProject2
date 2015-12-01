<?php

/* BloggerBlogBundle:Blog:show.html.twig */
class __TwigTemplate_2f8e834583b2c8717a15bd112625bf1bcacc1f9678291780eb379bea18404518 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b63cf75ba47b6d0a97bc1bc37220e25e69978c3b4a1572f5804aeb991c1e0f6a = $this->env->getExtension("native_profiler");
        $__internal_b63cf75ba47b6d0a97bc1bc37220e25e69978c3b4a1572f5804aeb991c1e0f6a->enter($__internal_b63cf75ba47b6d0a97bc1bc37220e25e69978c3b4a1572f5804aeb991c1e0f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b63cf75ba47b6d0a97bc1bc37220e25e69978c3b4a1572f5804aeb991c1e0f6a->leave($__internal_b63cf75ba47b6d0a97bc1bc37220e25e69978c3b4a1572f5804aeb991c1e0f6a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_97b7fbe7719ee0398cd78479a6bf6e48521b0b5aa9723538817164a1070998f9 = $this->env->getExtension("native_profiler");
        $__internal_97b7fbe7719ee0398cd78479a6bf6e48521b0b5aa9723538817164a1070998f9->enter($__internal_97b7fbe7719ee0398cd78479a6bf6e48521b0b5aa9723538817164a1070998f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        
        $__internal_97b7fbe7719ee0398cd78479a6bf6e48521b0b5aa9723538817164a1070998f9->leave($__internal_97b7fbe7719ee0398cd78479a6bf6e48521b0b5aa9723538817164a1070998f9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f5f52085f14c018f2260bc0987b93065208da07302f12fb402cd88090a6a4e9 = $this->env->getExtension("native_profiler");
        $__internal_6f5f52085f14c018f2260bc0987b93065208da07302f12fb402cd88090a6a4e9->enter($__internal_6f5f52085f14c018f2260bc0987b93065208da07302f12fb402cd88090a6a4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <article class=\"blog\">
        <header>
            <div class=\"date\"><time datetime=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "l, F j, Y"), "html", null, true);
        echo "</time></div>
            <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "</h2>
        </header>
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "image", array())))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo " image not found\" class=\"large\" />
        <div>
            <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "blog", array()), "html", null, true);
        echo "</p>
        </div>
    </article>
";
        
        $__internal_6f5f52085f14c018f2260bc0987b93065208da07302f12fb402cd88090a6a4e9->leave($__internal_6f5f52085f14c018f2260bc0987b93065208da07302f12fb402cd88090a6a4e9_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 14,  68 => 12,  63 => 10,  57 => 9,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resouces/views/Blog/show.html.twig #}*/
/* {% extends 'BloggerBlogBundle::layout.html.twig' %}*/
/* */
/* {% block title %}{{ blog.title }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <article class="blog">*/
/*         <header>*/
/*             <div class="date"><time datetime="{{ blog.created|date('c') }}">{{ blog.created|date('l, F j, Y') }}</time></div>*/
/*             <h2>{{ blog.title }}</h2>*/
/*         </header>*/
/*         <img src="{{ asset(['images/', blog.image]|join) }}" alt="{{ blog.title }} image not found" class="large" />*/
/*         <div>*/
/*             <p>{{ blog.blog }}</p>*/
/*         </div>*/
/*     </article>*/
/* {% endblock %}*/
