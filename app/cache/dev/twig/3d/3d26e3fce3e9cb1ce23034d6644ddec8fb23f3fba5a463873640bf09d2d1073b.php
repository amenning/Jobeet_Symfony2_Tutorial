<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_d61ae0c1f099f10e362a3b89e10a5f0d01a39e776a1601c7984b115068bd7ad6 extends Twig_Template
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
        $__internal_206c535b56f654ab41dbb3835c2eef8c81a4a6ad2ef54f81be4b96578da4b227 = $this->env->getExtension("native_profiler");
        $__internal_206c535b56f654ab41dbb3835c2eef8c81a4a6ad2ef54f81be4b96578da4b227->enter($__internal_206c535b56f654ab41dbb3835c2eef8c81a4a6ad2ef54f81be4b96578da4b227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_206c535b56f654ab41dbb3835c2eef8c81a4a6ad2ef54f81be4b96578da4b227->leave($__internal_206c535b56f654ab41dbb3835c2eef8c81a4a6ad2ef54f81be4b96578da4b227_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
