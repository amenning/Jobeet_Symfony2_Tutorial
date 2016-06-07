<?php

/* EnsJobeetBundle::layout.html.twig */
class __TwigTemplate_04ac15aba1e83098502c6628daeca5a455b3ad87660db962839a84ba94a5eb96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a68b8ff31a3b65b40e7332a5ed753527a71913d89085d580446fef8e47d1c391 = $this->env->getExtension("native_profiler");
        $__internal_a68b8ff31a3b65b40e7332a5ed753527a71913d89085d580446fef8e47d1c391->enter($__internal_a68b8ff31a3b65b40e7332a5ed753527a71913d89085d580446fef8e47d1c391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>
      ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
  </head>
  <body>
    <div id=\"container\">
      <div id=\"header\">
        <div class=\"content\">
          <h1><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ens_job");
        echo "\">
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
          </a></h1>
 
          <div id=\"sub_header\">
            <div class=\"post\">
              <h2>Ask for people</h2>
              <div>
                <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("ens_job");
        echo "\">Post a Job</a>
              </div>
            </div>
 
            <div class=\"search\">
              <h2>Ask for a job</h2>
              <form action=\"\" method=\"get\">
                <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                <input type=\"submit\" value=\"search\" />
                <div class=\"help\">
                  Enter some keywords (city, country, position, ...)
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
 
      <div id=\"content\">
        ";
        // line 48
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "hasFlash", array(0 => "notice"), "method")) {
            // line 49
            echo "          <div class=\"flash_notice\">
            ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 53
        echo " 
        ";
        // line 54
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "hasFlash", array(0 => "error"), "method")) {
            // line 55
            echo "          <div class=\"flash_error\">
            ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flash", array(0 => "error"), "method"), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 59
        echo " 
        <div class=\"content\">
            ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "        </div>
      </div>
 
      <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
            </a>
          </span>
          <ul>
            <li><a href=\"\">About Jobeet</a></li>
            <li class=\"feed\"><a href=\"\">Full feed</a></li>
            <li><a href=\"\">Jobeet API</a></li>
            <li class=\"last\"><a href=\"\">Affiliates</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>";
        
        $__internal_a68b8ff31a3b65b40e7332a5ed753527a71913d89085d580446fef8e47d1c391->leave($__internal_a68b8ff31a3b65b40e7332a5ed753527a71913d89085d580446fef8e47d1c391_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7bc5f1d9d53bdabb1796856ff882c8a98a8b30d674c2887df3a8bb32bd48e82 = $this->env->getExtension("native_profiler");
        $__internal_c7bc5f1d9d53bdabb1796856ff882c8a98a8b30d674c2887df3a8bb32bd48e82->enter($__internal_c7bc5f1d9d53bdabb1796856ff882c8a98a8b30d674c2887df3a8bb32bd48e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "        Jobeet - Your best job board
      ";
        
        $__internal_c7bc5f1d9d53bdabb1796856ff882c8a98a8b30d674c2887df3a8bb32bd48e82->leave($__internal_c7bc5f1d9d53bdabb1796856ff882c8a98a8b30d674c2887df3a8bb32bd48e82_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_95b470ea1cafbcd4a0e275fc165781e47bb27b3508fa5ebe88f48d561af7055d = $this->env->getExtension("native_profiler");
        $__internal_95b470ea1cafbcd4a0e275fc165781e47bb27b3508fa5ebe88f48d561af7055d->enter($__internal_95b470ea1cafbcd4a0e275fc165781e47bb27b3508fa5ebe88f48d561af7055d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        
        $__internal_95b470ea1cafbcd4a0e275fc165781e47bb27b3508fa5ebe88f48d561af7055d->leave($__internal_95b470ea1cafbcd4a0e275fc165781e47bb27b3508fa5ebe88f48d561af7055d_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a737809c96f63c353faaa160f2d0ed236b29a0912bea136e2119bc8ee163e073 = $this->env->getExtension("native_profiler");
        $__internal_a737809c96f63c353faaa160f2d0ed236b29a0912bea136e2119bc8ee163e073->enter($__internal_a737809c96f63c353faaa160f2d0ed236b29a0912bea136e2119bc8ee163e073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        
        $__internal_a737809c96f63c353faaa160f2d0ed236b29a0912bea136e2119bc8ee163e073->leave($__internal_a737809c96f63c353faaa160f2d0ed236b29a0912bea136e2119bc8ee163e073_prof);

    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        $__internal_9e63331a666a6d76b937b5852dc129fb16706ae9fd98aabe9ad805fa44bf87fd = $this->env->getExtension("native_profiler");
        $__internal_9e63331a666a6d76b937b5852dc129fb16706ae9fd98aabe9ad805fa44bf87fd->enter($__internal_9e63331a666a6d76b937b5852dc129fb16706ae9fd98aabe9ad805fa44bf87fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 62
        echo "            ";
        
        $__internal_9e63331a666a6d76b937b5852dc129fb16706ae9fd98aabe9ad805fa44bf87fd->leave($__internal_9e63331a666a6d76b937b5852dc129fb16706ae9fd98aabe9ad805fa44bf87fd_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 62,  197 => 61,  190 => 14,  184 => 13,  174 => 11,  168 => 10,  160 => 6,  154 => 5,  133 => 71,  128 => 69,  120 => 63,  118 => 61,  114 => 59,  108 => 56,  105 => 55,  103 => 54,  100 => 53,  94 => 50,  91 => 49,  89 => 48,  67 => 29,  57 => 22,  53 => 21,  43 => 15,  40 => 13,  38 => 10,  34 => 8,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <title>*/
/*       {% block title %}*/
/*         Jobeet - Your best job board*/
/*       {% endblock %}*/
/*     </title>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*     {% block stylesheets %}*/
/*       <link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/main.css') }}" type="text/css" media="all" />*/
/*     {% endblock %}*/
/*     {% block javascripts %}*/
/*     {% endblock %}*/
/*     <link rel="shortcut icon" href="{{ asset('bundles/ensjobeet/images/favicon.ico') }}" />*/
/*   </head>*/
/*   <body>*/
/*     <div id="container">*/
/*       <div id="header">*/
/*         <div class="content">*/
/*           <h1><a href="{{ path('ens_job') }}">*/
/*             <img src="{{ asset('bundles/ensjobeet/images/logo.jpg') }}" alt="Jobeet Job Board" />*/
/*           </a></h1>*/
/*  */
/*           <div id="sub_header">*/
/*             <div class="post">*/
/*               <h2>Ask for people</h2>*/
/*               <div>*/
/*                 <a href="{{ path('ens_job') }}">Post a Job</a>*/
/*               </div>*/
/*             </div>*/
/*  */
/*             <div class="search">*/
/*               <h2>Ask for a job</h2>*/
/*               <form action="" method="get">*/
/*                 <input type="text" name="keywords" id="search_keywords" />*/
/*                 <input type="submit" value="search" />*/
/*                 <div class="help">*/
/*                   Enter some keywords (city, country, position, ...)*/
/*                 </div>*/
/*               </form>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*  */
/*       <div id="content">*/
/*         {% if app.session.hasFlash('notice') %}*/
/*           <div class="flash_notice">*/
/*             {{ app.session.flash('notice') }}*/
/*           </div>*/
/*         {% endif %}*/
/*  */
/*         {% if app.session.hasFlash('error') %}*/
/*           <div class="flash_error">*/
/*             {{ app.session.flash('error') }}*/
/*           </div>*/
/*         {% endif %}*/
/*  */
/*         <div class="content">*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*         </div>*/
/*       </div>*/
/*  */
/*       <div id="footer">*/
/*         <div class="content">*/
/*           <span class="symfony">*/
/*             <img src="{{ asset('bundles/ensjobeet/images/jobeet-mini.png') }}" />*/
/*             powered by <a href="http://www.symfony.com/">*/
/*               <img src="{{ asset('bundles/ensjobeet/images/symfony.gif') }}" alt="symfony framework" />*/
/*             </a>*/
/*           </span>*/
/*           <ul>*/
/*             <li><a href="">About Jobeet</a></li>*/
/*             <li class="feed"><a href="">Full feed</a></li>*/
/*             <li><a href="">Jobeet API</a></li>*/
/*             <li class="last"><a href="">Affiliates</a></li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </body>*/
/* </html>*/
