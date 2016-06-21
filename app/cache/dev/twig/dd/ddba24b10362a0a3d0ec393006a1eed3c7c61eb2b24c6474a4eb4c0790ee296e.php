<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_2e2e076fbc660916033b635d31c444dbb81607777606addaa9ef26ff54306b86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_percent.html.twig", 12);
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
        $__internal_a3e981bc484686600b665d820955dedad73c9d2a970561e51fa5bbd09509f9f2 = $this->env->getExtension("native_profiler");
        $__internal_a3e981bc484686600b665d820955dedad73c9d2a970561e51fa5bbd09509f9f2->enter($__internal_a3e981bc484686600b665d820955dedad73c9d2a970561e51fa5bbd09509f9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3e981bc484686600b665d820955dedad73c9d2a970561e51fa5bbd09509f9f2->leave($__internal_a3e981bc484686600b665d820955dedad73c9d2a970561e51fa5bbd09509f9f2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_75a2ca2c2a9e76f7d9c01cfa846acbb53120742bfc47069a1a0baf8dbe04c312 = $this->env->getExtension("native_profiler");
        $__internal_75a2ca2c2a9e76f7d9c01cfa846acbb53120742bfc47069a1a0baf8dbe04c312->enter($__internal_75a2ca2c2a9e76f7d9c01cfa846acbb53120742bfc47069a1a0baf8dbe04c312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_75a2ca2c2a9e76f7d9c01cfa846acbb53120742bfc47069a1a0baf8dbe04c312->leave($__internal_75a2ca2c2a9e76f7d9c01cfa846acbb53120742bfc47069a1a0baf8dbe04c312_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
