<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_28e59cf1e8375f1386301abee812aa5afe9e12e2ea4865871d1d51870825a438 extends Twig_Template
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
        $__internal_2641d9959d84269e15744b26c7ddd6834da5a5e1ce1da84a1aee23191d6d6118 = $this->env->getExtension("native_profiler");
        $__internal_2641d9959d84269e15744b26c7ddd6834da5a5e1ce1da84a1aee23191d6d6118->enter($__internal_2641d9959d84269e15744b26c7ddd6834da5a5e1ce1da84a1aee23191d6d6118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_2641d9959d84269e15744b26c7ddd6834da5a5e1ce1da84a1aee23191d6d6118->leave($__internal_2641d9959d84269e15744b26c7ddd6834da5a5e1ce1da84a1aee23191d6d6118_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
