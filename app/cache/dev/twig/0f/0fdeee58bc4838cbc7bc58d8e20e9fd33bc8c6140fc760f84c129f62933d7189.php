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
        $__internal_c956b7a0996a0c5fbad2bf885c3dd231abb58a355385c4143b0af2d53c6b4ff7 = $this->env->getExtension("native_profiler");
        $__internal_c956b7a0996a0c5fbad2bf885c3dd231abb58a355385c4143b0af2d53c6b4ff7->enter($__internal_c956b7a0996a0c5fbad2bf885c3dd231abb58a355385c4143b0af2d53c6b4ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c956b7a0996a0c5fbad2bf885c3dd231abb58a355385c4143b0af2d53c6b4ff7->leave($__internal_c956b7a0996a0c5fbad2bf885c3dd231abb58a355385c4143b0af2d53c6b4ff7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e2a5d7f7d0b0f3a625b9dcd7d917d88a3e06e8a3d488e517671f6c165d50feb = $this->env->getExtension("native_profiler");
        $__internal_1e2a5d7f7d0b0f3a625b9dcd7d917d88a3e06e8a3d488e517671f6c165d50feb->enter($__internal_1e2a5d7f7d0b0f3a625b9dcd7d917d88a3e06e8a3d488e517671f6c165d50feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1e2a5d7f7d0b0f3a625b9dcd7d917d88a3e06e8a3d488e517671f6c165d50feb->leave($__internal_1e2a5d7f7d0b0f3a625b9dcd7d917d88a3e06e8a3d488e517671f6c165d50feb_prof);

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
