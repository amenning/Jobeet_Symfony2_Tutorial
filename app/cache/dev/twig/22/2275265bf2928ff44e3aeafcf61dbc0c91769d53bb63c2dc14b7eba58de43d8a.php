<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_54234b1ebe8ce7d3a7dcbfcc334e52a20ee570d2a1127c371b232407937f69c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb645bad0bbe2b86d7c4b6c5a9da90685648d8e8df15999a98a4760b67a76138 = $this->env->getExtension("native_profiler");
        $__internal_eb645bad0bbe2b86d7c4b6c5a9da90685648d8e8df15999a98a4760b67a76138->enter($__internal_eb645bad0bbe2b86d7c4b6c5a9da90685648d8e8df15999a98a4760b67a76138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb645bad0bbe2b86d7c4b6c5a9da90685648d8e8df15999a98a4760b67a76138->leave($__internal_eb645bad0bbe2b86d7c4b6c5a9da90685648d8e8df15999a98a4760b67a76138_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c7712c6801ff53dc24939fbf4c66d1a3e086a35770ee04ab9de7d60a7cf1a2b = $this->env->getExtension("native_profiler");
        $__internal_0c7712c6801ff53dc24939fbf4c66d1a3e086a35770ee04ab9de7d60a7cf1a2b->enter($__internal_0c7712c6801ff53dc24939fbf4c66d1a3e086a35770ee04ab9de7d60a7cf1a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0c7712c6801ff53dc24939fbf4c66d1a3e086a35770ee04ab9de7d60a7cf1a2b->leave($__internal_0c7712c6801ff53dc24939fbf4c66d1a3e086a35770ee04ab9de7d60a7cf1a2b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_47957c1ba3d4f96250f9b2b73e5fc9950cf4bf29b2eccdfd7f522e32ca590623 = $this->env->getExtension("native_profiler");
        $__internal_47957c1ba3d4f96250f9b2b73e5fc9950cf4bf29b2eccdfd7f522e32ca590623->enter($__internal_47957c1ba3d4f96250f9b2b73e5fc9950cf4bf29b2eccdfd7f522e32ca590623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_47957c1ba3d4f96250f9b2b73e5fc9950cf4bf29b2eccdfd7f522e32ca590623->leave($__internal_47957c1ba3d4f96250f9b2b73e5fc9950cf4bf29b2eccdfd7f522e32ca590623_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d2b92bf5ca1eb3295205cbba98778e7211985052889f79f5fd811a84a8671e3 = $this->env->getExtension("native_profiler");
        $__internal_8d2b92bf5ca1eb3295205cbba98778e7211985052889f79f5fd811a84a8671e3->enter($__internal_8d2b92bf5ca1eb3295205cbba98778e7211985052889f79f5fd811a84a8671e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8d2b92bf5ca1eb3295205cbba98778e7211985052889f79f5fd811a84a8671e3->leave($__internal_8d2b92bf5ca1eb3295205cbba98778e7211985052889f79f5fd811a84a8671e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
