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
        $__internal_a6e6645a5666da7a78cb496826155f9d0a108fc4fbbb46207445b7d6887426a8 = $this->env->getExtension("native_profiler");
        $__internal_a6e6645a5666da7a78cb496826155f9d0a108fc4fbbb46207445b7d6887426a8->enter($__internal_a6e6645a5666da7a78cb496826155f9d0a108fc4fbbb46207445b7d6887426a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a6e6645a5666da7a78cb496826155f9d0a108fc4fbbb46207445b7d6887426a8->leave($__internal_a6e6645a5666da7a78cb496826155f9d0a108fc4fbbb46207445b7d6887426a8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cdbfff960a9f5948f9c8cdd0f8a2487932ffb45e7692a44670a12e5188768832 = $this->env->getExtension("native_profiler");
        $__internal_cdbfff960a9f5948f9c8cdd0f8a2487932ffb45e7692a44670a12e5188768832->enter($__internal_cdbfff960a9f5948f9c8cdd0f8a2487932ffb45e7692a44670a12e5188768832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cdbfff960a9f5948f9c8cdd0f8a2487932ffb45e7692a44670a12e5188768832->leave($__internal_cdbfff960a9f5948f9c8cdd0f8a2487932ffb45e7692a44670a12e5188768832_prof);

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
