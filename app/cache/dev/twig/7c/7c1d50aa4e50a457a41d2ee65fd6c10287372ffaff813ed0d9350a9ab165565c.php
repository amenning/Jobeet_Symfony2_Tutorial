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
        $__internal_007b4bf6c93e914dc048d53ba1b0ab9b058627331e4c75aeef8ee96e76f7bf5e = $this->env->getExtension("native_profiler");
        $__internal_007b4bf6c93e914dc048d53ba1b0ab9b058627331e4c75aeef8ee96e76f7bf5e->enter($__internal_007b4bf6c93e914dc048d53ba1b0ab9b058627331e4c75aeef8ee96e76f7bf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_007b4bf6c93e914dc048d53ba1b0ab9b058627331e4c75aeef8ee96e76f7bf5e->leave($__internal_007b4bf6c93e914dc048d53ba1b0ab9b058627331e4c75aeef8ee96e76f7bf5e_prof);

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
