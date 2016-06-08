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
        $__internal_e42fa12e426439a7eeb6bd1342843cfa1a19e4444831732d50d25fef5d28fce6 = $this->env->getExtension("native_profiler");
        $__internal_e42fa12e426439a7eeb6bd1342843cfa1a19e4444831732d50d25fef5d28fce6->enter($__internal_e42fa12e426439a7eeb6bd1342843cfa1a19e4444831732d50d25fef5d28fce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e42fa12e426439a7eeb6bd1342843cfa1a19e4444831732d50d25fef5d28fce6->leave($__internal_e42fa12e426439a7eeb6bd1342843cfa1a19e4444831732d50d25fef5d28fce6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_48eeb86a560a4d296f502bfa0f3769c5e2174d192d565d37069967c5c59ef326 = $this->env->getExtension("native_profiler");
        $__internal_48eeb86a560a4d296f502bfa0f3769c5e2174d192d565d37069967c5c59ef326->enter($__internal_48eeb86a560a4d296f502bfa0f3769c5e2174d192d565d37069967c5c59ef326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_48eeb86a560a4d296f502bfa0f3769c5e2174d192d565d37069967c5c59ef326->leave($__internal_48eeb86a560a4d296f502bfa0f3769c5e2174d192d565d37069967c5c59ef326_prof);

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
