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
        $__internal_44820a6d72ddcbf456b21be5eeb13e9003d73dc783715b9a3708e51d5c5105e3 = $this->env->getExtension("native_profiler");
        $__internal_44820a6d72ddcbf456b21be5eeb13e9003d73dc783715b9a3708e51d5c5105e3->enter($__internal_44820a6d72ddcbf456b21be5eeb13e9003d73dc783715b9a3708e51d5c5105e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_44820a6d72ddcbf456b21be5eeb13e9003d73dc783715b9a3708e51d5c5105e3->leave($__internal_44820a6d72ddcbf456b21be5eeb13e9003d73dc783715b9a3708e51d5c5105e3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_996479f9df07c04ea7fb1b0345628cce912d6afebcea7f496466ee68e9465806 = $this->env->getExtension("native_profiler");
        $__internal_996479f9df07c04ea7fb1b0345628cce912d6afebcea7f496466ee68e9465806->enter($__internal_996479f9df07c04ea7fb1b0345628cce912d6afebcea7f496466ee68e9465806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_996479f9df07c04ea7fb1b0345628cce912d6afebcea7f496466ee68e9465806->leave($__internal_996479f9df07c04ea7fb1b0345628cce912d6afebcea7f496466ee68e9465806_prof);

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
