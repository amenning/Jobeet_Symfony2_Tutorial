<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1a68e575b5a759e5b6b0e69665657fa159b2b79227af75d82331b2aec0041f1c extends Twig_Template
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
        $__internal_e12ec9e56238966b823ad1bfd0e39c7b449d26dc3fdcd462f7c0f7cbb2af40fe = $this->env->getExtension("native_profiler");
        $__internal_e12ec9e56238966b823ad1bfd0e39c7b449d26dc3fdcd462f7c0f7cbb2af40fe->enter($__internal_e12ec9e56238966b823ad1bfd0e39c7b449d26dc3fdcd462f7c0f7cbb2af40fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e12ec9e56238966b823ad1bfd0e39c7b449d26dc3fdcd462f7c0f7cbb2af40fe->leave($__internal_e12ec9e56238966b823ad1bfd0e39c7b449d26dc3fdcd462f7c0f7cbb2af40fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
