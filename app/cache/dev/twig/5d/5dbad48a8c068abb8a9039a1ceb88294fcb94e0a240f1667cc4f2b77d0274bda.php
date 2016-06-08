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
        $__internal_7d50123727a81eab1be34baf10a2c91a34a3258902fd21ab1c8834931707603f = $this->env->getExtension("native_profiler");
        $__internal_7d50123727a81eab1be34baf10a2c91a34a3258902fd21ab1c8834931707603f->enter($__internal_7d50123727a81eab1be34baf10a2c91a34a3258902fd21ab1c8834931707603f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7d50123727a81eab1be34baf10a2c91a34a3258902fd21ab1c8834931707603f->leave($__internal_7d50123727a81eab1be34baf10a2c91a34a3258902fd21ab1c8834931707603f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0dfaf74a9e8b8dad9f7220e5eece83a0b66134fd174d82db00f6150a63aa1aa = $this->env->getExtension("native_profiler");
        $__internal_e0dfaf74a9e8b8dad9f7220e5eece83a0b66134fd174d82db00f6150a63aa1aa->enter($__internal_e0dfaf74a9e8b8dad9f7220e5eece83a0b66134fd174d82db00f6150a63aa1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e0dfaf74a9e8b8dad9f7220e5eece83a0b66134fd174d82db00f6150a63aa1aa->leave($__internal_e0dfaf74a9e8b8dad9f7220e5eece83a0b66134fd174d82db00f6150a63aa1aa_prof);

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
