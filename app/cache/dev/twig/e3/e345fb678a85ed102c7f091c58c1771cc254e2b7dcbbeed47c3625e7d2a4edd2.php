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
        $__internal_a7715b1f3d90928ad757008f39825d9f7eed61d0aa7bd9b7c72dba4383a794bb = $this->env->getExtension("native_profiler");
        $__internal_a7715b1f3d90928ad757008f39825d9f7eed61d0aa7bd9b7c72dba4383a794bb->enter($__internal_a7715b1f3d90928ad757008f39825d9f7eed61d0aa7bd9b7c72dba4383a794bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_a7715b1f3d90928ad757008f39825d9f7eed61d0aa7bd9b7c72dba4383a794bb->leave($__internal_a7715b1f3d90928ad757008f39825d9f7eed61d0aa7bd9b7c72dba4383a794bb_prof);

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
