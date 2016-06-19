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
        $__internal_2807e8ad54741f46e106c6798d29525298121dcee23278edbd3c87912a7fdc67 = $this->env->getExtension("native_profiler");
        $__internal_2807e8ad54741f46e106c6798d29525298121dcee23278edbd3c87912a7fdc67->enter($__internal_2807e8ad54741f46e106c6798d29525298121dcee23278edbd3c87912a7fdc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_2807e8ad54741f46e106c6798d29525298121dcee23278edbd3c87912a7fdc67->leave($__internal_2807e8ad54741f46e106c6798d29525298121dcee23278edbd3c87912a7fdc67_prof);

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
