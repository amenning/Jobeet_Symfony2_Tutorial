<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_72931ed7f8275009f0a92b72589b030d7bc9d0f8096303ddb4a0c5944cd21330 extends Twig_Template
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
        $__internal_21dcff919f4459ddececc1e545b310d5adfc8709b4857580efa6a786989714c6 = $this->env->getExtension("native_profiler");
        $__internal_21dcff919f4459ddececc1e545b310d5adfc8709b4857580efa6a786989714c6->enter($__internal_21dcff919f4459ddececc1e545b310d5adfc8709b4857580efa6a786989714c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_21dcff919f4459ddececc1e545b310d5adfc8709b4857580efa6a786989714c6->leave($__internal_21dcff919f4459ddececc1e545b310d5adfc8709b4857580efa6a786989714c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
