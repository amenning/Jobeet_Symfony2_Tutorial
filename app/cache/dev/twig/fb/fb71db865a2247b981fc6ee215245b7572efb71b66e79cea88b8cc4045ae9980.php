<?php

/* job/show.html.twig */
class __TwigTemplate_217e238c07fd2727243ea3de931f907f984255b4ad794f3e4dc120693332b1fb extends Twig_Template
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
        $__internal_329f5a6fdd18c4490b673b05aedf9b9f6221d414f4ec4d2a4f10f6a1e36715ac = $this->env->getExtension("native_profiler");
        $__internal_329f5a6fdd18c4490b673b05aedf9b9f6221d414f4ec4d2a4f10f6a1e36715ac->enter($__internal_329f5a6fdd18c4490b673b05aedf9b9f6221d414f4ec4d2a4f10f6a1e36715ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_329f5a6fdd18c4490b673b05aedf9b9f6221d414f4ec4d2a4f10f6a1e36715ac->leave($__internal_329f5a6fdd18c4490b673b05aedf9b9f6221d414f4ec4d2a4f10f6a1e36715ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9e3ffa50c73ba4e68895fc6487a345c8239760de349c0a3dfc25622aef22bba = $this->env->getExtension("native_profiler");
        $__internal_a9e3ffa50c73ba4e68895fc6487a345c8239760de349c0a3dfc25622aef22bba->enter($__internal_a9e3ffa50c73ba4e68895fc6487a345c8239760de349c0a3dfc25622aef22bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo " is looking for a ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
";
        
        $__internal_a9e3ffa50c73ba4e68895fc6487a345c8239760de349c0a3dfc25622aef22bba->leave($__internal_a9e3ffa50c73ba4e68895fc6487a345c8239760de349c0a3dfc25622aef22bba_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_845afce01e5833c25402073fa1cd2c6cef4534c43f6e8535337d04f1439f7604 = $this->env->getExtension("native_profiler");
        $__internal_845afce01e5833c25402073fa1cd2c6cef4534c43f6e8535337d04f1439f7604->enter($__internal_845afce01e5833c25402073fa1cd2c6cef4534c43f6e8535337d04f1439f7604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_845afce01e5833c25402073fa1cd2c6cef4534c43f6e8535337d04f1439f7604->leave($__internal_845afce01e5833c25402073fa1cd2c6cef4534c43f6e8535337d04f1439f7604_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9718025a28bcd24032651ad1bfc951628abde0918d5f8dac6115df185a4bc9e = $this->env->getExtension("native_profiler");
        $__internal_c9718025a28bcd24032651ad1bfc951628abde0918d5f8dac6115df185a4bc9e->enter($__internal_c9718025a28bcd24032651ad1bfc951628abde0918d5f8dac6115df185a4bc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div id=\"job\">
      <h1>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo "</h1>
      <h2>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "location", array()), "html", null, true);
        echo "</h2>
      <h3>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "
        <small> - ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "type", array()), "html", null, true);
        echo "</small>
      </h3>
 
      ";
        // line 21
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array())) {
            // line 22
            echo "        <div class=\"logo\">
          <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "url", array()), "html", null, true);
            echo "\">
            <img src=\"/uploads/jobs/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array()), "html", null, true);
            echo "\"
              alt=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
            echo " logo\" />
          </a>
        </div>
      ";
        }
        // line 29
        echo " 
      <div class=\"description\">
        ";
        // line 31
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "description", array()), "html", null, true));
        echo "
      </div>
 
      <h4>How to apply?</h4>
 
      <p class=\"how_to_apply\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "howtoapply", array()), "html", null, true);
        echo "</p>
 
      <div class=\"meta\">
        <small>posted on ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "createdat", array()), "m/d/Y"), "html", null, true);
        echo "</small>
      </div>
 
      <div style=\"padding: 20px 0\">
        <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id", array()))), "html", null, true);
        echo "\">
          Edit
        </a>
      </div>
    </div>
";
        
        $__internal_c9718025a28bcd24032651ad1bfc951628abde0918d5f8dac6115df185a4bc9e->leave($__internal_c9718025a28bcd24032651ad1bfc951628abde0918d5f8dac6115df185a4bc9e_prof);

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
        return array (  147 => 43,  140 => 39,  134 => 36,  126 => 31,  122 => 29,  115 => 25,  111 => 24,  107 => 23,  104 => 22,  102 => 21,  96 => 18,  92 => 17,  87 => 15,  83 => 14,  80 => 13,  74 => 12,  65 => 9,  60 => 8,  54 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/*         <a href="{{ path('ens_job_edit', { 'id': job.id }) }}">*/
/*           Edit*/
/*         </a>*/
/*       </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
