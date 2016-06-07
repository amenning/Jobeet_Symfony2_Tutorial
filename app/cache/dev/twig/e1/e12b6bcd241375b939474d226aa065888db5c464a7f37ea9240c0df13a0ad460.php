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
        $__internal_431aa3b97b360d121160a40863cdca1fe51a0cb997300f000331c818a3e95d9f = $this->env->getExtension("native_profiler");
        $__internal_431aa3b97b360d121160a40863cdca1fe51a0cb997300f000331c818a3e95d9f->enter($__internal_431aa3b97b360d121160a40863cdca1fe51a0cb997300f000331c818a3e95d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_431aa3b97b360d121160a40863cdca1fe51a0cb997300f000331c818a3e95d9f->leave($__internal_431aa3b97b360d121160a40863cdca1fe51a0cb997300f000331c818a3e95d9f_prof);

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
