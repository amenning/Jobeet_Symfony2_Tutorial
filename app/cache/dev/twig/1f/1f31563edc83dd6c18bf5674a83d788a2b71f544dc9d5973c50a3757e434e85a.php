<?php

/* ::base.html.twig */
class __TwigTemplate_11ec4d76a78b98ab5092c55b14b9e16044c6b826d294a937470d34d942a63098 extends Twig_Template
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
        $__internal_a3c94e414d5c2a9bdfe096f812d047baef8462515b320d7080dc4f4c913a9fa5 = $this->env->getExtension("native_profiler");
        $__internal_a3c94e414d5c2a9bdfe096f812d047baef8462515b320d7080dc4f4c913a9fa5->enter($__internal_a3c94e414d5c2a9bdfe096f812d047baef8462515b320d7080dc4f4c913a9fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a3c94e414d5c2a9bdfe096f812d047baef8462515b320d7080dc4f4c913a9fa5->leave($__internal_a3c94e414d5c2a9bdfe096f812d047baef8462515b320d7080dc4f4c913a9fa5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4671f9ff03d82898014e56f73814149643dc76f24a0e371fdc96cabee8d841d3 = $this->env->getExtension("native_profiler");
        $__internal_4671f9ff03d82898014e56f73814149643dc76f24a0e371fdc96cabee8d841d3->enter($__internal_4671f9ff03d82898014e56f73814149643dc76f24a0e371fdc96cabee8d841d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "        \t\tJobeet - Your best job board
      \t\t";
        
        $__internal_4671f9ff03d82898014e56f73814149643dc76f24a0e371fdc96cabee8d841d3->leave($__internal_4671f9ff03d82898014e56f73814149643dc76f24a0e371fdc96cabee8d841d3_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94ddead24411b05fbafd51d0ede1a86fa0f92e6ac31ae92068f58b64a690b217 = $this->env->getExtension("native_profiler");
        $__internal_94ddead24411b05fbafd51d0ede1a86fa0f92e6ac31ae92068f58b64a690b217->enter($__internal_94ddead24411b05fbafd51d0ede1a86fa0f92e6ac31ae92068f58b64a690b217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "      \t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    \t";
        
        $__internal_94ddead24411b05fbafd51d0ede1a86fa0f92e6ac31ae92068f58b64a690b217->leave($__internal_94ddead24411b05fbafd51d0ede1a86fa0f92e6ac31ae92068f58b64a690b217_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e224a3b814fc9eec796e36605f4314c2c7a9525eaba317bf285bc5e0bdd04cf7 = $this->env->getExtension("native_profiler");
        $__internal_e224a3b814fc9eec796e36605f4314c2c7a9525eaba317bf285bc5e0bdd04cf7->enter($__internal_e224a3b814fc9eec796e36605f4314c2c7a9525eaba317bf285bc5e0bdd04cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e224a3b814fc9eec796e36605f4314c2c7a9525eaba317bf285bc5e0bdd04cf7->leave($__internal_e224a3b814fc9eec796e36605f4314c2c7a9525eaba317bf285bc5e0bdd04cf7_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd3af4027f2721046f804ca3b0e369400fc73bf67dcdafa51cc2bfcd14e23082 = $this->env->getExtension("native_profiler");
        $__internal_cd3af4027f2721046f804ca3b0e369400fc73bf67dcdafa51cc2bfcd14e23082->enter($__internal_cd3af4027f2721046f804ca3b0e369400fc73bf67dcdafa51cc2bfcd14e23082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "            ";
        
        $__internal_cd3af4027f2721046f804ca3b0e369400fc73bf67dcdafa51cc2bfcd14e23082->leave($__internal_cd3af4027f2721046f804ca3b0e369400fc73bf67dcdafa51cc2bfcd14e23082_prof);

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
