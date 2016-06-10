<?php

/* @EnsJobeet/category/show.html.twig */
class __TwigTemplate_e829e50dc4dad18bc271c4a8ac590a808e206d68905be59080075b7fae379bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@EnsJobeet/category/show.html.twig", 1);
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
        $__internal_ad3b28b982478b0da5f65f786c3134b8841ebc05eac6601bc56799e9937776bd = $this->env->getExtension("native_profiler");
        $__internal_ad3b28b982478b0da5f65f786c3134b8841ebc05eac6601bc56799e9937776bd->enter($__internal_ad3b28b982478b0da5f65f786c3134b8841ebc05eac6601bc56799e9937776bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/category/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad3b28b982478b0da5f65f786c3134b8841ebc05eac6601bc56799e9937776bd->leave($__internal_ad3b28b982478b0da5f65f786c3134b8841ebc05eac6601bc56799e9937776bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb27563b5c53315c028eaa18d9b90467d0d7609bd40173f84df434ca9ffd27e2 = $this->env->getExtension("native_profiler");
        $__internal_bb27563b5c53315c028eaa18d9b90467d0d7609bd40173f84df434ca9ffd27e2->enter($__internal_bb27563b5c53315c028eaa18d9b90467d0d7609bd40173f84df434ca9ffd27e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Jobs in the ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo " category
";
        
        $__internal_bb27563b5c53315c028eaa18d9b90467d0d7609bd40173f84df434ca9ffd27e2->leave($__internal_bb27563b5c53315c028eaa18d9b90467d0d7609bd40173f84df434ca9ffd27e2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6821baaab8e4375c4a0c2512fe9183e355aabe7ddc6870dc1d934e12827b63ed = $this->env->getExtension("native_profiler");
        $__internal_6821baaab8e4375c4a0c2512fe9183e355aabe7ddc6870dc1d934e12827b63ed->enter($__internal_6821baaab8e4375c4a0c2512fe9183e355aabe7ddc6870dc1d934e12827b63ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6821baaab8e4375c4a0c2512fe9183e355aabe7ddc6870dc1d934e12827b63ed->leave($__internal_6821baaab8e4375c4a0c2512fe9183e355aabe7ddc6870dc1d934e12827b63ed_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab748625d0db80b392480c08f1b0e63737b37bd1fd9b60c5dd44cc170302f1ad = $this->env->getExtension("native_profiler");
        $__internal_ab748625d0db80b392480c08f1b0e63737b37bd1fd9b60c5dd44cc170302f1ad->enter($__internal_ab748625d0db80b392480c08f1b0e63737b37bd1fd9b60c5dd44cc170302f1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("EnsJobeetBundle:Job:list.html.twig", "@EnsJobeet/category/show.html.twig", 20)->display(array_merge($context, array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs", array()))));
        
        $__internal_ab748625d0db80b392480c08f1b0e63737b37bd1fd9b60c5dd44cc170302f1ad->leave($__internal_ab748625d0db80b392480c08f1b0e63737b37bd1fd9b60c5dd44cc170302f1ad_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJobeet/category/show.html.twig";
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
