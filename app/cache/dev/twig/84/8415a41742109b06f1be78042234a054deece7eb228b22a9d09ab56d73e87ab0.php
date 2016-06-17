<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c00035491781223455851eb1727d96d91413b2648db13cf907fa246c50ef2fb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_3228e6163b649db222d609c03ec7daf3469beb4c4b6a54583b97d8792d12e481 = $this->env->getExtension("native_profiler");
        $__internal_3228e6163b649db222d609c03ec7daf3469beb4c4b6a54583b97d8792d12e481->enter($__internal_3228e6163b649db222d609c03ec7daf3469beb4c4b6a54583b97d8792d12e481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3228e6163b649db222d609c03ec7daf3469beb4c4b6a54583b97d8792d12e481->leave($__internal_3228e6163b649db222d609c03ec7daf3469beb4c4b6a54583b97d8792d12e481_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_337484099c516b91cd9c6615035e92804257ec34e65392132dbbd3befa42ba2c = $this->env->getExtension("native_profiler");
        $__internal_337484099c516b91cd9c6615035e92804257ec34e65392132dbbd3befa42ba2c->enter($__internal_337484099c516b91cd9c6615035e92804257ec34e65392132dbbd3befa42ba2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_337484099c516b91cd9c6615035e92804257ec34e65392132dbbd3befa42ba2c->leave($__internal_337484099c516b91cd9c6615035e92804257ec34e65392132dbbd3befa42ba2c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_279ffc7617e6946762403e02d89c57c59cae652272c576fe7f7ae5ec7cc9ec82 = $this->env->getExtension("native_profiler");
        $__internal_279ffc7617e6946762403e02d89c57c59cae652272c576fe7f7ae5ec7cc9ec82->enter($__internal_279ffc7617e6946762403e02d89c57c59cae652272c576fe7f7ae5ec7cc9ec82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_279ffc7617e6946762403e02d89c57c59cae652272c576fe7f7ae5ec7cc9ec82->leave($__internal_279ffc7617e6946762403e02d89c57c59cae652272c576fe7f7ae5ec7cc9ec82_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f670da9c405c58830f042a3b4c3ba813e5ad313914e81cbf3dedb2fb232d8a5 = $this->env->getExtension("native_profiler");
        $__internal_7f670da9c405c58830f042a3b4c3ba813e5ad313914e81cbf3dedb2fb232d8a5->enter($__internal_7f670da9c405c58830f042a3b4c3ba813e5ad313914e81cbf3dedb2fb232d8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7f670da9c405c58830f042a3b4c3ba813e5ad313914e81cbf3dedb2fb232d8a5->leave($__internal_7f670da9c405c58830f042a3b4c3ba813e5ad313914e81cbf3dedb2fb232d8a5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
