<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_205acc94e542b46da147428f321240ac476171d7c5df3cadb1a93aed8d1ea836 extends Twig_Template
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
        $__internal_3f045ff9759a7a261e9a02efcf952123bbe5ca56343c005b04c2949696987965 = $this->env->getExtension("native_profiler");
        $__internal_3f045ff9759a7a261e9a02efcf952123bbe5ca56343c005b04c2949696987965->enter($__internal_3f045ff9759a7a261e9a02efcf952123bbe5ca56343c005b04c2949696987965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f045ff9759a7a261e9a02efcf952123bbe5ca56343c005b04c2949696987965->leave($__internal_3f045ff9759a7a261e9a02efcf952123bbe5ca56343c005b04c2949696987965_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_94ce44e0d78a09686c518cb8f2484d1964b0b5c12cd2c3f0f22348e330755b55 = $this->env->getExtension("native_profiler");
        $__internal_94ce44e0d78a09686c518cb8f2484d1964b0b5c12cd2c3f0f22348e330755b55->enter($__internal_94ce44e0d78a09686c518cb8f2484d1964b0b5c12cd2c3f0f22348e330755b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_94ce44e0d78a09686c518cb8f2484d1964b0b5c12cd2c3f0f22348e330755b55->leave($__internal_94ce44e0d78a09686c518cb8f2484d1964b0b5c12cd2c3f0f22348e330755b55_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1bcbd302b5c5bb39dbd35647ce9e8f9830e5a59eac3720b4f906e9b7e0a13bc = $this->env->getExtension("native_profiler");
        $__internal_f1bcbd302b5c5bb39dbd35647ce9e8f9830e5a59eac3720b4f906e9b7e0a13bc->enter($__internal_f1bcbd302b5c5bb39dbd35647ce9e8f9830e5a59eac3720b4f906e9b7e0a13bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f1bcbd302b5c5bb39dbd35647ce9e8f9830e5a59eac3720b4f906e9b7e0a13bc->leave($__internal_f1bcbd302b5c5bb39dbd35647ce9e8f9830e5a59eac3720b4f906e9b7e0a13bc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b8d9b0951ca3db621c71900eeec598e8a2bb9c09ab7cb457879b61d5de36fc0 = $this->env->getExtension("native_profiler");
        $__internal_4b8d9b0951ca3db621c71900eeec598e8a2bb9c09ab7cb457879b61d5de36fc0->enter($__internal_4b8d9b0951ca3db621c71900eeec598e8a2bb9c09ab7cb457879b61d5de36fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4b8d9b0951ca3db621c71900eeec598e8a2bb9c09ab7cb457879b61d5de36fc0->leave($__internal_4b8d9b0951ca3db621c71900eeec598e8a2bb9c09ab7cb457879b61d5de36fc0_prof);

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
