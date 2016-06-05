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
        $__internal_b4948d4e2d9bf12c9cd9fc07c5320bd56252e49aeef70b855fd23590a7ca84fc = $this->env->getExtension("native_profiler");
        $__internal_b4948d4e2d9bf12c9cd9fc07c5320bd56252e49aeef70b855fd23590a7ca84fc->enter($__internal_b4948d4e2d9bf12c9cd9fc07c5320bd56252e49aeef70b855fd23590a7ca84fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b4948d4e2d9bf12c9cd9fc07c5320bd56252e49aeef70b855fd23590a7ca84fc->leave($__internal_b4948d4e2d9bf12c9cd9fc07c5320bd56252e49aeef70b855fd23590a7ca84fc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5de8f451708af64997b627a9db36c2516240cdb0648bd545a7f92924c36edd0 = $this->env->getExtension("native_profiler");
        $__internal_f5de8f451708af64997b627a9db36c2516240cdb0648bd545a7f92924c36edd0->enter($__internal_f5de8f451708af64997b627a9db36c2516240cdb0648bd545a7f92924c36edd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f5de8f451708af64997b627a9db36c2516240cdb0648bd545a7f92924c36edd0->leave($__internal_f5de8f451708af64997b627a9db36c2516240cdb0648bd545a7f92924c36edd0_prof);

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
