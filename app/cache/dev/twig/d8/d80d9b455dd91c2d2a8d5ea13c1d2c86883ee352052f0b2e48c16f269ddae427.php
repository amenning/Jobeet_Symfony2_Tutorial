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
        $__internal_9bf5e2727d3080c3063ab203caaf6c43b09329f602d806a229562844ba2708c4 = $this->env->getExtension("native_profiler");
        $__internal_9bf5e2727d3080c3063ab203caaf6c43b09329f602d806a229562844ba2708c4->enter($__internal_9bf5e2727d3080c3063ab203caaf6c43b09329f602d806a229562844ba2708c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9bf5e2727d3080c3063ab203caaf6c43b09329f602d806a229562844ba2708c4->leave($__internal_9bf5e2727d3080c3063ab203caaf6c43b09329f602d806a229562844ba2708c4_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_205ae50ba6db9425d3f91c061f1a40eac173fcdeca688a4d98fe98da62df11c6 = $this->env->getExtension("native_profiler");
        $__internal_205ae50ba6db9425d3f91c061f1a40eac173fcdeca688a4d98fe98da62df11c6->enter($__internal_205ae50ba6db9425d3f91c061f1a40eac173fcdeca688a4d98fe98da62df11c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "        \t\tJobeet - Your best job board
      \t\t";
        
        $__internal_205ae50ba6db9425d3f91c061f1a40eac173fcdeca688a4d98fe98da62df11c6->leave($__internal_205ae50ba6db9425d3f91c061f1a40eac173fcdeca688a4d98fe98da62df11c6_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8210c4f5e38e8c0b58b1ac14336473ed9b499487a2ee3b28dbcb42504d4e51d8 = $this->env->getExtension("native_profiler");
        $__internal_8210c4f5e38e8c0b58b1ac14336473ed9b499487a2ee3b28dbcb42504d4e51d8->enter($__internal_8210c4f5e38e8c0b58b1ac14336473ed9b499487a2ee3b28dbcb42504d4e51d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "      \t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    \t";
        
        $__internal_8210c4f5e38e8c0b58b1ac14336473ed9b499487a2ee3b28dbcb42504d4e51d8->leave($__internal_8210c4f5e38e8c0b58b1ac14336473ed9b499487a2ee3b28dbcb42504d4e51d8_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_834b9d7759b5f6e1e2b2d3afc490ae78d991eaeb6ddeae8b4d3f976418bb94c6 = $this->env->getExtension("native_profiler");
        $__internal_834b9d7759b5f6e1e2b2d3afc490ae78d991eaeb6ddeae8b4d3f976418bb94c6->enter($__internal_834b9d7759b5f6e1e2b2d3afc490ae78d991eaeb6ddeae8b4d3f976418bb94c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_834b9d7759b5f6e1e2b2d3afc490ae78d991eaeb6ddeae8b4d3f976418bb94c6->leave($__internal_834b9d7759b5f6e1e2b2d3afc490ae78d991eaeb6ddeae8b4d3f976418bb94c6_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_598abad5ae00af2b2dcb220afb806444dfadf91df310fe6bd103a5b2f799696b = $this->env->getExtension("native_profiler");
        $__internal_598abad5ae00af2b2dcb220afb806444dfadf91df310fe6bd103a5b2f799696b->enter($__internal_598abad5ae00af2b2dcb220afb806444dfadf91df310fe6bd103a5b2f799696b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "            ";
        
        $__internal_598abad5ae00af2b2dcb220afb806444dfadf91df310fe6bd103a5b2f799696b->leave($__internal_598abad5ae00af2b2dcb220afb806444dfadf91df310fe6bd103a5b2f799696b_prof);

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
