<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_ebc7170b174248e3c990b46269ec85a69c188ff7d23f4bc80389d6e3a560652c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ca65a29c4eb923d3dfbc048cc846230842453c825c27b72203de59e3e451698 = $this->env->getExtension("native_profiler");
        $__internal_5ca65a29c4eb923d3dfbc048cc846230842453c825c27b72203de59e3e451698->enter($__internal_5ca65a29c4eb923d3dfbc048cc846230842453c825c27b72203de59e3e451698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ca65a29c4eb923d3dfbc048cc846230842453c825c27b72203de59e3e451698->leave($__internal_5ca65a29c4eb923d3dfbc048cc846230842453c825c27b72203de59e3e451698_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_704c9db33d1e0093aada36585ac045a87b128bfb21a74726f86ccf404e9db4a7 = $this->env->getExtension("native_profiler");
        $__internal_704c9db33d1e0093aada36585ac045a87b128bfb21a74726f86ccf404e9db4a7->enter($__internal_704c9db33d1e0093aada36585ac045a87b128bfb21a74726f86ccf404e9db4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_704c9db33d1e0093aada36585ac045a87b128bfb21a74726f86ccf404e9db4a7->leave($__internal_704c9db33d1e0093aada36585ac045a87b128bfb21a74726f86ccf404e9db4a7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
