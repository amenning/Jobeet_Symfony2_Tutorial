<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_640a2db2b754b49c23d427cf99dadbbfc5a24df6149f4d546f7fde7b9379bd21 extends Twig_Template
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
        $__internal_fab07c0517740134476f056f6230477ec8cd6fc09edf9d25b35e4cccff738e6c = $this->env->getExtension("native_profiler");
        $__internal_fab07c0517740134476f056f6230477ec8cd6fc09edf9d25b35e4cccff738e6c->enter($__internal_fab07c0517740134476f056f6230477ec8cd6fc09edf9d25b35e4cccff738e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fab07c0517740134476f056f6230477ec8cd6fc09edf9d25b35e4cccff738e6c->leave($__internal_fab07c0517740134476f056f6230477ec8cd6fc09edf9d25b35e4cccff738e6c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_230fd0d7afffdfca07598db1bde9184b27adbfaee5f4398c4f03e863f693f8ba = $this->env->getExtension("native_profiler");
        $__internal_230fd0d7afffdfca07598db1bde9184b27adbfaee5f4398c4f03e863f693f8ba->enter($__internal_230fd0d7afffdfca07598db1bde9184b27adbfaee5f4398c4f03e863f693f8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_230fd0d7afffdfca07598db1bde9184b27adbfaee5f4398c4f03e863f693f8ba->leave($__internal_230fd0d7afffdfca07598db1bde9184b27adbfaee5f4398c4f03e863f693f8ba_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e909b558af7c96c8dfca42ac807d1e4e28e5171b02c3933e04dd7523dfb94c7 = $this->env->getExtension("native_profiler");
        $__internal_4e909b558af7c96c8dfca42ac807d1e4e28e5171b02c3933e04dd7523dfb94c7->enter($__internal_4e909b558af7c96c8dfca42ac807d1e4e28e5171b02c3933e04dd7523dfb94c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4e909b558af7c96c8dfca42ac807d1e4e28e5171b02c3933e04dd7523dfb94c7->leave($__internal_4e909b558af7c96c8dfca42ac807d1e4e28e5171b02c3933e04dd7523dfb94c7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cbab72b9c56511c5399546e4b4f2cfe498755bacde09cb55b998177fe96df37 = $this->env->getExtension("native_profiler");
        $__internal_3cbab72b9c56511c5399546e4b4f2cfe498755bacde09cb55b998177fe96df37->enter($__internal_3cbab72b9c56511c5399546e4b4f2cfe498755bacde09cb55b998177fe96df37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3cbab72b9c56511c5399546e4b4f2cfe498755bacde09cb55b998177fe96df37->leave($__internal_3cbab72b9c56511c5399546e4b4f2cfe498755bacde09cb55b998177fe96df37_prof);

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
