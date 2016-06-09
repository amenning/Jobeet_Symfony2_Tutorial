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
        $__internal_92ad7209a33570748fc21ab88d97e7e601fa06f893e222fae89bc191f65aac92 = $this->env->getExtension("native_profiler");
        $__internal_92ad7209a33570748fc21ab88d97e7e601fa06f893e222fae89bc191f65aac92->enter($__internal_92ad7209a33570748fc21ab88d97e7e601fa06f893e222fae89bc191f65aac92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_92ad7209a33570748fc21ab88d97e7e601fa06f893e222fae89bc191f65aac92->leave($__internal_92ad7209a33570748fc21ab88d97e7e601fa06f893e222fae89bc191f65aac92_prof);

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
