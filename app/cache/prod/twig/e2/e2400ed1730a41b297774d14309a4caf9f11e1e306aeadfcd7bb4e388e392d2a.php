<?php

/* :category:show.html.twig */
class __TwigTemplate_52b39ca6ee939b620ee83a8a4d50b25777cb6b923040f16a863e5c1a96c89efd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Jobs in the ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        echo " category
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "  <div class=\"category\">
    <div class=\"feed\">
      <a href=\"\">Feed</a>
    </div>
    <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        echo "</h1>
  </div>
 
";
        // line 20
        $this->loadTemplate("EnsJobeetBundle:Job:list.html.twig", ":category:show.html.twig", 20)->display(array_merge($context, array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "activejobs", array()))));
    }

    public function getTemplateName()
    {
        return ":category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  63 => 17,  57 => 13,  54 => 12,  48 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
/* {% block content %}*/
/*   <div class="category">*/
/*     <div class="feed">*/
/*       <a href="">Feed</a>*/
/*     </div>*/
/*     <h1>{{ category.name }}</h1>*/
/*   </div>*/
/*  */
/* {% include 'EnsJobeetBundle:Job:list.html.twig' with {'jobs': category.activejobs} %}*/
/* {% endblock %}*/
