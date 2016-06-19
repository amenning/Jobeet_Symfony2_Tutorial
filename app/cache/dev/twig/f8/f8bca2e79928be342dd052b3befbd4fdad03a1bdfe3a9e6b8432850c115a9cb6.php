<?php

/* EnsJobeetBundle::layout.html.twig */
class __TwigTemplate_f5254a0cb975c10647741c7372306138e2ef5c9d7fa33fee5817bcf141f03f9e extends Twig_Template
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
        $__internal_0d053a5e0ed54f873112410473964cecbca5ac38b2dd58dff336196f5aca51b4 = $this->env->getExtension("native_profiler");
        $__internal_0d053a5e0ed54f873112410473964cecbca5ac38b2dd58dff336196f5aca51b4->enter($__internal_0d053a5e0ed54f873112410473964cecbca5ac38b2dd58dff336196f5aca51b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle::layout.html.twig"));

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
      
\t <div id=\"job_history\">
\t    Recent viewed jobs:
\t    <ul>
\t        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "job_history"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 51
            echo "\t            <li>
\t                <a href=\"";
            // line 52
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
        // line 55
        echo "\t    </ul>
\t</div>
\t
      <div id=\"content\">
        ";
        // line 59
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "hasFlash", array(0 => "notice"), "method")) {
            // line 60
            echo "          <div class=\"flash_notice\">
            ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 64
        echo " 
        ";
        // line 65
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "hasFlash", array(0 => "error"), "method")) {
            // line 66
            echo "          <div class=\"flash_error\">
            ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flash", array(0 => "error"), "method"), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 70
        echo " 
        <div class=\"content\">
            ";
        // line 72
        $this->displayBlock('content', $context, $blocks);
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
        
        $__internal_0d053a5e0ed54f873112410473964cecbca5ac38b2dd58dff336196f5aca51b4->leave($__internal_0d053a5e0ed54f873112410473964cecbca5ac38b2dd58dff336196f5aca51b4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_20d2962006e01882b175443d255ebe262d595ba4099485b74fb3077027104fd2 = $this->env->getExtension("native_profiler");
        $__internal_20d2962006e01882b175443d255ebe262d595ba4099485b74fb3077027104fd2->enter($__internal_20d2962006e01882b175443d255ebe262d595ba4099485b74fb3077027104fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "        Jobeet - Your best job board
      ";
        
        $__internal_20d2962006e01882b175443d255ebe262d595ba4099485b74fb3077027104fd2->leave($__internal_20d2962006e01882b175443d255ebe262d595ba4099485b74fb3077027104fd2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd1153913692b1bd4a4f790d56835095279757b3b1c6d2b0588c3d8fd0539739 = $this->env->getExtension("native_profiler");
        $__internal_cd1153913692b1bd4a4f790d56835095279757b3b1c6d2b0588c3d8fd0539739->enter($__internal_cd1153913692b1bd4a4f790d56835095279757b3b1c6d2b0588c3d8fd0539739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        
        $__internal_cd1153913692b1bd4a4f790d56835095279757b3b1c6d2b0588c3d8fd0539739->leave($__internal_cd1153913692b1bd4a4f790d56835095279757b3b1c6d2b0588c3d8fd0539739_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e018c13d2999b65775af10ee8e45136a6317f4c820c294066ede71c6022fc9c = $this->env->getExtension("native_profiler");
        $__internal_8e018c13d2999b65775af10ee8e45136a6317f4c820c294066ede71c6022fc9c->enter($__internal_8e018c13d2999b65775af10ee8e45136a6317f4c820c294066ede71c6022fc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        
        $__internal_8e018c13d2999b65775af10ee8e45136a6317f4c820c294066ede71c6022fc9c->leave($__internal_8e018c13d2999b65775af10ee8e45136a6317f4c820c294066ede71c6022fc9c_prof);

    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        $__internal_b5c33d59ad1f4d4da85377ecf1d14d9d45e1de38628a50309df8583a6a2c41ca = $this->env->getExtension("native_profiler");
        $__internal_b5c33d59ad1f4d4da85377ecf1d14d9d45e1de38628a50309df8583a6a2c41ca->enter($__internal_b5c33d59ad1f4d4da85377ecf1d14d9d45e1de38628a50309df8583a6a2c41ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 73
        echo "            ";
        
        $__internal_b5c33d59ad1f4d4da85377ecf1d14d9d45e1de38628a50309df8583a6a2c41ca->leave($__internal_b5c33d59ad1f4d4da85377ecf1d14d9d45e1de38628a50309df8583a6a2c41ca_prof);

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
        return array (  231 => 73,  225 => 72,  218 => 14,  212 => 13,  202 => 11,  196 => 10,  188 => 6,  182 => 5,  161 => 82,  156 => 80,  148 => 74,  146 => 72,  142 => 70,  136 => 67,  133 => 66,  131 => 65,  128 => 64,  122 => 61,  119 => 60,  117 => 59,  111 => 55,  98 => 52,  95 => 51,  91 => 50,  67 => 29,  57 => 22,  53 => 21,  43 => 15,  40 => 13,  38 => 10,  34 => 8,  32 => 5,  26 => 1,);
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
/*       */
/* 	 <div id="job_history">*/
/* 	    Recent viewed jobs:*/
/* 	    <ul>*/
/* 	        {% for job in app.session.get('job_history') %}*/
/* 	            <li>*/
/* 	                <a href="{{ path('ens_job_show', { 'id': job.id, 'company': job.companyslug, 'location': job.locationslug, 'position': job.positionslug }) }}">{{ job.position }} - {{ job.company }}</a>*/
/* 	            </li>*/
/* 	        {% endfor %}*/
/* 	    </ul>*/
/* 	</div>*/
/* 	*/
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
