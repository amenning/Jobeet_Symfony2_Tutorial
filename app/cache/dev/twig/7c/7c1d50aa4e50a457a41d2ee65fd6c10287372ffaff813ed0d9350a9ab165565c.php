<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ee19af70dbcc18cbd4c1b9a1b8a27f71b565459ed2b5c06edb1d701dd21763d5 extends Twig_Template
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
        $__internal_c5cea406ef9c1919699a521cb62ac071f283cb67b0ac22589170b11d8894bf0f = $this->env->getExtension("native_profiler");
        $__internal_c5cea406ef9c1919699a521cb62ac071f283cb67b0ac22589170b11d8894bf0f->enter($__internal_c5cea406ef9c1919699a521cb62ac071f283cb67b0ac22589170b11d8894bf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c5cea406ef9c1919699a521cb62ac071f283cb67b0ac22589170b11d8894bf0f->leave($__internal_c5cea406ef9c1919699a521cb62ac071f283cb67b0ac22589170b11d8894bf0f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
