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
        $__internal_8f908817f873fd444b18ec686ab4c4b39a29c91fffcfc74359d7d7221fd24f12 = $this->env->getExtension("native_profiler");
        $__internal_8f908817f873fd444b18ec686ab4c4b39a29c91fffcfc74359d7d7221fd24f12->enter($__internal_8f908817f873fd444b18ec686ab4c4b39a29c91fffcfc74359d7d7221fd24f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_8f908817f873fd444b18ec686ab4c4b39a29c91fffcfc74359d7d7221fd24f12->leave($__internal_8f908817f873fd444b18ec686ab4c4b39a29c91fffcfc74359d7d7221fd24f12_prof);

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
