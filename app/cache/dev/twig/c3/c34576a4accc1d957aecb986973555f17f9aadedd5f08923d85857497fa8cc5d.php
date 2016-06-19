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
        $__internal_0a4f987dc678a75cc5878b7a9dde69e8b0892caba4b6726173bef5112735cdbc = $this->env->getExtension("native_profiler");
        $__internal_0a4f987dc678a75cc5878b7a9dde69e8b0892caba4b6726173bef5112735cdbc->enter($__internal_0a4f987dc678a75cc5878b7a9dde69e8b0892caba4b6726173bef5112735cdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a4f987dc678a75cc5878b7a9dde69e8b0892caba4b6726173bef5112735cdbc->leave($__internal_0a4f987dc678a75cc5878b7a9dde69e8b0892caba4b6726173bef5112735cdbc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_321e5cd9f8b3ecf8399757b7646c3fa36956fcc13d7a8611670db2b20bdea5f9 = $this->env->getExtension("native_profiler");
        $__internal_321e5cd9f8b3ecf8399757b7646c3fa36956fcc13d7a8611670db2b20bdea5f9->enter($__internal_321e5cd9f8b3ecf8399757b7646c3fa36956fcc13d7a8611670db2b20bdea5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_321e5cd9f8b3ecf8399757b7646c3fa36956fcc13d7a8611670db2b20bdea5f9->leave($__internal_321e5cd9f8b3ecf8399757b7646c3fa36956fcc13d7a8611670db2b20bdea5f9_prof);

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
