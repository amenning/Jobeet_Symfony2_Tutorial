<?php

/* ::base.html.twig */
class __TwigTemplate_3f9da5be73857a3831d89025841079d092a05bda3a9635af3c0ad38204635659 extends Twig_Template
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
        $__internal_7f233e1a00b1f3d93c4dd3200689f193a6883a5b2cdeea08aa67d4207133029d = $this->env->getExtension("native_profiler");
        $__internal_7f233e1a00b1f3d93c4dd3200689f193a6883a5b2cdeea08aa67d4207133029d->enter($__internal_7f233e1a00b1f3d93c4dd3200689f193a6883a5b2cdeea08aa67d4207133029d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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

        <div class=\"content\">
            ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "        </div>
      </div>
 
      <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 59
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
        
        $__internal_7f233e1a00b1f3d93c4dd3200689f193a6883a5b2cdeea08aa67d4207133029d->leave($__internal_7f233e1a00b1f3d93c4dd3200689f193a6883a5b2cdeea08aa67d4207133029d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_314715b3a98267d5f75487d184cc96705387f1c2f83f7b9eafccaab51fbb8f04 = $this->env->getExtension("native_profiler");
        $__internal_314715b3a98267d5f75487d184cc96705387f1c2f83f7b9eafccaab51fbb8f04->enter($__internal_314715b3a98267d5f75487d184cc96705387f1c2f83f7b9eafccaab51fbb8f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "        \t\tJobeet - Your best job board
      \t\t";
        
        $__internal_314715b3a98267d5f75487d184cc96705387f1c2f83f7b9eafccaab51fbb8f04->leave($__internal_314715b3a98267d5f75487d184cc96705387f1c2f83f7b9eafccaab51fbb8f04_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7881bdaf32660d8a8dd88e983f040d246f563995f7b60115276823671d3acc1 = $this->env->getExtension("native_profiler");
        $__internal_e7881bdaf32660d8a8dd88e983f040d246f563995f7b60115276823671d3acc1->enter($__internal_e7881bdaf32660d8a8dd88e983f040d246f563995f7b60115276823671d3acc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "      \t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    \t";
        
        $__internal_e7881bdaf32660d8a8dd88e983f040d246f563995f7b60115276823671d3acc1->leave($__internal_e7881bdaf32660d8a8dd88e983f040d246f563995f7b60115276823671d3acc1_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40baf8a2da315aa4be44f8d1e6652c7eec0292d6e70036f35d1afd7681c8f2ed = $this->env->getExtension("native_profiler");
        $__internal_40baf8a2da315aa4be44f8d1e6652c7eec0292d6e70036f35d1afd7681c8f2ed->enter($__internal_40baf8a2da315aa4be44f8d1e6652c7eec0292d6e70036f35d1afd7681c8f2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_40baf8a2da315aa4be44f8d1e6652c7eec0292d6e70036f35d1afd7681c8f2ed->leave($__internal_40baf8a2da315aa4be44f8d1e6652c7eec0292d6e70036f35d1afd7681c8f2ed_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_151a98d3e259d3050755e1d5fca8019757097bfe6415587e89ca0d2071638205 = $this->env->getExtension("native_profiler");
        $__internal_151a98d3e259d3050755e1d5fca8019757097bfe6415587e89ca0d2071638205->enter($__internal_151a98d3e259d3050755e1d5fca8019757097bfe6415587e89ca0d2071638205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "            ";
        
        $__internal_151a98d3e259d3050755e1d5fca8019757097bfe6415587e89ca0d2071638205->leave($__internal_151a98d3e259d3050755e1d5fca8019757097bfe6415587e89ca0d2071638205_prof);

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
        return array (  174 => 50,  168 => 49,  157 => 13,  147 => 11,  141 => 10,  133 => 7,  127 => 6,  106 => 59,  101 => 57,  93 => 51,  91 => 49,  67 => 28,  57 => 21,  53 => 20,  43 => 14,  40 => 13,  38 => 10,  35 => 9,  33 => 6,  26 => 1,);
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
/* */
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
