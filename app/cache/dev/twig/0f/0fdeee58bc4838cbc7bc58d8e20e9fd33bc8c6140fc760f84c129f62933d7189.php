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
        $__internal_46b5bc444b3f5ef8af62e9ee5f6837e85dbce34f1a56ca42b8ace332aa2bc876 = $this->env->getExtension("native_profiler");
        $__internal_46b5bc444b3f5ef8af62e9ee5f6837e85dbce34f1a56ca42b8ace332aa2bc876->enter($__internal_46b5bc444b3f5ef8af62e9ee5f6837e85dbce34f1a56ca42b8ace332aa2bc876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_46b5bc444b3f5ef8af62e9ee5f6837e85dbce34f1a56ca42b8ace332aa2bc876->leave($__internal_46b5bc444b3f5ef8af62e9ee5f6837e85dbce34f1a56ca42b8ace332aa2bc876_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_39a83e1f22bcb76092d3033a7e3b551fe2105f311367f43c8e60278a504ef26d = $this->env->getExtension("native_profiler");
        $__internal_39a83e1f22bcb76092d3033a7e3b551fe2105f311367f43c8e60278a504ef26d->enter($__internal_39a83e1f22bcb76092d3033a7e3b551fe2105f311367f43c8e60278a504ef26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_39a83e1f22bcb76092d3033a7e3b551fe2105f311367f43c8e60278a504ef26d->leave($__internal_39a83e1f22bcb76092d3033a7e3b551fe2105f311367f43c8e60278a504ef26d_prof);

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
