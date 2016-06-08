<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_802553c15956310baf64014c59fdfac3239b9c71ae6c1d808afe6fd4ae618afd extends Twig_Template
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
        $__internal_aec55a2942cef82e0bbd1d2dca76eeab11130100eec1011e8cc3fd5a809714e8 = $this->env->getExtension("native_profiler");
        $__internal_aec55a2942cef82e0bbd1d2dca76eeab11130100eec1011e8cc3fd5a809714e8->enter($__internal_aec55a2942cef82e0bbd1d2dca76eeab11130100eec1011e8cc3fd5a809714e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_aec55a2942cef82e0bbd1d2dca76eeab11130100eec1011e8cc3fd5a809714e8->leave($__internal_aec55a2942cef82e0bbd1d2dca76eeab11130100eec1011e8cc3fd5a809714e8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
