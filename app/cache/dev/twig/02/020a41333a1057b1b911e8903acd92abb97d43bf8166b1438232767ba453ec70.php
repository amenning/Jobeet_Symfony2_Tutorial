<?php

/* base.html.twig */
class __TwigTemplate_3c7c0f9dba0efffe9bfa4a8d04b09769c8ce1b0f37ddc8df317c0b0faf985f34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72fa2bf788e59cbff070e90fe25d03d4af5153bfcdcfa25d716a47cb96a01842 = $this->env->getExtension("native_profiler");
        $__internal_72fa2bf788e59cbff070e90fe25d03d4af5153bfcdcfa25d716a47cb96a01842->enter($__internal_72fa2bf788e59cbff070e90fe25d03d4af5153bfcdcfa25d716a47cb96a01842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>
      \t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "    \t</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
    </head>
  <body>
    <div id=\"container\">
      <div id=\"header\">
        <div class=\"content\">
          <h1><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("ens_job_index");
        echo "\">
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
          </a></h1>
 
          <div id=\"sub_header\">
            <div class=\"post\">
              <h2>Ask for people</h2>
              <div>
                <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("ens_job_new");
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
        // line 47
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "hasFlash", array(0 => "notice"), "method")) {
            // line 48
            echo "          <div class=\"flash_notice\">
            ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 52
        echo " 
        ";
        // line 53
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "hasFlash", array(0 => "error"), "method")) {
            // line 54
            echo "          <div class=\"flash_error\">
            ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flash", array(0 => "error"), "method"), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 58
        echo " 
        <div class=\"content\">
            ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "        </div>
      </div>
 
      <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 70
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
        
        $__internal_72fa2bf788e59cbff070e90fe25d03d4af5153bfcdcfa25d716a47cb96a01842->leave($__internal_72fa2bf788e59cbff070e90fe25d03d4af5153bfcdcfa25d716a47cb96a01842_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2465d7bbc3648d1aed9cf4c13ad0a31564b7a7c50c89008d2a27e17e9edc33e = $this->env->getExtension("native_profiler");
        $__internal_a2465d7bbc3648d1aed9cf4c13ad0a31564b7a7c50c89008d2a27e17e9edc33e->enter($__internal_a2465d7bbc3648d1aed9cf4c13ad0a31564b7a7c50c89008d2a27e17e9edc33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "        \t\tJobeet - Your best job board
      \t\t";
        
        $__internal_a2465d7bbc3648d1aed9cf4c13ad0a31564b7a7c50c89008d2a27e17e9edc33e->leave($__internal_a2465d7bbc3648d1aed9cf4c13ad0a31564b7a7c50c89008d2a27e17e9edc33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d5d34fbaa0c1f026aa5bd366b16736204ab684b2ee0cca4efe5a8cbcc01b5bf = $this->env->getExtension("native_profiler");
        $__internal_8d5d34fbaa0c1f026aa5bd366b16736204ab684b2ee0cca4efe5a8cbcc01b5bf->enter($__internal_8d5d34fbaa0c1f026aa5bd366b16736204ab684b2ee0cca4efe5a8cbcc01b5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "      \t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    \t";
        
        $__internal_8d5d34fbaa0c1f026aa5bd366b16736204ab684b2ee0cca4efe5a8cbcc01b5bf->leave($__internal_8d5d34fbaa0c1f026aa5bd366b16736204ab684b2ee0cca4efe5a8cbcc01b5bf_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5cb3397f92513a667828729067abcc2a7a9b0b05ec4377e7e338a56490df1ddd = $this->env->getExtension("native_profiler");
        $__internal_5cb3397f92513a667828729067abcc2a7a9b0b05ec4377e7e338a56490df1ddd->enter($__internal_5cb3397f92513a667828729067abcc2a7a9b0b05ec4377e7e338a56490df1ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5cb3397f92513a667828729067abcc2a7a9b0b05ec4377e7e338a56490df1ddd->leave($__internal_5cb3397f92513a667828729067abcc2a7a9b0b05ec4377e7e338a56490df1ddd_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa7596efcdb0b8861215930e0b990f75f884e67747556ff1a49b8709f605cd45 = $this->env->getExtension("native_profiler");
        $__internal_aa7596efcdb0b8861215930e0b990f75f884e67747556ff1a49b8709f605cd45->enter($__internal_aa7596efcdb0b8861215930e0b990f75f884e67747556ff1a49b8709f605cd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "            ";
        
        $__internal_aa7596efcdb0b8861215930e0b990f75f884e67747556ff1a49b8709f605cd45->leave($__internal_aa7596efcdb0b8861215930e0b990f75f884e67747556ff1a49b8709f605cd45_prof);

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
        return array (  201 => 61,  195 => 60,  184 => 13,  174 => 11,  168 => 10,  160 => 7,  154 => 6,  133 => 70,  128 => 68,  120 => 62,  118 => 60,  114 => 58,  108 => 55,  105 => 54,  103 => 53,  100 => 52,  94 => 49,  91 => 48,  89 => 47,  67 => 28,  57 => 21,  53 => 20,  43 => 14,  40 => 13,  38 => 10,  35 => 9,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <title>*/
/*       		{% block title %}*/
/*         		Jobeet - Your best job board*/
/*       		{% endblock %}*/
/*     	</title>*/
/*         {% block stylesheets %}*/
/*       		<link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/main.css') }}" type="text/css" media="all" />*/
/*     	{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*         <link rel="shortcut icon" href="{{ asset('bundles/ensjobeet/images/favicon.ico') }}" />*/
/*     </head>*/
/*   <body>*/
/*     <div id="container">*/
/*       <div id="header">*/
/*         <div class="content">*/
/*           <h1><a href="{{ path('ens_job_index') }}">*/
/*             <img src="{{ asset('bundles/ensjobeet/images/logo.jpg') }}" alt="Jobeet Job Board" />*/
/*           </a></h1>*/
/*  */
/*           <div id="sub_header">*/
/*             <div class="post">*/
/*               <h2>Ask for people</h2>*/
/*               <div>*/
/*                 <a href="{{ path('ens_job_new') }}">Post a Job</a>*/
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
/*             {% block body %}*/
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
