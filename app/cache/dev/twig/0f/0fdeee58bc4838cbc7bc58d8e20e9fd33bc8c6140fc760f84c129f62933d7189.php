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
        $__internal_6f86a4b686db25497a7d87088fc6f2178f9b8878b01ae47c060a3cc8d01467d2 = $this->env->getExtension("native_profiler");
        $__internal_6f86a4b686db25497a7d87088fc6f2178f9b8878b01ae47c060a3cc8d01467d2->enter($__internal_6f86a4b686db25497a7d87088fc6f2178f9b8878b01ae47c060a3cc8d01467d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6f86a4b686db25497a7d87088fc6f2178f9b8878b01ae47c060a3cc8d01467d2->leave($__internal_6f86a4b686db25497a7d87088fc6f2178f9b8878b01ae47c060a3cc8d01467d2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_067012a6f6b50490a3878b460dc129c5dfbf6eadcf012ba9856bf811d56193ff = $this->env->getExtension("native_profiler");
        $__internal_067012a6f6b50490a3878b460dc129c5dfbf6eadcf012ba9856bf811d56193ff->enter($__internal_067012a6f6b50490a3878b460dc129c5dfbf6eadcf012ba9856bf811d56193ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_067012a6f6b50490a3878b460dc129c5dfbf6eadcf012ba9856bf811d56193ff->leave($__internal_067012a6f6b50490a3878b460dc129c5dfbf6eadcf012ba9856bf811d56193ff_prof);

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
