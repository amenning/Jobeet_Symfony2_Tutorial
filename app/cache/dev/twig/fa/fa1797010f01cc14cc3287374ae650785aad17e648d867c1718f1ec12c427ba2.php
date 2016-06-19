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
        $__internal_8b71b372011fa2113d0016669e112690070a82a90b49a2ab2282ec03de2b5af9 = $this->env->getExtension("native_profiler");
        $__internal_8b71b372011fa2113d0016669e112690070a82a90b49a2ab2282ec03de2b5af9->enter($__internal_8b71b372011fa2113d0016669e112690070a82a90b49a2ab2282ec03de2b5af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8b71b372011fa2113d0016669e112690070a82a90b49a2ab2282ec03de2b5af9->leave($__internal_8b71b372011fa2113d0016669e112690070a82a90b49a2ab2282ec03de2b5af9_prof);

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
