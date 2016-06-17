<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_97e7f2cb8e0f02eaf403806706bb3b495fc270227d7a8b2996a33775988c6e3e extends Twig_Template
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
        $__internal_7c6f87b142577fbbf8e06e30625e68004f5b38c68bfd93252002b4fcf2288ddd = $this->env->getExtension("native_profiler");
        $__internal_7c6f87b142577fbbf8e06e30625e68004f5b38c68bfd93252002b4fcf2288ddd->enter($__internal_7c6f87b142577fbbf8e06e30625e68004f5b38c68bfd93252002b4fcf2288ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7c6f87b142577fbbf8e06e30625e68004f5b38c68bfd93252002b4fcf2288ddd->leave($__internal_7c6f87b142577fbbf8e06e30625e68004f5b38c68bfd93252002b4fcf2288ddd_prof);

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
