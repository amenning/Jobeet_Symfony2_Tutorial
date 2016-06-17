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
        $__internal_8b3b4fd409253e37169874c948c8b6f1e484a4cc7b01164699e79bc653e128aa = $this->env->getExtension("native_profiler");
        $__internal_8b3b4fd409253e37169874c948c8b6f1e484a4cc7b01164699e79bc653e128aa->enter($__internal_8b3b4fd409253e37169874c948c8b6f1e484a4cc7b01164699e79bc653e128aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b3b4fd409253e37169874c948c8b6f1e484a4cc7b01164699e79bc653e128aa->leave($__internal_8b3b4fd409253e37169874c948c8b6f1e484a4cc7b01164699e79bc653e128aa_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_673daaf73992fd7a92780e8e6f79c536f97d220c24a35d86cade068bc3de21f3 = $this->env->getExtension("native_profiler");
        $__internal_673daaf73992fd7a92780e8e6f79c536f97d220c24a35d86cade068bc3de21f3->enter($__internal_673daaf73992fd7a92780e8e6f79c536f97d220c24a35d86cade068bc3de21f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 4)->display($context);
        
        $__internal_673daaf73992fd7a92780e8e6f79c536f97d220c24a35d86cade068bc3de21f3->leave($__internal_673daaf73992fd7a92780e8e6f79c536f97d220c24a35d86cade068bc3de21f3_prof);

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
