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
        $__internal_5ae2b601aaeaf9696e06e529da51b035bf0337596f5931959b5ef89bd497ca16 = $this->env->getExtension("native_profiler");
        $__internal_5ae2b601aaeaf9696e06e529da51b035bf0337596f5931959b5ef89bd497ca16->enter($__internal_5ae2b601aaeaf9696e06e529da51b035bf0337596f5931959b5ef89bd497ca16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_5ae2b601aaeaf9696e06e529da51b035bf0337596f5931959b5ef89bd497ca16->leave($__internal_5ae2b601aaeaf9696e06e529da51b035bf0337596f5931959b5ef89bd497ca16_prof);

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
