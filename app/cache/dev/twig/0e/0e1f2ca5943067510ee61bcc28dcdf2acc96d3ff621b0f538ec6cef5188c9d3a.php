<?php

/* EnsJobeetBundle:category:show.html.twig */
class __TwigTemplate_bba2332c0071601553f033ef5e60aed2a319fcb69a6bda303fa15a272d08f033 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EnsJobeetBundle:category:show.html.twig", 1);
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
        $__internal_1f48e9bbc3d4e2d72c271fab2fe614c7cfbf6ad7e4d74d454ac74db6e23caf8e = $this->env->getExtension("native_profiler");
        $__internal_1f48e9bbc3d4e2d72c271fab2fe614c7cfbf6ad7e4d74d454ac74db6e23caf8e->enter($__internal_1f48e9bbc3d4e2d72c271fab2fe614c7cfbf6ad7e4d74d454ac74db6e23caf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f48e9bbc3d4e2d72c271fab2fe614c7cfbf6ad7e4d74d454ac74db6e23caf8e->leave($__internal_1f48e9bbc3d4e2d72c271fab2fe614c7cfbf6ad7e4d74d454ac74db6e23caf8e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0a95662be9aabe1d173a9cc194cc45bb8fff088833b6ecb262fd283dbcb6f14 = $this->env->getExtension("native_profiler");
        $__internal_f0a95662be9aabe1d173a9cc194cc45bb8fff088833b6ecb262fd283dbcb6f14->enter($__internal_f0a95662be9aabe1d173a9cc194cc45bb8fff088833b6ecb262fd283dbcb6f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Jobs in the ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo " category
";
        
        $__internal_f0a95662be9aabe1d173a9cc194cc45bb8fff088833b6ecb262fd283dbcb6f14->leave($__internal_f0a95662be9aabe1d173a9cc194cc45bb8fff088833b6ecb262fd283dbcb6f14_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_53c0977c89acf4b8b09fa7c7a146d7becd2635851e1896457401cf56188df4dc = $this->env->getExtension("native_profiler");
        $__internal_53c0977c89acf4b8b09fa7c7a146d7becd2635851e1896457401cf56188df4dc->enter($__internal_53c0977c89acf4b8b09fa7c7a146d7becd2635851e1896457401cf56188df4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_53c0977c89acf4b8b09fa7c7a146d7becd2635851e1896457401cf56188df4dc->leave($__internal_53c0977c89acf4b8b09fa7c7a146d7becd2635851e1896457401cf56188df4dc_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0ed6f95a9a2ab8d5abb47af2282a5aca1aa8d18228d544952fe09c82f8ed088 = $this->env->getExtension("native_profiler");
        $__internal_c0ed6f95a9a2ab8d5abb47af2282a5aca1aa8d18228d544952fe09c82f8ed088->enter($__internal_c0ed6f95a9a2ab8d5abb47af2282a5aca1aa8d18228d544952fe09c82f8ed088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("EnsJobeetBundle:Job:list.html.twig", "EnsJobeetBundle:category:show.html.twig", 20)->display(array_merge($context, array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs", array()))));
        
        $__internal_c0ed6f95a9a2ab8d5abb47af2282a5aca1aa8d18228d544952fe09c82f8ed088->leave($__internal_c0ed6f95a9a2ab8d5abb47af2282a5aca1aa8d18228d544952fe09c82f8ed088_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:category:show.html.twig";
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
