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
        $__internal_9307f4cbe93a967367bd0a910498570b5e6d5c79b10105658e1d348944b0ddb6 = $this->env->getExtension("native_profiler");
        $__internal_9307f4cbe93a967367bd0a910498570b5e6d5c79b10105658e1d348944b0ddb6->enter($__internal_9307f4cbe93a967367bd0a910498570b5e6d5c79b10105658e1d348944b0ddb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9307f4cbe93a967367bd0a910498570b5e6d5c79b10105658e1d348944b0ddb6->leave($__internal_9307f4cbe93a967367bd0a910498570b5e6d5c79b10105658e1d348944b0ddb6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0695a80dd7e72dd4dae8c5e8acb5f7d955b2b0fe4b4270ac4b97cc59099f2475 = $this->env->getExtension("native_profiler");
        $__internal_0695a80dd7e72dd4dae8c5e8acb5f7d955b2b0fe4b4270ac4b97cc59099f2475->enter($__internal_0695a80dd7e72dd4dae8c5e8acb5f7d955b2b0fe4b4270ac4b97cc59099f2475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0695a80dd7e72dd4dae8c5e8acb5f7d955b2b0fe4b4270ac4b97cc59099f2475->leave($__internal_0695a80dd7e72dd4dae8c5e8acb5f7d955b2b0fe4b4270ac4b97cc59099f2475_prof);

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
