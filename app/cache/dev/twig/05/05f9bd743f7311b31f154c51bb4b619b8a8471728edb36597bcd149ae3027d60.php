<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9e18fb473d54c545245d292a89ca5d295c194e00c8e5bbe2ee07d52d143b6c33 extends Twig_Template
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
        $__internal_ac654b7da4b6193f9a76b49f43a7ac90a0dd4e8ac4a12d96b8ad04f6e8cab076 = $this->env->getExtension("native_profiler");
        $__internal_ac654b7da4b6193f9a76b49f43a7ac90a0dd4e8ac4a12d96b8ad04f6e8cab076->enter($__internal_ac654b7da4b6193f9a76b49f43a7ac90a0dd4e8ac4a12d96b8ad04f6e8cab076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ac654b7da4b6193f9a76b49f43a7ac90a0dd4e8ac4a12d96b8ad04f6e8cab076->leave($__internal_ac654b7da4b6193f9a76b49f43a7ac90a0dd4e8ac4a12d96b8ad04f6e8cab076_prof);

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
