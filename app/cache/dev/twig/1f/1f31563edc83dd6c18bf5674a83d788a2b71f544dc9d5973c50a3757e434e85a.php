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
        $__internal_5b2a46abaf08c6033a4e81379fbbcdf0827285f3cb92ffd07cbd7b9489d8a449 = $this->env->getExtension("native_profiler");
        $__internal_5b2a46abaf08c6033a4e81379fbbcdf0827285f3cb92ffd07cbd7b9489d8a449->enter($__internal_5b2a46abaf08c6033a4e81379fbbcdf0827285f3cb92ffd07cbd7b9489d8a449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
 
\t <div id=\"job_history\">
\t    
\t    Recent viewed jobs:
\t    <ul>
\t        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "job_history"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 51
            echo "\t            <li>
\t                
\t            </li>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t    </ul>
\t    
\t</div>
 
      <div id=\"content\">

        <div class=\"content\">
            ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "        </div>
      </div>
 
      <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 72
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
        
        $__internal_5b2a46abaf08c6033a4e81379fbbcdf0827285f3cb92ffd07cbd7b9489d8a449->leave($__internal_5b2a46abaf08c6033a4e81379fbbcdf0827285f3cb92ffd07cbd7b9489d8a449_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cb6b2055a0664eba4820280f074154007b0c0a6b7004753fddf32edd9dc02a5 = $this->env->getExtension("native_profiler");
        $__internal_2cb6b2055a0664eba4820280f074154007b0c0a6b7004753fddf32edd9dc02a5->enter($__internal_2cb6b2055a0664eba4820280f074154007b0c0a6b7004753fddf32edd9dc02a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "        \t\tJobeet - Your best job board
      \t\t";
        
        $__internal_2cb6b2055a0664eba4820280f074154007b0c0a6b7004753fddf32edd9dc02a5->leave($__internal_2cb6b2055a0664eba4820280f074154007b0c0a6b7004753fddf32edd9dc02a5_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c31c104c658818d7f368ebec8ad31a6f74ac7cf0e74d98623d413828ec34e20 = $this->env->getExtension("native_profiler");
        $__internal_8c31c104c658818d7f368ebec8ad31a6f74ac7cf0e74d98623d413828ec34e20->enter($__internal_8c31c104c658818d7f368ebec8ad31a6f74ac7cf0e74d98623d413828ec34e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "      \t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    \t";
        
        $__internal_8c31c104c658818d7f368ebec8ad31a6f74ac7cf0e74d98623d413828ec34e20->leave($__internal_8c31c104c658818d7f368ebec8ad31a6f74ac7cf0e74d98623d413828ec34e20_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab310b4a959ebc3f4be0c48dd3ae99edb939a5e7dd9a02f39f65995f58481c1d = $this->env->getExtension("native_profiler");
        $__internal_ab310b4a959ebc3f4be0c48dd3ae99edb939a5e7dd9a02f39f65995f58481c1d->enter($__internal_ab310b4a959ebc3f4be0c48dd3ae99edb939a5e7dd9a02f39f65995f58481c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ab310b4a959ebc3f4be0c48dd3ae99edb939a5e7dd9a02f39f65995f58481c1d->leave($__internal_ab310b4a959ebc3f4be0c48dd3ae99edb939a5e7dd9a02f39f65995f58481c1d_prof);

    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        $__internal_69cfc06766438e6d583605380903ea09ac048e1367a173eedbf5f3d466ff3596 = $this->env->getExtension("native_profiler");
        $__internal_69cfc06766438e6d583605380903ea09ac048e1367a173eedbf5f3d466ff3596->enter($__internal_69cfc06766438e6d583605380903ea09ac048e1367a173eedbf5f3d466ff3596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 63
        echo "            ";
        
        $__internal_69cfc06766438e6d583605380903ea09ac048e1367a173eedbf5f3d466ff3596->leave($__internal_69cfc06766438e6d583605380903ea09ac048e1367a173eedbf5f3d466ff3596_prof);

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
        return array (  197 => 63,  191 => 62,  180 => 13,  170 => 11,  164 => 10,  156 => 7,  150 => 6,  129 => 72,  124 => 70,  116 => 64,  114 => 62,  105 => 55,  96 => 51,  92 => 50,  67 => 28,  57 => 21,  53 => 20,  43 => 14,  40 => 13,  38 => 10,  35 => 9,  33 => 6,  26 => 1,);
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
/* 	 <div id="job_history">*/
/* 	    */
/* 	    Recent viewed jobs:*/
/* 	    <ul>*/
/* 	        {% for job in app.session.get('job_history') %}*/
/* 	            <li>*/
/* 	                */
/* 	            </li>*/
/* 	        {% endfor %}*/
/* 	    </ul>*/
/* 	    */
/* 	</div>*/
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
