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
        $__internal_b0acec65917aea1029532eb1d3f810bdb52a9df3674af5085cf1eb70c72b82e2 = $this->env->getExtension("native_profiler");
        $__internal_b0acec65917aea1029532eb1d3f810bdb52a9df3674af5085cf1eb70c72b82e2->enter($__internal_b0acec65917aea1029532eb1d3f810bdb52a9df3674af5085cf1eb70c72b82e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0acec65917aea1029532eb1d3f810bdb52a9df3674af5085cf1eb70c72b82e2->leave($__internal_b0acec65917aea1029532eb1d3f810bdb52a9df3674af5085cf1eb70c72b82e2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c812ae380e8a5c4995fbb24244eb803d7380c15193fac665f78ff7d16bfa0db8 = $this->env->getExtension("native_profiler");
        $__internal_c812ae380e8a5c4995fbb24244eb803d7380c15193fac665f78ff7d16bfa0db8->enter($__internal_c812ae380e8a5c4995fbb24244eb803d7380c15193fac665f78ff7d16bfa0db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_c812ae380e8a5c4995fbb24244eb803d7380c15193fac665f78ff7d16bfa0db8->leave($__internal_c812ae380e8a5c4995fbb24244eb803d7380c15193fac665f78ff7d16bfa0db8_prof);

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
