<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4bdd6db3a256398216751eeae7c7a120675c5ad5acd7cebdfa292cf2b58b0ef6 extends Twig_Template
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
        $__internal_09389aceb40c2ace6230d1f6e0a4edc0fcfb66109faea2dcc71a848fd2d60727 = $this->env->getExtension("native_profiler");
        $__internal_09389aceb40c2ace6230d1f6e0a4edc0fcfb66109faea2dcc71a848fd2d60727->enter($__internal_09389aceb40c2ace6230d1f6e0a4edc0fcfb66109faea2dcc71a848fd2d60727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_09389aceb40c2ace6230d1f6e0a4edc0fcfb66109faea2dcc71a848fd2d60727->leave($__internal_09389aceb40c2ace6230d1f6e0a4edc0fcfb66109faea2dcc71a848fd2d60727_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
