<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_05a8483d0a24101ec3af611fdf9fc5eed04a00d334c532324c4f9ecc55a39eba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39e5a03e8a6b34643180343c8f5cde28bf4c6ed2b67e622b60d9a86d445b802d = $this->env->getExtension("native_profiler");
        $__internal_39e5a03e8a6b34643180343c8f5cde28bf4c6ed2b67e622b60d9a86d445b802d->enter($__internal_39e5a03e8a6b34643180343c8f5cde28bf4c6ed2b67e622b60d9a86d445b802d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39e5a03e8a6b34643180343c8f5cde28bf4c6ed2b67e622b60d9a86d445b802d->leave($__internal_39e5a03e8a6b34643180343c8f5cde28bf4c6ed2b67e622b60d9a86d445b802d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6c4d5610c042cc3199ad2ae09c4ed3624c7fe6ae38387c08f0e04bfc8271668b = $this->env->getExtension("native_profiler");
        $__internal_6c4d5610c042cc3199ad2ae09c4ed3624c7fe6ae38387c08f0e04bfc8271668b->enter($__internal_6c4d5610c042cc3199ad2ae09c4ed3624c7fe6ae38387c08f0e04bfc8271668b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_6c4d5610c042cc3199ad2ae09c4ed3624c7fe6ae38387c08f0e04bfc8271668b->leave($__internal_6c4d5610c042cc3199ad2ae09c4ed3624c7fe6ae38387c08f0e04bfc8271668b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
