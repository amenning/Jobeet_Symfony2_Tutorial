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
        $__internal_229e95ab1dd7f0ccca9ecbb4b64d162be53f190e1759a126882d3b6d8cadb0f5 = $this->env->getExtension("native_profiler");
        $__internal_229e95ab1dd7f0ccca9ecbb4b64d162be53f190e1759a126882d3b6d8cadb0f5->enter($__internal_229e95ab1dd7f0ccca9ecbb4b64d162be53f190e1759a126882d3b6d8cadb0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_229e95ab1dd7f0ccca9ecbb4b64d162be53f190e1759a126882d3b6d8cadb0f5->leave($__internal_229e95ab1dd7f0ccca9ecbb4b64d162be53f190e1759a126882d3b6d8cadb0f5_prof);

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
