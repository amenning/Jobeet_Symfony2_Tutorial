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
        $__internal_e0db90615fb1f36cd04a2261c02e7e40ba6632e8f53703a65814487ef1cf6264 = $this->env->getExtension("native_profiler");
        $__internal_e0db90615fb1f36cd04a2261c02e7e40ba6632e8f53703a65814487ef1cf6264->enter($__internal_e0db90615fb1f36cd04a2261c02e7e40ba6632e8f53703a65814487ef1cf6264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e0db90615fb1f36cd04a2261c02e7e40ba6632e8f53703a65814487ef1cf6264->leave($__internal_e0db90615fb1f36cd04a2261c02e7e40ba6632e8f53703a65814487ef1cf6264_prof);

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
