<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c5f7fb753956089f5fdd93d814f2e985dd12bbfc5ec8a19e958722afca5bb4af extends Twig_Template
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
        $__internal_15f33458f22459ff60fa93c5f1b12dd60037357e1fdca693820ce2601ad14600 = $this->env->getExtension("native_profiler");
        $__internal_15f33458f22459ff60fa93c5f1b12dd60037357e1fdca693820ce2601ad14600->enter($__internal_15f33458f22459ff60fa93c5f1b12dd60037357e1fdca693820ce2601ad14600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_15f33458f22459ff60fa93c5f1b12dd60037357e1fdca693820ce2601ad14600->leave($__internal_15f33458f22459ff60fa93c5f1b12dd60037357e1fdca693820ce2601ad14600_prof);

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
