<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_a62f13cb5640c487494000dcb40769ab6b9e4797cc786b33b493fa53673fd5b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_date.html.twig", 12);
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
        $__internal_e031705fa572b04de4b29b6e8dad0d2af325b31805cb1fb90c8c755bb0827e9c = $this->env->getExtension("native_profiler");
        $__internal_e031705fa572b04de4b29b6e8dad0d2af325b31805cb1fb90c8c755bb0827e9c->enter($__internal_e031705fa572b04de4b29b6e8dad0d2af325b31805cb1fb90c8c755bb0827e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e031705fa572b04de4b29b6e8dad0d2af325b31805cb1fb90c8c755bb0827e9c->leave($__internal_e031705fa572b04de4b29b6e8dad0d2af325b31805cb1fb90c8c755bb0827e9c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_75336e8d3ba702741e3ced42245a01cabbb0887f80d6e5e41433903de1a2f561 = $this->env->getExtension("native_profiler");
        $__internal_75336e8d3ba702741e3ced42245a01cabbb0887f80d6e5e41433903de1a2f561->enter($__internal_75336e8d3ba702741e3ced42245a01cabbb0887f80d6e5e41433903de1a2f561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_75336e8d3ba702741e3ced42245a01cabbb0887f80d6e5e41433903de1a2f561->leave($__internal_75336e8d3ba702741e3ced42245a01cabbb0887f80d6e5e41433903de1a2f561_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% block field%}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date('F j, Y') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
