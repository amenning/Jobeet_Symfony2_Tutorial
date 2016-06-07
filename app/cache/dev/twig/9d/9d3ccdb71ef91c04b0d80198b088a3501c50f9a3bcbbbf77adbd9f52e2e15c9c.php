<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_28e59cf1e8375f1386301abee812aa5afe9e12e2ea4865871d1d51870825a438 extends Twig_Template
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
        $__internal_97ef0b6aed7ae1c5ad10d6dd933f03a2fb65f5a3a4b4bc9e28d99439d00a6843 = $this->env->getExtension("native_profiler");
        $__internal_97ef0b6aed7ae1c5ad10d6dd933f03a2fb65f5a3a4b4bc9e28d99439d00a6843->enter($__internal_97ef0b6aed7ae1c5ad10d6dd933f03a2fb65f5a3a4b4bc9e28d99439d00a6843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_97ef0b6aed7ae1c5ad10d6dd933f03a2fb65f5a3a4b4bc9e28d99439d00a6843->leave($__internal_97ef0b6aed7ae1c5ad10d6dd933f03a2fb65f5a3a4b4bc9e28d99439d00a6843_prof);

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
