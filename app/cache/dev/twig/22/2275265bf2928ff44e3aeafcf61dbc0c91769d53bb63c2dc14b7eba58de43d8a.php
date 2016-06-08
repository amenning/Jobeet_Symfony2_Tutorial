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
        $__internal_2d93fc4e4ddd0c979fef7e60f5e1867fa3cd7a23451326a812c5e8ae8e52cab5 = $this->env->getExtension("native_profiler");
        $__internal_2d93fc4e4ddd0c979fef7e60f5e1867fa3cd7a23451326a812c5e8ae8e52cab5->enter($__internal_2d93fc4e4ddd0c979fef7e60f5e1867fa3cd7a23451326a812c5e8ae8e52cab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d93fc4e4ddd0c979fef7e60f5e1867fa3cd7a23451326a812c5e8ae8e52cab5->leave($__internal_2d93fc4e4ddd0c979fef7e60f5e1867fa3cd7a23451326a812c5e8ae8e52cab5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48bf6d81116b8fad7339eb30b5d7c948440a36841df0b378eff205bf6b4949df = $this->env->getExtension("native_profiler");
        $__internal_48bf6d81116b8fad7339eb30b5d7c948440a36841df0b378eff205bf6b4949df->enter($__internal_48bf6d81116b8fad7339eb30b5d7c948440a36841df0b378eff205bf6b4949df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_48bf6d81116b8fad7339eb30b5d7c948440a36841df0b378eff205bf6b4949df->leave($__internal_48bf6d81116b8fad7339eb30b5d7c948440a36841df0b378eff205bf6b4949df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4659f2402c32c91d4d35ab16d73356ac27f5d9401f688b582b189a2eb60a36a = $this->env->getExtension("native_profiler");
        $__internal_a4659f2402c32c91d4d35ab16d73356ac27f5d9401f688b582b189a2eb60a36a->enter($__internal_a4659f2402c32c91d4d35ab16d73356ac27f5d9401f688b582b189a2eb60a36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a4659f2402c32c91d4d35ab16d73356ac27f5d9401f688b582b189a2eb60a36a->leave($__internal_a4659f2402c32c91d4d35ab16d73356ac27f5d9401f688b582b189a2eb60a36a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_51285dfb808b825d3ee14cd1218542e0dc5c2e32a0809875196d101ed830bd7a = $this->env->getExtension("native_profiler");
        $__internal_51285dfb808b825d3ee14cd1218542e0dc5c2e32a0809875196d101ed830bd7a->enter($__internal_51285dfb808b825d3ee14cd1218542e0dc5c2e32a0809875196d101ed830bd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_51285dfb808b825d3ee14cd1218542e0dc5c2e32a0809875196d101ed830bd7a->leave($__internal_51285dfb808b825d3ee14cd1218542e0dc5c2e32a0809875196d101ed830bd7a_prof);

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
