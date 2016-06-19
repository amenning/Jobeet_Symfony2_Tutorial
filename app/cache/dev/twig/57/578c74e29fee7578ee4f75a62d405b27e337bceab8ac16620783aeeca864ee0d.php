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
        $__internal_2ca15e2cf8f127ee4b4639a85772091cea00d846fc4bd642c844f8188d1a52b7 = $this->env->getExtension("native_profiler");
        $__internal_2ca15e2cf8f127ee4b4639a85772091cea00d846fc4bd642c844f8188d1a52b7->enter($__internal_2ca15e2cf8f127ee4b4639a85772091cea00d846fc4bd642c844f8188d1a52b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ca15e2cf8f127ee4b4639a85772091cea00d846fc4bd642c844f8188d1a52b7->leave($__internal_2ca15e2cf8f127ee4b4639a85772091cea00d846fc4bd642c844f8188d1a52b7_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_13ae4892dc7f5d9067a1d85e768a4557dc106d3db392404ea8d583447a0e4a8f = $this->env->getExtension("native_profiler");
        $__internal_13ae4892dc7f5d9067a1d85e768a4557dc106d3db392404ea8d583447a0e4a8f->enter($__internal_13ae4892dc7f5d9067a1d85e768a4557dc106d3db392404ea8d583447a0e4a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 4)->display($context);
        
        $__internal_13ae4892dc7f5d9067a1d85e768a4557dc106d3db392404ea8d583447a0e4a8f->leave($__internal_13ae4892dc7f5d9067a1d85e768a4557dc106d3db392404ea8d583447a0e4a8f_prof);

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
