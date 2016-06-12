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
        $__internal_8772a135f09162941643f4d169d113fd80b430e90b78b3e3549c748d5139ea80 = $this->env->getExtension("native_profiler");
        $__internal_8772a135f09162941643f4d169d113fd80b430e90b78b3e3549c748d5139ea80->enter($__internal_8772a135f09162941643f4d169d113fd80b430e90b78b3e3549c748d5139ea80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_8772a135f09162941643f4d169d113fd80b430e90b78b3e3549c748d5139ea80->leave($__internal_8772a135f09162941643f4d169d113fd80b430e90b78b3e3549c748d5139ea80_prof);

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
