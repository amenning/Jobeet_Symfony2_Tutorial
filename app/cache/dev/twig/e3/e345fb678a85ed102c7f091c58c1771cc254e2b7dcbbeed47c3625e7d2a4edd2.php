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
        $__internal_f9ee9af00cc393b37839a2834d29aeac6b1a0c790a99fe83f0496f5d9af5ada3 = $this->env->getExtension("native_profiler");
        $__internal_f9ee9af00cc393b37839a2834d29aeac6b1a0c790a99fe83f0496f5d9af5ada3->enter($__internal_f9ee9af00cc393b37839a2834d29aeac6b1a0c790a99fe83f0496f5d9af5ada3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_f9ee9af00cc393b37839a2834d29aeac6b1a0c790a99fe83f0496f5d9af5ada3->leave($__internal_f9ee9af00cc393b37839a2834d29aeac6b1a0c790a99fe83f0496f5d9af5ada3_prof);

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
