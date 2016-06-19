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
        $__internal_9144c1db19ab6ae312693cda26207bb549aa79768eb0596872c6734650910e00 = $this->env->getExtension("native_profiler");
        $__internal_9144c1db19ab6ae312693cda26207bb549aa79768eb0596872c6734650910e00->enter($__internal_9144c1db19ab6ae312693cda26207bb549aa79768eb0596872c6734650910e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9144c1db19ab6ae312693cda26207bb549aa79768eb0596872c6734650910e00->leave($__internal_9144c1db19ab6ae312693cda26207bb549aa79768eb0596872c6734650910e00_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_ecbbf1f6c9c6182729cd508e4c834b455b10c60f57521405308bd25d2cc4696d = $this->env->getExtension("native_profiler");
        $__internal_ecbbf1f6c9c6182729cd508e4c834b455b10c60f57521405308bd25d2cc4696d->enter($__internal_ecbbf1f6c9c6182729cd508e4c834b455b10c60f57521405308bd25d2cc4696d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 4)->display($context);
        
        $__internal_ecbbf1f6c9c6182729cd508e4c834b455b10c60f57521405308bd25d2cc4696d->leave($__internal_ecbbf1f6c9c6182729cd508e4c834b455b10c60f57521405308bd25d2cc4696d_prof);

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
