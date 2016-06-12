<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_2b44b9cad5960fc63f91a186ccf8d5a5a0c85eb5944c97c9641e97091dbf86b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef5274cb4728b579b63d53a17abaf4a30bf434e570c3ac4b0dbf94264c866c68 = $this->env->getExtension("native_profiler");
        $__internal_ef5274cb4728b579b63d53a17abaf4a30bf434e570c3ac4b0dbf94264c866c68->enter($__internal_ef5274cb4728b579b63d53a17abaf4a30bf434e570c3ac4b0dbf94264c866c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_ef5274cb4728b579b63d53a17abaf4a30bf434e570c3ac4b0dbf94264c866c68->leave($__internal_ef5274cb4728b579b63d53a17abaf4a30bf434e570c3ac4b0dbf94264c866c68_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
