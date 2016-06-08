<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_1f3367bdad487af63122faa8ab82765ef897ebc3f49d08d80673105223fb64c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48b576c7288a08fa83a782e3ef570ea9d5bca8879025708be2387e5ae2c14361 = $this->env->getExtension("native_profiler");
        $__internal_48b576c7288a08fa83a782e3ef570ea9d5bca8879025708be2387e5ae2c14361->enter($__internal_48b576c7288a08fa83a782e3ef570ea9d5bca8879025708be2387e5ae2c14361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_48b576c7288a08fa83a782e3ef570ea9d5bca8879025708be2387e5ae2c14361->leave($__internal_48b576c7288a08fa83a782e3ef570ea9d5bca8879025708be2387e5ae2c14361_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_911d1df51f23489622760a279360a389876fac6fd761e7f9d87030d6e2016d65 = $this->env->getExtension("native_profiler");
        $__internal_911d1df51f23489622760a279360a389876fac6fd761e7f9d87030d6e2016d65->enter($__internal_911d1df51f23489622760a279360a389876fac6fd761e7f9d87030d6e2016d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_911d1df51f23489622760a279360a389876fac6fd761e7f9d87030d6e2016d65->leave($__internal_911d1df51f23489622760a279360a389876fac6fd761e7f9d87030d6e2016d65_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
