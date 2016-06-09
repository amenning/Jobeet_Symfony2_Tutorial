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
        $__internal_a3fa5366fdd91585e6e593bd3993b7afced40753d8b3b32b813d75622720ceb4 = $this->env->getExtension("native_profiler");
        $__internal_a3fa5366fdd91585e6e593bd3993b7afced40753d8b3b32b813d75622720ceb4->enter($__internal_a3fa5366fdd91585e6e593bd3993b7afced40753d8b3b32b813d75622720ceb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_a3fa5366fdd91585e6e593bd3993b7afced40753d8b3b32b813d75622720ceb4->leave($__internal_a3fa5366fdd91585e6e593bd3993b7afced40753d8b3b32b813d75622720ceb4_prof);

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
