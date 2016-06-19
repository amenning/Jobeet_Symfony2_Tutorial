<?php

/* @SonataAdmin/CRUD/show_currency.html.twig */
class __TwigTemplate_ba59dfa1f250b59b70954839f8edef1429bc4562f9064fd8024e37c4fe70aadd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_currency.html.twig", 12);
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
        $__internal_f0c3efe452fc734b44f5c8afeb02c18ba30c5763fe07017075757903d78c3c86 = $this->env->getExtension("native_profiler");
        $__internal_f0c3efe452fc734b44f5c8afeb02c18ba30c5763fe07017075757903d78c3c86->enter($__internal_f0c3efe452fc734b44f5c8afeb02c18ba30c5763fe07017075757903d78c3c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0c3efe452fc734b44f5c8afeb02c18ba30c5763fe07017075757903d78c3c86->leave($__internal_f0c3efe452fc734b44f5c8afeb02c18ba30c5763fe07017075757903d78c3c86_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e250e33aa87969c1aa40474410204d3793b9b491e87120312ca5b86c0ffc4b61 = $this->env->getExtension("native_profiler");
        $__internal_e250e33aa87969c1aa40474410204d3793b9b491e87120312ca5b86c0ffc4b61->enter($__internal_e250e33aa87969c1aa40474410204d3793b9b491e87120312ca5b86c0ffc4b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_e250e33aa87969c1aa40474410204d3793b9b491e87120312ca5b86c0ffc4b61->leave($__internal_e250e33aa87969c1aa40474410204d3793b9b491e87120312ca5b86c0ffc4b61_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_currency.html.twig";
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
