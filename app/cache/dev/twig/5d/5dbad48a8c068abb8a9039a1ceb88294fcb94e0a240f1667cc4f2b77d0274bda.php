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
        $__internal_4709125f8e24c91f8b27d947abcc3761d203438cc56c2b8d293fe71f732d5618 = $this->env->getExtension("native_profiler");
        $__internal_4709125f8e24c91f8b27d947abcc3761d203438cc56c2b8d293fe71f732d5618->enter($__internal_4709125f8e24c91f8b27d947abcc3761d203438cc56c2b8d293fe71f732d5618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4709125f8e24c91f8b27d947abcc3761d203438cc56c2b8d293fe71f732d5618->leave($__internal_4709125f8e24c91f8b27d947abcc3761d203438cc56c2b8d293fe71f732d5618_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_714df050457d0c588f1624ab45ede59e328a273f15485a819193c31fd57d8a22 = $this->env->getExtension("native_profiler");
        $__internal_714df050457d0c588f1624ab45ede59e328a273f15485a819193c31fd57d8a22->enter($__internal_714df050457d0c588f1624ab45ede59e328a273f15485a819193c31fd57d8a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_714df050457d0c588f1624ab45ede59e328a273f15485a819193c31fd57d8a22->leave($__internal_714df050457d0c588f1624ab45ede59e328a273f15485a819193c31fd57d8a22_prof);

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
