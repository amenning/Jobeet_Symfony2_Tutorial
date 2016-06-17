<?php

/* job/show.html.twig */
class __TwigTemplate_7dce0fc2a1904ebcea96c52455f36d6e99fa7995acdaebd5db496447416a2142 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49e97641805016a3f40f3883130bab18b0bedf53d3387fd92e2ba1a5464cf1c4 = $this->env->getExtension("native_profiler");
        $__internal_49e97641805016a3f40f3883130bab18b0bedf53d3387fd92e2ba1a5464cf1c4->enter($__internal_49e97641805016a3f40f3883130bab18b0bedf53d3387fd92e2ba1a5464cf1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49e97641805016a3f40f3883130bab18b0bedf53d3387fd92e2ba1a5464cf1c4->leave($__internal_49e97641805016a3f40f3883130bab18b0bedf53d3387fd92e2ba1a5464cf1c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce09e83ac1953d6cc638a4f0a15ab00ade7306d09f3adc53bbca6c12c9264d60 = $this->env->getExtension("native_profiler");
        $__internal_ce09e83ac1953d6cc638a4f0a15ab00ade7306d09f3adc53bbca6c12c9264d60->enter($__internal_ce09e83ac1953d6cc638a4f0a15ab00ade7306d09f3adc53bbca6c12c9264d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
";
        
        $__internal_ce09e83ac1953d6cc638a4f0a15ab00ade7306d09f3adc53bbca6c12c9264d60->leave($__internal_ce09e83ac1953d6cc638a4f0a15ab00ade7306d09f3adc53bbca6c12c9264d60_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67b4d9b4fdafb3bb1a2c47bde40024bb51d8226587d05709f532e1b8dfbfb4a2 = $this->env->getExtension("native_profiler");
        $__internal_67b4d9b4fdafb3bb1a2c47bde40024bb51d8226587d05709f532e1b8dfbfb4a2->enter($__internal_67b4d9b4fdafb3bb1a2c47bde40024bb51d8226587d05709f532e1b8dfbfb4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_67b4d9b4fdafb3bb1a2c47bde40024bb51d8226587d05709f532e1b8dfbfb4a2->leave($__internal_67b4d9b4fdafb3bb1a2c47bde40024bb51d8226587d05709f532e1b8dfbfb4a2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0942a8752a3c8fe9ac2ae3651d2619ea44aaf37d899b976b141edd33526a518 = $this->env->getExtension("native_profiler");
        $__internal_f0942a8752a3c8fe9ac2ae3651d2619ea44aaf37d899b976b141edd33526a518->enter($__internal_f0942a8752a3c8fe9ac2ae3651d2619ea44aaf37d899b976b141edd33526a518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  \t";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "token"), "method")) {
            // line 14
            echo "    \t";
            $this->loadTemplate("EnsJobeetBundle:Job:admin.html.twig", "job/show.html.twig", 14)->display(array_merge($context, array("job" => (isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")))));
            // line 15
            echo "  \t";
        }
        // line 16
        echo "
    <div id=\"job\">
      <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo "</h1>
      <h2>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "location", array()), "html", null, true);
        echo "</h2>
      <h3>
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
        <small> - ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "type", array()), "html", null, true);
        echo "</small>
      </h3>
 
      ";
        // line 25
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array())) {
            // line 26
            echo "        <div class=\"logo\">
          <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "url", array()), "html", null, true);
            echo "\">
            <img src=\"/uploads/jobs/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array()), "html", null, true);
            echo "\"
              alt=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
            echo " logo\" />
          </a>
        </div>
      ";
        }
        // line 33
        echo " 
      <div class=\"description\">
        ";
        // line 35
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "description", array()), "html", null, true));
        echo "
      </div>
 
      <h4>How to apply?</h4>
 
      <p class=\"how_to_apply\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "howtoapply", array()), "html", null, true);
        echo "</p>
 
      <div class=\"meta\">
        <small>posted on ";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "createdat", array()), "m/d/Y"), "html", null, true);
        echo "</small>
      </div>
 \t\t
 \t  ";
        // line 46
        if ( !$this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isActivated", array())) {
            echo "\t
      <div style=\"padding: 20px 0\">
        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
            echo "\">
          Edit
        </a>
      </div>
      ";
        }
        // line 53
        echo "    </div>
";
        
        $__internal_f0942a8752a3c8fe9ac2ae3651d2619ea44aaf37d899b976b141edd33526a518->leave($__internal_f0942a8752a3c8fe9ac2ae3651d2619ea44aaf37d899b976b141edd33526a518_prof);

    }

    public function getTemplateName()
    {
        return "job/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 53,  161 => 48,  156 => 46,  150 => 43,  144 => 40,  136 => 35,  132 => 33,  125 => 29,  121 => 28,  117 => 27,  114 => 26,  112 => 25,  106 => 22,  102 => 21,  97 => 19,  93 => 18,  89 => 16,  86 => 15,  83 => 14,  80 => 13,  74 => 12,  65 => 9,  60 => 8,  54 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ job.company }} is looking for a {{ job.position }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/job.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   	{% if app.request.get('token') %}*/
/*     	{% include 'EnsJobeetBundle:Job:admin.html.twig' with {'job': job} %}*/
/*   	{% endif %}*/
/* */
/*     <div id="job">*/
/*       <h1>{{ job.company }}</h1>*/
/*       <h2>{{ job.location }}</h2>*/
/*       <h3>*/
/*         {{ job.position }}*/
/*         <small> - {{ job.type }}</small>*/
/*       </h3>*/
/*  */
/*       {% if job.logo %}*/
/*         <div class="logo">*/
/*           <a href="{{ job.url }}">*/
/*             <img src="/uploads/jobs/{{ job.logo }}"*/
/*               alt="{{ job.company }} logo" />*/
/*           </a>*/
/*         </div>*/
/*       {% endif %}*/
/*  */
/*       <div class="description">*/
/*         {{ job.description|nl2br }}*/
/*       </div>*/
/*  */
/*       <h4>How to apply?</h4>*/
/*  */
/*       <p class="how_to_apply">{{ job.howtoapply }}</p>*/
/*  */
/*       <div class="meta">*/
/*         <small>posted on {{ job.createdat|date('m/d/Y') }}</small>*/
/*       </div>*/
/*  		*/
/*  	  {% if not job.isActivated %}	*/
/*       <div style="padding: 20px 0">*/
/*         <a href="{{ path('ens_job_edit', { 'token': job.token }) }}">*/
/*           Edit*/
/*         </a>*/
/*       </div>*/
/*       {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
