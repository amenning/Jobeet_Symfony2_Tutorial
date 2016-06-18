<?php

/* @SonataAdmin/CRUD/list_time.html.twig */
class __TwigTemplate_b73b84f76afa9e55f2468b89bf3ebbe78e6241526b328c92f2cb88a7891d218c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6b786c937b158a8aeae3250b5f7ea848e0a528ae2ff8f9b0859664f1e8b3321 = $this->env->getExtension("native_profiler");
        $__internal_a6b786c937b158a8aeae3250b5f7ea848e0a528ae2ff8f9b0859664f1e8b3321->enter($__internal_a6b786c937b158a8aeae3250b5f7ea848e0a528ae2ff8f9b0859664f1e8b3321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6b786c937b158a8aeae3250b5f7ea848e0a528ae2ff8f9b0859664f1e8b3321->leave($__internal_a6b786c937b158a8aeae3250b5f7ea848e0a528ae2ff8f9b0859664f1e8b3321_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_aa9376a38759072ca2e16fe3788c6304252ebc2f4d45b8d2e49bec801f49ec1d = $this->env->getExtension("native_profiler");
        $__internal_aa9376a38759072ca2e16fe3788c6304252ebc2f4d45b8d2e49bec801f49ec1d->enter($__internal_aa9376a38759072ca2e16fe3788c6304252ebc2f4d45b8d2e49bec801f49ec1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_aa9376a38759072ca2e16fe3788c6304252ebc2f4d45b8d2e49bec801f49ec1d->leave($__internal_aa9376a38759072ca2e16fe3788c6304252ebc2f4d45b8d2e49bec801f49ec1d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_time.html.twig";
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
