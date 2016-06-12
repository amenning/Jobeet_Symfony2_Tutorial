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
        $__internal_ad61cad525f9aa5036715e84da1f746e19c67f90871103a94265acfa07985f7a = $this->env->getExtension("native_profiler");
        $__internal_ad61cad525f9aa5036715e84da1f746e19c67f90871103a94265acfa07985f7a->enter($__internal_ad61cad525f9aa5036715e84da1f746e19c67f90871103a94265acfa07985f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ad61cad525f9aa5036715e84da1f746e19c67f90871103a94265acfa07985f7a->leave($__internal_ad61cad525f9aa5036715e84da1f746e19c67f90871103a94265acfa07985f7a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fca9f40b05fdd66e84eb8fd02cf3668f2dca519e610bdece246fd10dbf434c7f = $this->env->getExtension("native_profiler");
        $__internal_fca9f40b05fdd66e84eb8fd02cf3668f2dca519e610bdece246fd10dbf434c7f->enter($__internal_fca9f40b05fdd66e84eb8fd02cf3668f2dca519e610bdece246fd10dbf434c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fca9f40b05fdd66e84eb8fd02cf3668f2dca519e610bdece246fd10dbf434c7f->leave($__internal_fca9f40b05fdd66e84eb8fd02cf3668f2dca519e610bdece246fd10dbf434c7f_prof);

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
