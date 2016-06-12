<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_9617b8235cfc96700337fe828cb026d5adfdf99cde86ef53b5ad37083cee0e0e extends Twig_Template
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
        $__internal_749964eb6696eb83be47de810d37e46c8d0d4f6f774d7cfa8217f5d96dcd3b23 = $this->env->getExtension("native_profiler");
        $__internal_749964eb6696eb83be47de810d37e46c8d0d4f6f774d7cfa8217f5d96dcd3b23->enter($__internal_749964eb6696eb83be47de810d37e46c8d0d4f6f774d7cfa8217f5d96dcd3b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_749964eb6696eb83be47de810d37e46c8d0d4f6f774d7cfa8217f5d96dcd3b23->leave($__internal_749964eb6696eb83be47de810d37e46c8d0d4f6f774d7cfa8217f5d96dcd3b23_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
