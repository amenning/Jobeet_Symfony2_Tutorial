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
        $__internal_91b347ec9feb3c57cb0e3f1d98e8afb21fc8f659f9f921bb510e49fb2d531e32 = $this->env->getExtension("native_profiler");
        $__internal_91b347ec9feb3c57cb0e3f1d98e8afb21fc8f659f9f921bb510e49fb2d531e32->enter($__internal_91b347ec9feb3c57cb0e3f1d98e8afb21fc8f659f9f921bb510e49fb2d531e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_91b347ec9feb3c57cb0e3f1d98e8afb21fc8f659f9f921bb510e49fb2d531e32->leave($__internal_91b347ec9feb3c57cb0e3f1d98e8afb21fc8f659f9f921bb510e49fb2d531e32_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c762c8e65e7f4c2c8555e63f145926d1a3c318d408caeedc6f25c5e73e5f401c = $this->env->getExtension("native_profiler");
        $__internal_c762c8e65e7f4c2c8555e63f145926d1a3c318d408caeedc6f25c5e73e5f401c->enter($__internal_c762c8e65e7f4c2c8555e63f145926d1a3c318d408caeedc6f25c5e73e5f401c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c762c8e65e7f4c2c8555e63f145926d1a3c318d408caeedc6f25c5e73e5f401c->leave($__internal_c762c8e65e7f4c2c8555e63f145926d1a3c318d408caeedc6f25c5e73e5f401c_prof);

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
