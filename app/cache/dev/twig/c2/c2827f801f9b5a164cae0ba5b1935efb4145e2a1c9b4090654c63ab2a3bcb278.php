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
        $__internal_95560cb2b323406db4c78a3c9d6b8274c4a7636fb303f67bb8221e603c69c2e9 = $this->env->getExtension("native_profiler");
        $__internal_95560cb2b323406db4c78a3c9d6b8274c4a7636fb303f67bb8221e603c69c2e9->enter($__internal_95560cb2b323406db4c78a3c9d6b8274c4a7636fb303f67bb8221e603c69c2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
 
         ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 47
            echo "          <div class=\"flash_notice\">
            ";
            // line 48
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo " 
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 53
            echo "          <div class=\"flash_error\">
            ";
            // line 54
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t
 
\t <div id=\"job_history\">
\t    Recent viewed jobs:
\t    <ul>
\t        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "job_history"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 62
            echo "\t            <li>
\t               <a href=\"";
            // line 63
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
        // line 66
        echo "\t    </ul>
\t</div>
 
      <div id=\"content\">

        <div class=\"content\">
            ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "        </div>
      </div>
 
      <div id=\"footer\">
        <div class=\"content\">
          <span class=\"symfony\">
            <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
            powered by <a href=\"http://www.symfony.com/\">
              <img src=\"";
        // line 82
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
        
        $__internal_95560cb2b323406db4c78a3c9d6b8274c4a7636fb303f67bb8221e603c69c2e9->leave($__internal_95560cb2b323406db4c78a3c9d6b8274c4a7636fb303f67bb8221e603c69c2e9_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e5b8205542443cd721bc4206ff0bbb881492ee2018ff0c9bb4b92114e33f3c0 = $this->env->getExtension("native_profiler");
        $__internal_9e5b8205542443cd721bc4206ff0bbb881492ee2018ff0c9bb4b92114e33f3c0->enter($__internal_9e5b8205542443cd721bc4206ff0bbb881492ee2018ff0c9bb4b92114e33f3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "        \t\tJobeet - Your best job board
      \t\t";
        
        $__internal_9e5b8205542443cd721bc4206ff0bbb881492ee2018ff0c9bb4b92114e33f3c0->leave($__internal_9e5b8205542443cd721bc4206ff0bbb881492ee2018ff0c9bb4b92114e33f3c0_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8bda0b3179046bdb8b5ebc9e8c3dc817ee3e5a57e70e8a6c9573c7e0aa94f7b8 = $this->env->getExtension("native_profiler");
        $__internal_8bda0b3179046bdb8b5ebc9e8c3dc817ee3e5a57e70e8a6c9573c7e0aa94f7b8->enter($__internal_8bda0b3179046bdb8b5ebc9e8c3dc817ee3e5a57e70e8a6c9573c7e0aa94f7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "      \t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    \t";
        
        $__internal_8bda0b3179046bdb8b5ebc9e8c3dc817ee3e5a57e70e8a6c9573c7e0aa94f7b8->leave($__internal_8bda0b3179046bdb8b5ebc9e8c3dc817ee3e5a57e70e8a6c9573c7e0aa94f7b8_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b77c45c188484556ff50046e5caab156c5510ecf9d699a1127e109eaa0467326 = $this->env->getExtension("native_profiler");
        $__internal_b77c45c188484556ff50046e5caab156c5510ecf9d699a1127e109eaa0467326->enter($__internal_b77c45c188484556ff50046e5caab156c5510ecf9d699a1127e109eaa0467326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b77c45c188484556ff50046e5caab156c5510ecf9d699a1127e109eaa0467326->leave($__internal_b77c45c188484556ff50046e5caab156c5510ecf9d699a1127e109eaa0467326_prof);

    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        $__internal_8775313334008f5aef587cc2311d73ee156b7d313856bfce91d3fcb0da3d6424 = $this->env->getExtension("native_profiler");
        $__internal_8775313334008f5aef587cc2311d73ee156b7d313856bfce91d3fcb0da3d6424->enter($__internal_8775313334008f5aef587cc2311d73ee156b7d313856bfce91d3fcb0da3d6424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 73
        echo "            ";
        
        $__internal_8775313334008f5aef587cc2311d73ee156b7d313856bfce91d3fcb0da3d6424->leave($__internal_8775313334008f5aef587cc2311d73ee156b7d313856bfce91d3fcb0da3d6424_prof);

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
        return array (  241 => 73,  235 => 72,  224 => 13,  214 => 11,  208 => 10,  200 => 7,  194 => 6,  173 => 82,  168 => 80,  160 => 74,  158 => 72,  150 => 66,  137 => 63,  134 => 62,  130 => 61,  123 => 56,  114 => 54,  111 => 53,  107 => 52,  104 => 51,  95 => 48,  92 => 47,  88 => 46,  67 => 28,  57 => 21,  53 => 20,  43 => 14,  40 => 13,  38 => 10,  35 => 9,  33 => 6,  26 => 1,);
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
/*             <li class="feed"><a href="">Full feed</a></li>*/
/*             <li><a href="">Jobeet API</a></li>*/
/*             <li class="last"><a href="">Affiliates</a></li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </body>*/
/* </html>*/
