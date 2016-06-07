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
        $__internal_84fbe2633a853eea9c767220387e316eb9b9125afadd5580343ec8f9e78d9dad = $this->env->getExtension("native_profiler");
        $__internal_84fbe2633a853eea9c767220387e316eb9b9125afadd5580343ec8f9e78d9dad->enter($__internal_84fbe2633a853eea9c767220387e316eb9b9125afadd5580343ec8f9e78d9dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_84fbe2633a853eea9c767220387e316eb9b9125afadd5580343ec8f9e78d9dad->leave($__internal_84fbe2633a853eea9c767220387e316eb9b9125afadd5580343ec8f9e78d9dad_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_400c9ca4cc5cc4ff34602281304869d8dc9cb46b4362edfb46ef04bd8af3d86b = $this->env->getExtension("native_profiler");
        $__internal_400c9ca4cc5cc4ff34602281304869d8dc9cb46b4362edfb46ef04bd8af3d86b->enter($__internal_400c9ca4cc5cc4ff34602281304869d8dc9cb46b4362edfb46ef04bd8af3d86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_400c9ca4cc5cc4ff34602281304869d8dc9cb46b4362edfb46ef04bd8af3d86b->leave($__internal_400c9ca4cc5cc4ff34602281304869d8dc9cb46b4362edfb46ef04bd8af3d86b_prof);

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
