<?php

/* @EnsJobeet/layout.html.twig */
class __TwigTemplate_dc1a31c336368497de8333eb560dd02aeef02b7581048e87359fde6e547f65b6 extends Twig_Template
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
        $__internal_0f14a460ebc7d5fd464f4f817183275b4d75cc019e400a115a47fd45ec3ea840 = $this->env->getExtension("native_profiler");
        $__internal_0f14a460ebc7d5fd464f4f817183275b4d75cc019e400a115a47fd45ec3ea840->enter($__internal_0f14a460ebc7d5fd464f4f817183275b4d75cc019e400a115a47fd45ec3ea840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/layout.html.twig"));

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
        
        $__internal_0f14a460ebc7d5fd464f4f817183275b4d75cc019e400a115a47fd45ec3ea840->leave($__internal_0f14a460ebc7d5fd464f4f817183275b4d75cc019e400a115a47fd45ec3ea840_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_be25967502393e8d8db8baf4b2796f66320df206c4636c160a2ea3d4b911aa95 = $this->env->getExtension("native_profiler");
        $__internal_be25967502393e8d8db8baf4b2796f66320df206c4636c160a2ea3d4b911aa95->enter($__internal_be25967502393e8d8db8baf4b2796f66320df206c4636c160a2ea3d4b911aa95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "        Jobeet - Your best job board
      ";
        
        $__internal_be25967502393e8d8db8baf4b2796f66320df206c4636c160a2ea3d4b911aa95->leave($__internal_be25967502393e8d8db8baf4b2796f66320df206c4636c160a2ea3d4b911aa95_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7072b08ca3d50d0c3703e5af812d99d8e537df3e39083a552bf6c61a68ea24f5 = $this->env->getExtension("native_profiler");
        $__internal_7072b08ca3d50d0c3703e5af812d99d8e537df3e39083a552bf6c61a68ea24f5->enter($__internal_7072b08ca3d50d0c3703e5af812d99d8e537df3e39083a552bf6c61a68ea24f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        
        $__internal_7072b08ca3d50d0c3703e5af812d99d8e537df3e39083a552bf6c61a68ea24f5->leave($__internal_7072b08ca3d50d0c3703e5af812d99d8e537df3e39083a552bf6c61a68ea24f5_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c4dbf0960d5d064d54b7557083499cac5955267c5f19b346e3afde60ca0c410 = $this->env->getExtension("native_profiler");
        $__internal_7c4dbf0960d5d064d54b7557083499cac5955267c5f19b346e3afde60ca0c410->enter($__internal_7c4dbf0960d5d064d54b7557083499cac5955267c5f19b346e3afde60ca0c410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        
        $__internal_7c4dbf0960d5d064d54b7557083499cac5955267c5f19b346e3afde60ca0c410->leave($__internal_7c4dbf0960d5d064d54b7557083499cac5955267c5f19b346e3afde60ca0c410_prof);

    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        $__internal_88c1ed7fef0d6ad1233903d1f5484c1606e2574ef7d8d56c0098626cb1c60895 = $this->env->getExtension("native_profiler");
        $__internal_88c1ed7fef0d6ad1233903d1f5484c1606e2574ef7d8d56c0098626cb1c60895->enter($__internal_88c1ed7fef0d6ad1233903d1f5484c1606e2574ef7d8d56c0098626cb1c60895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 73
        echo "            ";
        
        $__internal_88c1ed7fef0d6ad1233903d1f5484c1606e2574ef7d8d56c0098626cb1c60895->leave($__internal_88c1ed7fef0d6ad1233903d1f5484c1606e2574ef7d8d56c0098626cb1c60895_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/layout.html.twig";
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
