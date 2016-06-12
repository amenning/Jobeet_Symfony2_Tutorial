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
        $__internal_4add3ea9be2fc1da42d7819fd4365df869177fc60133b8dac3ac5cbdfe13f933 = $this->env->getExtension("native_profiler");
        $__internal_4add3ea9be2fc1da42d7819fd4365df869177fc60133b8dac3ac5cbdfe13f933->enter($__internal_4add3ea9be2fc1da42d7819fd4365df869177fc60133b8dac3ac5cbdfe13f933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4add3ea9be2fc1da42d7819fd4365df869177fc60133b8dac3ac5cbdfe13f933->leave($__internal_4add3ea9be2fc1da42d7819fd4365df869177fc60133b8dac3ac5cbdfe13f933_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_80967560dbc91bda91922e6bf52d45f7d84c55186aa9b6b1cf2b37bc81cfab92 = $this->env->getExtension("native_profiler");
        $__internal_80967560dbc91bda91922e6bf52d45f7d84c55186aa9b6b1cf2b37bc81cfab92->enter($__internal_80967560dbc91bda91922e6bf52d45f7d84c55186aa9b6b1cf2b37bc81cfab92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_80967560dbc91bda91922e6bf52d45f7d84c55186aa9b6b1cf2b37bc81cfab92->leave($__internal_80967560dbc91bda91922e6bf52d45f7d84c55186aa9b6b1cf2b37bc81cfab92_prof);

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
