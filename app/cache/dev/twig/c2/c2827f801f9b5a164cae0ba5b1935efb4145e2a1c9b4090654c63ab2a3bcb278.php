<?php

/* base.html.twig */
class __TwigTemplate_fbd50004d7fbab69e42dae1a8da3969bc42da56c149f0d16bc39d344d9dcf58b extends Twig_Template
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
        $__internal_0dec98786bb7443e2ab4fd5aabd637e310d643880deaf4c5e71d67f750854409 = $this->env->getExtension("native_profiler");
        $__internal_0dec98786bb7443e2ab4fd5aabd637e310d643880deaf4c5e71d67f750854409->enter($__internal_0dec98786bb7443e2ab4fd5aabd637e310d643880deaf4c5e71d67f750854409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link rel=\"alternate\" type=\"application/atom+xml\" title=\"Latest Jobs\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("ens_job_index", array("_format" => "atom"));
        echo "\" />
    </head>
  <body>
    <div id=\"container\">
      <div id=\"header\">
        <div class=\"content\">
          <h1><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ens_job_index");
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
 
         ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 48
            echo "          <div class=\"flash_notice\">
            ";
            // line 49
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo " 
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 54
            echo "          <div class=\"flash_error\">
            ";
            // line 55
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t
 
\t <div id=\"job_history\">
\t    Recent viewed jobs:
\t    <ul>
\t        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "job_history"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 63
            echo "\t            <li>
\t               <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($context["job"], "id", array()), "company" => $this->getAttribute($context["job"], "companyslug", array()), "location" => $this->getAttribute($context["job"], "locationslug", array()), "position" => $this->getAttribute($context["job"], "positionslug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
            echo "</a>
\t            </li>
\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t    </ul>
\t</div>
 
      <div id=\"content\">

        <div class=\"content\">
            ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "        </div>
      </div>
 
      <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
            </a>
          </span>
          <ul>
            <li><a href=\"\">About Jobeet</a></li>
            <li><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("ens_job_index", array("_format" => "atom"));
        echo "\">Full feed</a></li>
            <li><a href=\"\">Jobeet API</a></li>
            <li class=\"last\"><a href=\"\">Affiliates</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>";
        
        $__internal_0dec98786bb7443e2ab4fd5aabd637e310d643880deaf4c5e71d67f750854409->leave($__internal_0dec98786bb7443e2ab4fd5aabd637e310d643880deaf4c5e71d67f750854409_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_93a150750f5a85caff5f8e0f03340e865e58d63836524a4a44e5bbc7d523fa8d = $this->env->getExtension("native_profiler");
        $__internal_93a150750f5a85caff5f8e0f03340e865e58d63836524a4a44e5bbc7d523fa8d->enter($__internal_93a150750f5a85caff5f8e0f03340e865e58d63836524a4a44e5bbc7d523fa8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "        \t\tJobeet - Your best job board
      \t\t";
        
        $__internal_93a150750f5a85caff5f8e0f03340e865e58d63836524a4a44e5bbc7d523fa8d->leave($__internal_93a150750f5a85caff5f8e0f03340e865e58d63836524a4a44e5bbc7d523fa8d_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ca27d9a296ca22e4226147980caf2c60c01f36f9197f7f5202ce0be985d453c9 = $this->env->getExtension("native_profiler");
        $__internal_ca27d9a296ca22e4226147980caf2c60c01f36f9197f7f5202ce0be985d453c9->enter($__internal_ca27d9a296ca22e4226147980caf2c60c01f36f9197f7f5202ce0be985d453c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "      \t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    \t";
        
        $__internal_ca27d9a296ca22e4226147980caf2c60c01f36f9197f7f5202ce0be985d453c9->leave($__internal_ca27d9a296ca22e4226147980caf2c60c01f36f9197f7f5202ce0be985d453c9_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_124d8e2c490dcc62ca69825ab4b1177f8740e423c44696d94b7a9d4e6b91bc9c = $this->env->getExtension("native_profiler");
        $__internal_124d8e2c490dcc62ca69825ab4b1177f8740e423c44696d94b7a9d4e6b91bc9c->enter($__internal_124d8e2c490dcc62ca69825ab4b1177f8740e423c44696d94b7a9d4e6b91bc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_124d8e2c490dcc62ca69825ab4b1177f8740e423c44696d94b7a9d4e6b91bc9c->leave($__internal_124d8e2c490dcc62ca69825ab4b1177f8740e423c44696d94b7a9d4e6b91bc9c_prof);

    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c39618afc7b4c35123d679f8f0dca85f1583ba8dcbf0f1077c60e3fadc0f0bd = $this->env->getExtension("native_profiler");
        $__internal_0c39618afc7b4c35123d679f8f0dca85f1583ba8dcbf0f1077c60e3fadc0f0bd->enter($__internal_0c39618afc7b4c35123d679f8f0dca85f1583ba8dcbf0f1077c60e3fadc0f0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 74
        echo "            ";
        
        $__internal_0c39618afc7b4c35123d679f8f0dca85f1583ba8dcbf0f1077c60e3fadc0f0bd->leave($__internal_0c39618afc7b4c35123d679f8f0dca85f1583ba8dcbf0f1077c60e3fadc0f0bd_prof);

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
        return array (  248 => 74,  242 => 73,  231 => 13,  221 => 11,  215 => 10,  207 => 7,  201 => 6,  185 => 88,  177 => 83,  172 => 81,  164 => 75,  162 => 73,  154 => 67,  141 => 64,  138 => 63,  134 => 62,  127 => 57,  118 => 55,  115 => 54,  111 => 53,  108 => 52,  99 => 49,  96 => 48,  92 => 47,  71 => 29,  61 => 22,  57 => 21,  48 => 15,  43 => 14,  40 => 13,  38 => 10,  35 => 9,  33 => 6,  26 => 1,);
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
/*         <link rel="alternate" type="application/atom+xml" title="Latest Jobs" href="{{ url('ens_job_index', {'_format': 'atom' }) }}" />*/
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
/*          {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*           <div class="flash_notice">*/
/*             {{ flashMessage }}*/
/*           </div>*/
/*         {% endfor %}*/
/*  */
/*         {% for flashMessage in app.session.flashbag.get('error') %}*/
/*           <div class="flash_error">*/
/*             {{ flashMessage }}*/
/*           </div>*/
/*         {% endfor %}	*/
/*  */
/* 	 <div id="job_history">*/
/* 	    Recent viewed jobs:*/
/* 	    <ul>*/
/* 	        {% for job in app.session.get('job_history') %}*/
/* 	            <li>*/
/* 	               <a href="{{ path('ens_job_show', { 'id': job.id, 'company': job.companyslug, 'location': job.locationslug, 'position': job.positionslug }) }}">{{ job.position }} - {{ job.company }}</a>*/
/* 	            </li>*/
/* 	        {% endfor %}*/
/* 	    </ul>*/
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
/*             <li><a href="{{ path('ens_job_index', {'_format': 'atom'}) }}">Full feed</a></li>*/
/*             <li><a href="">Jobeet API</a></li>*/
/*             <li class="last"><a href="">Affiliates</a></li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </body>*/
/* </html>*/
