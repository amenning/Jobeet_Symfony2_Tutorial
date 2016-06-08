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
        $__internal_ffb7e0e57d3b38a2f0a77f5cf6db6ba4f419f9206d9542b8d173277d734ff59c = $this->env->getExtension("native_profiler");
        $__internal_ffb7e0e57d3b38a2f0a77f5cf6db6ba4f419f9206d9542b8d173277d734ff59c->enter($__internal_ffb7e0e57d3b38a2f0a77f5cf6db6ba4f419f9206d9542b8d173277d734ff59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_ffb7e0e57d3b38a2f0a77f5cf6db6ba4f419f9206d9542b8d173277d734ff59c->leave($__internal_ffb7e0e57d3b38a2f0a77f5cf6db6ba4f419f9206d9542b8d173277d734ff59c_prof);

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
