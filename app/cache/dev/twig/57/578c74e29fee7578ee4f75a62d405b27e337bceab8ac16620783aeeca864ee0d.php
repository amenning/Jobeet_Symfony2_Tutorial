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
        $__internal_1a88bf67ebb48befe12893b1edbc484c1c19bc9d9a6fbc400388c64120b9e76d = $this->env->getExtension("native_profiler");
        $__internal_1a88bf67ebb48befe12893b1edbc484c1c19bc9d9a6fbc400388c64120b9e76d->enter($__internal_1a88bf67ebb48befe12893b1edbc484c1c19bc9d9a6fbc400388c64120b9e76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a88bf67ebb48befe12893b1edbc484c1c19bc9d9a6fbc400388c64120b9e76d->leave($__internal_1a88bf67ebb48befe12893b1edbc484c1c19bc9d9a6fbc400388c64120b9e76d_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_98099c7db581f30877cd445b7af193a4801ef0abea4f1f0f387e71b97f0aae73 = $this->env->getExtension("native_profiler");
        $__internal_98099c7db581f30877cd445b7af193a4801ef0abea4f1f0f387e71b97f0aae73->enter($__internal_98099c7db581f30877cd445b7af193a4801ef0abea4f1f0f387e71b97f0aae73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 4)->display($context);
        
        $__internal_98099c7db581f30877cd445b7af193a4801ef0abea4f1f0f387e71b97f0aae73->leave($__internal_98099c7db581f30877cd445b7af193a4801ef0abea4f1f0f387e71b97f0aae73_prof);

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
