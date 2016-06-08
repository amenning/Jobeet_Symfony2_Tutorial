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
        $__internal_7e144811d4ca73d48c2c3246ec4a1e2bda00e817d2a5b67430d5978d8650cb5d = $this->env->getExtension("native_profiler");
        $__internal_7e144811d4ca73d48c2c3246ec4a1e2bda00e817d2a5b67430d5978d8650cb5d->enter($__internal_7e144811d4ca73d48c2c3246ec4a1e2bda00e817d2a5b67430d5978d8650cb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_7e144811d4ca73d48c2c3246ec4a1e2bda00e817d2a5b67430d5978d8650cb5d->leave($__internal_7e144811d4ca73d48c2c3246ec4a1e2bda00e817d2a5b67430d5978d8650cb5d_prof);

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
