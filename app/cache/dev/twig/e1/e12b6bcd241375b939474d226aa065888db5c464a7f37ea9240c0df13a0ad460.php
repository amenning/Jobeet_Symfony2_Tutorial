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
        $__internal_de3e5433f7b73dc86921c9e981dc651467f3706d879e2d1ab6ef8b18b4ae0222 = $this->env->getExtension("native_profiler");
        $__internal_de3e5433f7b73dc86921c9e981dc651467f3706d879e2d1ab6ef8b18b4ae0222->enter($__internal_de3e5433f7b73dc86921c9e981dc651467f3706d879e2d1ab6ef8b18b4ae0222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_de3e5433f7b73dc86921c9e981dc651467f3706d879e2d1ab6ef8b18b4ae0222->leave($__internal_de3e5433f7b73dc86921c9e981dc651467f3706d879e2d1ab6ef8b18b4ae0222_prof);

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
