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
        $__internal_fc0b958dfab387c02c55e8d4f5edd39489cfeea72624424dc8e47d8214df20b2 = $this->env->getExtension("native_profiler");
        $__internal_fc0b958dfab387c02c55e8d4f5edd39489cfeea72624424dc8e47d8214df20b2->enter($__internal_fc0b958dfab387c02c55e8d4f5edd39489cfeea72624424dc8e47d8214df20b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fc0b958dfab387c02c55e8d4f5edd39489cfeea72624424dc8e47d8214df20b2->leave($__internal_fc0b958dfab387c02c55e8d4f5edd39489cfeea72624424dc8e47d8214df20b2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f29d54699001f5c38777d9244fd47ec3cb6e95de7530d8ecc18e25fa03cd5b7 = $this->env->getExtension("native_profiler");
        $__internal_7f29d54699001f5c38777d9244fd47ec3cb6e95de7530d8ecc18e25fa03cd5b7->enter($__internal_7f29d54699001f5c38777d9244fd47ec3cb6e95de7530d8ecc18e25fa03cd5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7f29d54699001f5c38777d9244fd47ec3cb6e95de7530d8ecc18e25fa03cd5b7->leave($__internal_7f29d54699001f5c38777d9244fd47ec3cb6e95de7530d8ecc18e25fa03cd5b7_prof);

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
