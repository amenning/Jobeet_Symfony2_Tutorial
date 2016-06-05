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
        $__internal_b05b7d5c40fe248788e9c28e5680c180265478d411498f9f3b1a241aafcd75cd = $this->env->getExtension("native_profiler");
        $__internal_b05b7d5c40fe248788e9c28e5680c180265478d411498f9f3b1a241aafcd75cd->enter($__internal_b05b7d5c40fe248788e9c28e5680c180265478d411498f9f3b1a241aafcd75cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_b05b7d5c40fe248788e9c28e5680c180265478d411498f9f3b1a241aafcd75cd->leave($__internal_b05b7d5c40fe248788e9c28e5680c180265478d411498f9f3b1a241aafcd75cd_prof);

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
