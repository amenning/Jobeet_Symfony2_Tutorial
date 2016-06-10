<?php

/* EnsJobeetBundle:Category:show.html.twig */
class __TwigTemplate_82b439122c61abbc49a1d314b0c5d3bf1e280fe87044ea6efb0611e60eb0866c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EnsJobeetBundle:Category:show.html.twig", 1);
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
        $__internal_011b931d83b1cf53fecd1ea82e2f74ebbc8f30c1635be052df8521b772f75cff = $this->env->getExtension("native_profiler");
        $__internal_011b931d83b1cf53fecd1ea82e2f74ebbc8f30c1635be052df8521b772f75cff->enter($__internal_011b931d83b1cf53fecd1ea82e2f74ebbc8f30c1635be052df8521b772f75cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_011b931d83b1cf53fecd1ea82e2f74ebbc8f30c1635be052df8521b772f75cff->leave($__internal_011b931d83b1cf53fecd1ea82e2f74ebbc8f30c1635be052df8521b772f75cff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_76b1e3adc9bd53d82d9733682922ce582c23ebdcfa7c3b6dabc251835f52ba0e = $this->env->getExtension("native_profiler");
        $__internal_76b1e3adc9bd53d82d9733682922ce582c23ebdcfa7c3b6dabc251835f52ba0e->enter($__internal_76b1e3adc9bd53d82d9733682922ce582c23ebdcfa7c3b6dabc251835f52ba0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Jobs in the ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo " category
";
        
        $__internal_76b1e3adc9bd53d82d9733682922ce582c23ebdcfa7c3b6dabc251835f52ba0e->leave($__internal_76b1e3adc9bd53d82d9733682922ce582c23ebdcfa7c3b6dabc251835f52ba0e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d0f50ff89e200ef31fe507c832e1d1d80edbed4d3ccb5a27c7b9a98c93ab8a8 = $this->env->getExtension("native_profiler");
        $__internal_9d0f50ff89e200ef31fe507c832e1d1d80edbed4d3ccb5a27c7b9a98c93ab8a8->enter($__internal_9d0f50ff89e200ef31fe507c832e1d1d80edbed4d3ccb5a27c7b9a98c93ab8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9d0f50ff89e200ef31fe507c832e1d1d80edbed4d3ccb5a27c7b9a98c93ab8a8->leave($__internal_9d0f50ff89e200ef31fe507c832e1d1d80edbed4d3ccb5a27c7b9a98c93ab8a8_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ec9422103e2620e089d05fe161f776b67efce617a7bb873c3821d2636b0b9e5 = $this->env->getExtension("native_profiler");
        $__internal_8ec9422103e2620e089d05fe161f776b67efce617a7bb873c3821d2636b0b9e5->enter($__internal_8ec9422103e2620e089d05fe161f776b67efce617a7bb873c3821d2636b0b9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"category\">
    <div class=\"feed\">
      <a href=\"\">Feed</a>
    </div>
    <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</h1>
  </div>
 
";
        // line 20
        $this->loadTemplate("EnsJobeetBundle:Job:list.html.twig", "EnsJobeetBundle:Category:show.html.twig", 20)->display(array_merge($context, array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs", array()))));
        
        $__internal_8ec9422103e2620e089d05fe161f776b67efce617a7bb873c3821d2636b0b9e5->leave($__internal_8ec9422103e2620e089d05fe161f776b67efce617a7bb873c3821d2636b0b9e5_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  84 => 17,  78 => 13,  72 => 12,  63 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/*  */
/* {% block title %}*/
/*   Jobs in the {{ category.name }} category*/
/* {% endblock %}*/
/*  */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/*  */
/* {% block body %}*/
/*   <div class="category">*/
/*     <div class="feed">*/
/*       <a href="">Feed</a>*/
/*     </div>*/
/*     <h1>{{ category.name }}</h1>*/
/*   </div>*/
/*  */
/* {% include 'EnsJobeetBundle:Job:list.html.twig' with {'jobs': category.activejobs} %}*/
/* {% endblock %}*/
