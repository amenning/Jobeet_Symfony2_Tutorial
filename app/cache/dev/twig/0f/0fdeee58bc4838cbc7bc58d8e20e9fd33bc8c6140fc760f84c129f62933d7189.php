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
        $__internal_77f805072a54bc2d1b521f15e40384babc39d54977b7114e81a413312ba3c549 = $this->env->getExtension("native_profiler");
        $__internal_77f805072a54bc2d1b521f15e40384babc39d54977b7114e81a413312ba3c549->enter($__internal_77f805072a54bc2d1b521f15e40384babc39d54977b7114e81a413312ba3c549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_77f805072a54bc2d1b521f15e40384babc39d54977b7114e81a413312ba3c549->leave($__internal_77f805072a54bc2d1b521f15e40384babc39d54977b7114e81a413312ba3c549_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4558b80e29264b56661ffc773e28d28869f1c87b6f1591ef48bb0264a4ef8e1 = $this->env->getExtension("native_profiler");
        $__internal_e4558b80e29264b56661ffc773e28d28869f1c87b6f1591ef48bb0264a4ef8e1->enter($__internal_e4558b80e29264b56661ffc773e28d28869f1c87b6f1591ef48bb0264a4ef8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e4558b80e29264b56661ffc773e28d28869f1c87b6f1591ef48bb0264a4ef8e1->leave($__internal_e4558b80e29264b56661ffc773e28d28869f1c87b6f1591ef48bb0264a4ef8e1_prof);

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
