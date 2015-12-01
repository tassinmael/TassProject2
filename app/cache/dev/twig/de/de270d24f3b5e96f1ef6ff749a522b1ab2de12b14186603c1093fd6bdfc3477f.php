<?php

/* base.html.twig */
class __TwigTemplate_e6e6677007601a470739e9783c62e24f52bd4c01fd5dbedb5a249c2dfb012782 extends Twig_Template
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
        $__internal_d1ac3340048e2ddc1f6c99a6968c3ae1cf53390a22394e00df7bb831f7478c62 = $this->env->getExtension("native_profiler");
        $__internal_d1ac3340048e2ddc1f6c99a6968c3ae1cf53390a22394e00df7bb831f7478c62->enter($__internal_d1ac3340048e2ddc1f6c99a6968c3ae1cf53390a22394e00df7bb831f7478c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d1ac3340048e2ddc1f6c99a6968c3ae1cf53390a22394e00df7bb831f7478c62->leave($__internal_d1ac3340048e2ddc1f6c99a6968c3ae1cf53390a22394e00df7bb831f7478c62_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3dc0c70503c3df5e31f67da49d3abd43b90910c1a67f80741c07e110a247231 = $this->env->getExtension("native_profiler");
        $__internal_e3dc0c70503c3df5e31f67da49d3abd43b90910c1a67f80741c07e110a247231->enter($__internal_e3dc0c70503c3df5e31f67da49d3abd43b90910c1a67f80741c07e110a247231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lyon";
        
        $__internal_e3dc0c70503c3df5e31f67da49d3abd43b90910c1a67f80741c07e110a247231->leave($__internal_e3dc0c70503c3df5e31f67da49d3abd43b90910c1a67f80741c07e110a247231_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2fcb75e5ce0bbd0fd49a6e36eb5e95782626b0a4d1c76fa8ffac3f30614b2a9d = $this->env->getExtension("native_profiler");
        $__internal_2fcb75e5ce0bbd0fd49a6e36eb5e95782626b0a4d1c76fa8ffac3f30614b2a9d->enter($__internal_2fcb75e5ce0bbd0fd49a6e36eb5e95782626b0a4d1c76fa8ffac3f30614b2a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_2fcb75e5ce0bbd0fd49a6e36eb5e95782626b0a4d1c76fa8ffac3f30614b2a9d->leave($__internal_2fcb75e5ce0bbd0fd49a6e36eb5e95782626b0a4d1c76fa8ffac3f30614b2a9d_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_e6296e33e284980221aed4dd37ccc3d0c976228e70c7837d57e1b5a6283654cf = $this->env->getExtension("native_profiler");
        $__internal_e6296e33e284980221aed4dd37ccc3d0c976228e70c7837d57e1b5a6283654cf->enter($__internal_e6296e33e284980221aed4dd37ccc3d0c976228e70c7837d57e1b5a6283654cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_e6296e33e284980221aed4dd37ccc3d0c976228e70c7837d57e1b5a6283654cf->leave($__internal_e6296e33e284980221aed4dd37ccc3d0c976228e70c7837d57e1b5a6283654cf_prof);

    }

    // line 39
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_212805af24d87ce323a6f2e308a81819775af3dcf2366acaafff2c0d8b0d186d = $this->env->getExtension("native_profiler");
        $__internal_212805af24d87ce323a6f2e308a81819775af3dcf2366acaafff2c0d8b0d186d->enter($__internal_212805af24d87ce323a6f2e308a81819775af3dcf2366acaafff2c0d8b0d186d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">mon Lyon </a>";
        
        $__internal_212805af24d87ce323a6f2e308a81819775af3dcf2366acaafff2c0d8b0d186d->leave($__internal_212805af24d87ce323a6f2e308a81819775af3dcf2366acaafff2c0d8b0d186d_prof);

    }

    // line 40
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_aa9d4ff993959f226a7ccd32efefca2bc0b66ec2e46e3efecde1ef71be066f57 = $this->env->getExtension("native_profiler");
        $__internal_aa9d4ff993959f226a7ccd32efefca2bc0b66ec2e46e3efecde1ef71be066f57->enter($__internal_aa9d4ff993959f226a7ccd32efefca2bc0b66ec2e46e3efecde1ef71be066f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">all you need to know about Lyon</a>";
        
        $__internal_aa9d4ff993959f226a7ccd32efefca2bc0b66ec2e46e3efecde1ef71be066f57->leave($__internal_aa9d4ff993959f226a7ccd32efefca2bc0b66ec2e46e3efecde1ef71be066f57_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_e92d8f518fc63908bde6665f058cb38903a77006f29970280ff030f057028d3f = $this->env->getExtension("native_profiler");
        $__internal_e92d8f518fc63908bde6665f058cb38903a77006f29970280ff030f057028d3f->enter($__internal_e92d8f518fc63908bde6665f058cb38903a77006f29970280ff030f057028d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e92d8f518fc63908bde6665f058cb38903a77006f29970280ff030f057028d3f->leave($__internal_e92d8f518fc63908bde6665f058cb38903a77006f29970280ff030f057028d3f_prof);

    }

    // line 48
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d85360497df08104fa41c5be63cec728905b07bad2d35d4b736ce9e2be0c01b4 = $this->env->getExtension("native_profiler");
        $__internal_d85360497df08104fa41c5be63cec728905b07bad2d35d4b736ce9e2be0c01b4->enter($__internal_d85360497df08104fa41c5be63cec728905b07bad2d35d4b736ce9e2be0c01b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_d85360497df08104fa41c5be63cec728905b07bad2d35d4b736ce9e2be0c01b4->leave($__internal_d85360497df08104fa41c5be63cec728905b07bad2d35d4b736ce9e2be0c01b4_prof);

    }

    // line 52
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e5c53e6dbe1664c158ce34b140add1cecaca533eadd28225d297fa82aca2789b = $this->env->getExtension("native_profiler");
        $__internal_e5c53e6dbe1664c158ce34b140add1cecaca533eadd28225d297fa82aca2789b->enter($__internal_e5c53e6dbe1664c158ce34b140add1cecaca533eadd28225d297fa82aca2789b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 53
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">Tass</a>
                ";
        
        $__internal_e5c53e6dbe1664c158ce34b140add1cecaca533eadd28225d297fa82aca2789b->leave($__internal_e5c53e6dbe1664c158ce34b140add1cecaca533eadd28225d297fa82aca2789b_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_111c548a6f404e28e00b36258a7b1964f7dd1f7027fae90f9c92309155932342 = $this->env->getExtension("native_profiler");
        $__internal_111c548a6f404e28e00b36258a7b1964f7dd1f7027fae90f9c92309155932342->enter($__internal_111c548a6f404e28e00b36258a7b1964f7dd1f7027fae90f9c92309155932342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_111c548a6f404e28e00b36258a7b1964f7dd1f7027fae90f9c92309155932342->leave($__internal_111c548a6f404e28e00b36258a7b1964f7dd1f7027fae90f9c92309155932342_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
