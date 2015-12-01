<?php

/* ::base.html.twig */
class __TwigTemplate_49bf47a55f56b11f3dc463dec40541579f510f6fc8bb2e1e53df22bf7a6707ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e779afe1c25c60267f9642024322eb4d1fad59381a53df9d5764f371daf7d9d = $this->env->getExtension("native_profiler");
        $__internal_2e779afe1c25c60267f9642024322eb4d1fad59381a53df9d5764f371daf7d9d->enter($__internal_2e779afe1c25c60267f9642024322eb4d1fad59381a53df9d5764f371daf7d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " - Mon Blog</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type='text/css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 27
        $this->displayBlock('navigation', $context, $blocks);
        // line 36
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 39
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 40
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 48
        $this->displayBlock('sidebar', $context, $blocks);
        // line 49
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 52
        $this->displayBlock('footer', $context, $blocks);
        // line 55
        echo "            </div>
        </section>

        ";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "    </body>
</html>
";
        
        $__internal_2e779afe1c25c60267f9642024322eb4d1fad59381a53df9d5764f371daf7d9d->leave($__internal_2e779afe1c25c60267f9642024322eb4d1fad59381a53df9d5764f371daf7d9d_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_a66aaf3bc7913eec24ef711b55626522211d34e396b242fc92927db2f0766979 = $this->env->getExtension("native_profiler");
        $__internal_a66aaf3bc7913eec24ef711b55626522211d34e396b242fc92927db2f0766979->enter($__internal_a66aaf3bc7913eec24ef711b55626522211d34e396b242fc92927db2f0766979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lyon";
        
        $__internal_a66aaf3bc7913eec24ef711b55626522211d34e396b242fc92927db2f0766979->leave($__internal_a66aaf3bc7913eec24ef711b55626522211d34e396b242fc92927db2f0766979_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_401a628dc62e8b8f50840ae9af9c41cdb82df0fcc6259935d4830a84a14bc1b6 = $this->env->getExtension("native_profiler");
        $__internal_401a628dc62e8b8f50840ae9af9c41cdb82df0fcc6259935d4830a84a14bc1b6->enter($__internal_401a628dc62e8b8f50840ae9af9c41cdb82df0fcc6259935d4830a84a14bc1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_401a628dc62e8b8f50840ae9af9c41cdb82df0fcc6259935d4830a84a14bc1b6->leave($__internal_401a628dc62e8b8f50840ae9af9c41cdb82df0fcc6259935d4830a84a14bc1b6_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_fe27747e9f2f4ca221b335aff31c5a414994d745734f0e9b97cc8ff4b20b9690 = $this->env->getExtension("native_profiler");
        $__internal_fe27747e9f2f4ca221b335aff31c5a414994d745734f0e9b97cc8ff4b20b9690->enter($__internal_fe27747e9f2f4ca221b335aff31c5a414994d745734f0e9b97cc8ff4b20b9690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 28
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about");
        echo "\">About</a></li>
                                <li><a href=\"#\">Contact</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_fe27747e9f2f4ca221b335aff31c5a414994d745734f0e9b97cc8ff4b20b9690->leave($__internal_fe27747e9f2f4ca221b335aff31c5a414994d745734f0e9b97cc8ff4b20b9690_prof);

    }

    // line 39
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_ed4ef931b7fe3901cd5d70e1684b14cf9002629236b1c3fb6e157c91b500bb9b = $this->env->getExtension("native_profiler");
        $__internal_ed4ef931b7fe3901cd5d70e1684b14cf9002629236b1c3fb6e157c91b500bb9b->enter($__internal_ed4ef931b7fe3901cd5d70e1684b14cf9002629236b1c3fb6e157c91b500bb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">mon Lyon </a>";
        
        $__internal_ed4ef931b7fe3901cd5d70e1684b14cf9002629236b1c3fb6e157c91b500bb9b->leave($__internal_ed4ef931b7fe3901cd5d70e1684b14cf9002629236b1c3fb6e157c91b500bb9b_prof);

    }

    // line 40
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_8b52672c90dbf8af11091c2460327e0b5a8f254b0e5a27d2c46e8dc8db6d6353 = $this->env->getExtension("native_profiler");
        $__internal_8b52672c90dbf8af11091c2460327e0b5a8f254b0e5a27d2c46e8dc8db6d6353->enter($__internal_8b52672c90dbf8af11091c2460327e0b5a8f254b0e5a27d2c46e8dc8db6d6353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">all you need to know about Lyon</a>";
        
        $__internal_8b52672c90dbf8af11091c2460327e0b5a8f254b0e5a27d2c46e8dc8db6d6353->leave($__internal_8b52672c90dbf8af11091c2460327e0b5a8f254b0e5a27d2c46e8dc8db6d6353_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_23145e8a3061889de7d5cc5d7b73c120b16367f81aba43d0e0e4b7bf120b2e4b = $this->env->getExtension("native_profiler");
        $__internal_23145e8a3061889de7d5cc5d7b73c120b16367f81aba43d0e0e4b7bf120b2e4b->enter($__internal_23145e8a3061889de7d5cc5d7b73c120b16367f81aba43d0e0e4b7bf120b2e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_23145e8a3061889de7d5cc5d7b73c120b16367f81aba43d0e0e4b7bf120b2e4b->leave($__internal_23145e8a3061889de7d5cc5d7b73c120b16367f81aba43d0e0e4b7bf120b2e4b_prof);

    }

    // line 48
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fa051ba3ffc2d41ac1e2f7ea45c9ee7c9a9eea84c760d5f57ab7ca0ff6792754 = $this->env->getExtension("native_profiler");
        $__internal_fa051ba3ffc2d41ac1e2f7ea45c9ee7c9a9eea84c760d5f57ab7ca0ff6792754->enter($__internal_fa051ba3ffc2d41ac1e2f7ea45c9ee7c9a9eea84c760d5f57ab7ca0ff6792754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_fa051ba3ffc2d41ac1e2f7ea45c9ee7c9a9eea84c760d5f57ab7ca0ff6792754->leave($__internal_fa051ba3ffc2d41ac1e2f7ea45c9ee7c9a9eea84c760d5f57ab7ca0ff6792754_prof);

    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0db7191cc0bafb0d66ba677ebb5040315fa86bd17f3795e803ef61021e5bf80a = $this->env->getExtension("native_profiler");
        $__internal_0db7191cc0bafb0d66ba677ebb5040315fa86bd17f3795e803ef61021e5bf80a->enter($__internal_0db7191cc0bafb0d66ba677ebb5040315fa86bd17f3795e803ef61021e5bf80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 53
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">Tass</a>
                ";
        
        $__internal_0db7191cc0bafb0d66ba677ebb5040315fa86bd17f3795e803ef61021e5bf80a->leave($__internal_0db7191cc0bafb0d66ba677ebb5040315fa86bd17f3795e803ef61021e5bf80a_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c0034d974368154cb748cb4a5ec4b3a492bc08d8f587cb467fc638cd305d4d9 = $this->env->getExtension("native_profiler");
        $__internal_7c0034d974368154cb748cb4a5ec4b3a492bc08d8f587cb467fc638cd305d4d9->enter($__internal_7c0034d974368154cb748cb4a5ec4b3a492bc08d8f587cb467fc638cd305d4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7c0034d974368154cb748cb4a5ec4b3a492bc08d8f587cb467fc638cd305d4d9->leave($__internal_7c0034d974368154cb748cb4a5ec4b3a492bc08d8f587cb467fc638cd305d4d9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  229 => 53,  223 => 52,  212 => 48,  201 => 45,  187 => 40,  173 => 39,  161 => 31,  157 => 30,  153 => 28,  147 => 27,  138 => 18,  134 => 16,  128 => 15,  116 => 8,  107 => 59,  105 => 58,  100 => 55,  98 => 52,  93 => 49,  91 => 48,  87 => 46,  85 => 45,  77 => 40,  73 => 39,  68 => 36,  66 => 27,  55 => 20,  53 => 15,  45 => 10,  40 => 8,  31 => 1,);
    }
}
/* <!-- app/Resources/views/base.html.twig -->*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/* */
/*         <meta http-equiv="Content-Type" content="text/html"; charset=utf-8" />*/
/*         */
/*         <title>{% block title %}Lyon{% endblock %} - Mon Blog</title>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" type='text/css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>*/
/*         <!--[if lt IE 9]>*/
/*             <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*         <![endif]-->*/
/*         {% block stylesheets %}*/
/*             <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>*/
/*             <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>*/
/*             <link href="{{ asset('screen.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*         <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* */
/*         <section id="wrapper">*/
/*             <header id="header">*/
/*                 <div class="top">*/
/*                     {% block navigation %}*/
/*                         <nav>*/
/*                             <ul class="navigation">*/
/*                                 <li><a href="{{ path('BloggerBlogBundle_homepage') }}">Home</a></li>*/
/*                                 <li><a href="{{ path('BloggerBlogBundle_about') }}">About</a></li>*/
/*                                 <li><a href="#">Contact</a></li>*/
/*                             </ul>*/
/*                         </nav>*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*                 <hgroup>*/
/*                     <h2>{% block blog_title %}<a href="{{ path('BloggerBlogBundle_homepage') }}">mon Lyon </a>{% endblock %}</h2>*/
/*                     <h3>{% block blog_tagline %}<a href="{{ path('BloggerBlogBundle_homepage') }}">all you need to know about Lyon</a>{% endblock %}</h3>*/
/*                 </hgroup>*/
/*             </header>*/
/* */
/*             <section class="main-col">*/
/*                 {% block body %}{% endblock %}*/
/*             </section>*/
/*             <aside class="sidebar">*/
/*                 {% block sidebar %}{% endblock %}*/
/*             </aside>*/
/* */
/*             <div id="footer">*/
/*                 {% block footer %}*/
/*                     Symfony2 blog tutorial - created by <a href="https://github.com/dsyph3r">Tass</a>*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </section>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
