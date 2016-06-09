<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c11b63bf37fcbb774887de6cbba6acfd7999b691560506f3f6e22981ea672222 extends Twig_Template
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
        $__internal_a20cb7ac42399706fd009bfe841b1fc1426b777e242bdbf7e3c264f1e040b20f = $this->env->getExtension("native_profiler");
        $__internal_a20cb7ac42399706fd009bfe841b1fc1426b777e242bdbf7e3c264f1e040b20f->enter($__internal_a20cb7ac42399706fd009bfe841b1fc1426b777e242bdbf7e3c264f1e040b20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a20cb7ac42399706fd009bfe841b1fc1426b777e242bdbf7e3c264f1e040b20f->leave($__internal_a20cb7ac42399706fd009bfe841b1fc1426b777e242bdbf7e3c264f1e040b20f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_39ad2462f14276793ebbf428e369dc9a4a95325c7170c35e50f86d531aa7a038 = $this->env->getExtension("native_profiler");
        $__internal_39ad2462f14276793ebbf428e369dc9a4a95325c7170c35e50f86d531aa7a038->enter($__internal_39ad2462f14276793ebbf428e369dc9a4a95325c7170c35e50f86d531aa7a038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_39ad2462f14276793ebbf428e369dc9a4a95325c7170c35e50f86d531aa7a038->leave($__internal_39ad2462f14276793ebbf428e369dc9a4a95325c7170c35e50f86d531aa7a038_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
