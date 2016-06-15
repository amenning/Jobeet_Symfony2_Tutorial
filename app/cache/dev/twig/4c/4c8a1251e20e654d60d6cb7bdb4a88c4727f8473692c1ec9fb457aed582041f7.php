<?php

/* :job:show.html.twig */
class __TwigTemplate_eadad9530d23da1c683bdb6ea76bd196e4b70e90fb7904dd8a8f730971fd43e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:show.html.twig", 1);
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
        $__internal_169d0ec208ecd3e9ba645f8d94b0224048a6e4a1d7a0ccae21e50f9d99bf53e2 = $this->env->getExtension("native_profiler");
        $__internal_169d0ec208ecd3e9ba645f8d94b0224048a6e4a1d7a0ccae21e50f9d99bf53e2->enter($__internal_169d0ec208ecd3e9ba645f8d94b0224048a6e4a1d7a0ccae21e50f9d99bf53e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_169d0ec208ecd3e9ba645f8d94b0224048a6e4a1d7a0ccae21e50f9d99bf53e2->leave($__internal_169d0ec208ecd3e9ba645f8d94b0224048a6e4a1d7a0ccae21e50f9d99bf53e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_736a37230cc98c30cb5b7cde7e3bef2b23de2b54ee286cbb91ec5370241230c6 = $this->env->getExtension("native_profiler");
        $__internal_736a37230cc98c30cb5b7cde7e3bef2b23de2b54ee286cbb91ec5370241230c6->enter($__internal_736a37230cc98c30cb5b7cde7e3bef2b23de2b54ee286cbb91ec5370241230c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
";
        
        $__internal_736a37230cc98c30cb5b7cde7e3bef2b23de2b54ee286cbb91ec5370241230c6->leave($__internal_736a37230cc98c30cb5b7cde7e3bef2b23de2b54ee286cbb91ec5370241230c6_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b439340ee26e05ca5566a260d24dd9c6bdb92f6b5e2b1ef36bd26fef1117ac2c = $this->env->getExtension("native_profiler");
        $__internal_b439340ee26e05ca5566a260d24dd9c6bdb92f6b5e2b1ef36bd26fef1117ac2c->enter($__internal_b439340ee26e05ca5566a260d24dd9c6bdb92f6b5e2b1ef36bd26fef1117ac2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b439340ee26e05ca5566a260d24dd9c6bdb92f6b5e2b1ef36bd26fef1117ac2c->leave($__internal_b439340ee26e05ca5566a260d24dd9c6bdb92f6b5e2b1ef36bd26fef1117ac2c_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_14c761e2adfd313b53bfe4223e616f4eeb1449ac541c4b1a37e40a9c30b5c98b = $this->env->getExtension("native_profiler");
        $__internal_14c761e2adfd313b53bfe4223e616f4eeb1449ac541c4b1a37e40a9c30b5c98b->enter($__internal_14c761e2adfd313b53bfe4223e616f4eeb1449ac541c4b1a37e40a9c30b5c98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  \t";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "token"), "method")) {
            // line 14
            echo "    \t";
            $this->loadTemplate("EnsJobeetBundle:Job:admin.html.twig", ":job:show.html.twig", 14)->display(array_merge($context, array("job" => (isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")))));
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
 
      <div style=\"padding: 20px 0\">
        <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
        echo "\">
          Edit
        </a>
      </div>
    </div>
";
        
        $__internal_14c761e2adfd313b53bfe4223e616f4eeb1449ac541c4b1a37e40a9c30b5c98b->leave($__internal_14c761e2adfd313b53bfe4223e616f4eeb1449ac541c4b1a37e40a9c30b5c98b_prof);

    }

    public function getTemplateName()
    {
        return ":job:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 47,  150 => 43,  144 => 40,  136 => 35,  132 => 33,  125 => 29,  121 => 28,  117 => 27,  114 => 26,  112 => 25,  106 => 22,  102 => 21,  97 => 19,  93 => 18,  89 => 16,  86 => 15,  83 => 14,  80 => 13,  74 => 12,  65 => 9,  60 => 8,  54 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/*  */
/*       <div style="padding: 20px 0">*/
/*         <a href="{{ path('ens_job_edit', { 'token': job.token }) }}">*/
/*           Edit*/
/*         </a>*/
/*       </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
