<?php

/* @SonataAdmin/CRUD/show_email.html.twig */
class __TwigTemplate_929294f3f92aa60b241c9af6604bb7dcc9e7a996735915cc6d00cab8f4e99763 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 1);
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
        $__internal_805e674378e11816e1f3deee8bb8867ccbc49902d163a035efd32e7e59e3b573 = $this->env->getExtension("native_profiler");
        $__internal_805e674378e11816e1f3deee8bb8867ccbc49902d163a035efd32e7e59e3b573->enter($__internal_805e674378e11816e1f3deee8bb8867ccbc49902d163a035efd32e7e59e3b573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_805e674378e11816e1f3deee8bb8867ccbc49902d163a035efd32e7e59e3b573->leave($__internal_805e674378e11816e1f3deee8bb8867ccbc49902d163a035efd32e7e59e3b573_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_ad83607ffb1f86c43bf6d464c9d3123d256b36e306854c7cb09e05740fbf9a2b = $this->env->getExtension("native_profiler");
        $__internal_ad83607ffb1f86c43bf6d464c9d3123d256b36e306854c7cb09e05740fbf9a2b->enter($__internal_ad83607ffb1f86c43bf6d464c9d3123d256b36e306854c7cb09e05740fbf9a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 4)->display($context);
        
        $__internal_ad83607ffb1f86c43bf6d464c9d3123d256b36e306854c7cb09e05740fbf9a2b->leave($__internal_ad83607ffb1f86c43bf6d464c9d3123d256b36e306854c7cb09e05740fbf9a2b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */
