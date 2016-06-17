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
        $__internal_d0b18c4175c9995aff0fab16c164d771d5936cef719bd4dfca5ab7884bcf413e = $this->env->getExtension("native_profiler");
        $__internal_d0b18c4175c9995aff0fab16c164d771d5936cef719bd4dfca5ab7884bcf413e->enter($__internal_d0b18c4175c9995aff0fab16c164d771d5936cef719bd4dfca5ab7884bcf413e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0b18c4175c9995aff0fab16c164d771d5936cef719bd4dfca5ab7884bcf413e->leave($__internal_d0b18c4175c9995aff0fab16c164d771d5936cef719bd4dfca5ab7884bcf413e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_983484b101b1f5c52bb407c68060fa4ddee5aacaf64b515c56c22e4e7bbc0023 = $this->env->getExtension("native_profiler");
        $__internal_983484b101b1f5c52bb407c68060fa4ddee5aacaf64b515c56c22e4e7bbc0023->enter($__internal_983484b101b1f5c52bb407c68060fa4ddee5aacaf64b515c56c22e4e7bbc0023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_983484b101b1f5c52bb407c68060fa4ddee5aacaf64b515c56c22e4e7bbc0023->leave($__internal_983484b101b1f5c52bb407c68060fa4ddee5aacaf64b515c56c22e4e7bbc0023_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f74eba2a602aa8ae97e98655d3f49867689e0b7918e19785ee8c653820f70f6e = $this->env->getExtension("native_profiler");
        $__internal_f74eba2a602aa8ae97e98655d3f49867689e0b7918e19785ee8c653820f70f6e->enter($__internal_f74eba2a602aa8ae97e98655d3f49867689e0b7918e19785ee8c653820f70f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f74eba2a602aa8ae97e98655d3f49867689e0b7918e19785ee8c653820f70f6e->leave($__internal_f74eba2a602aa8ae97e98655d3f49867689e0b7918e19785ee8c653820f70f6e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_939c2e6c1a9642c50b8b9affa6d04d57bda073379f1950bc6be4f09c52e02a5a = $this->env->getExtension("native_profiler");
        $__internal_939c2e6c1a9642c50b8b9affa6d04d57bda073379f1950bc6be4f09c52e02a5a->enter($__internal_939c2e6c1a9642c50b8b9affa6d04d57bda073379f1950bc6be4f09c52e02a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_939c2e6c1a9642c50b8b9affa6d04d57bda073379f1950bc6be4f09c52e02a5a->leave($__internal_939c2e6c1a9642c50b8b9affa6d04d57bda073379f1950bc6be4f09c52e02a5a_prof);

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
