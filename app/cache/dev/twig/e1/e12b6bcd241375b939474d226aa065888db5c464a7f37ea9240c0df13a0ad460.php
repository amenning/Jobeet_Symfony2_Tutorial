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
        $__internal_82a86f73ce4203cefad3d659fb809afe82b50c4e575a4cecf0dfb959078a28d8 = $this->env->getExtension("native_profiler");
        $__internal_82a86f73ce4203cefad3d659fb809afe82b50c4e575a4cecf0dfb959078a28d8->enter($__internal_82a86f73ce4203cefad3d659fb809afe82b50c4e575a4cecf0dfb959078a28d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_82a86f73ce4203cefad3d659fb809afe82b50c4e575a4cecf0dfb959078a28d8->leave($__internal_82a86f73ce4203cefad3d659fb809afe82b50c4e575a4cecf0dfb959078a28d8_prof);

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
