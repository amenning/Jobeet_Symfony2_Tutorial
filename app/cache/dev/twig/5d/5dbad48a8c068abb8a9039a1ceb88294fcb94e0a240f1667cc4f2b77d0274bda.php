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
        $__internal_5102ba6e38e9a576b464341db80f921f612e48cc651e3f09baa0986d2ed75d2e = $this->env->getExtension("native_profiler");
        $__internal_5102ba6e38e9a576b464341db80f921f612e48cc651e3f09baa0986d2ed75d2e->enter($__internal_5102ba6e38e9a576b464341db80f921f612e48cc651e3f09baa0986d2ed75d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5102ba6e38e9a576b464341db80f921f612e48cc651e3f09baa0986d2ed75d2e->leave($__internal_5102ba6e38e9a576b464341db80f921f612e48cc651e3f09baa0986d2ed75d2e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a679cf2d03a9f4ce6fac1beb50722f3f5dba906f9b26aa979f9a84b8e430e1c2 = $this->env->getExtension("native_profiler");
        $__internal_a679cf2d03a9f4ce6fac1beb50722f3f5dba906f9b26aa979f9a84b8e430e1c2->enter($__internal_a679cf2d03a9f4ce6fac1beb50722f3f5dba906f9b26aa979f9a84b8e430e1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a679cf2d03a9f4ce6fac1beb50722f3f5dba906f9b26aa979f9a84b8e430e1c2->leave($__internal_a679cf2d03a9f4ce6fac1beb50722f3f5dba906f9b26aa979f9a84b8e430e1c2_prof);

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
