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
        $__internal_ddbe524a592d9f912eb68b893f4a4bb19fb84c0cdf0dd02460de79bc7fb32fa8 = $this->env->getExtension("native_profiler");
        $__internal_ddbe524a592d9f912eb68b893f4a4bb19fb84c0cdf0dd02460de79bc7fb32fa8->enter($__internal_ddbe524a592d9f912eb68b893f4a4bb19fb84c0cdf0dd02460de79bc7fb32fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ddbe524a592d9f912eb68b893f4a4bb19fb84c0cdf0dd02460de79bc7fb32fa8->leave($__internal_ddbe524a592d9f912eb68b893f4a4bb19fb84c0cdf0dd02460de79bc7fb32fa8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce42c961fa07f38f2371e8454b08ef0ae24c28c1e1244319746a59e496a4c833 = $this->env->getExtension("native_profiler");
        $__internal_ce42c961fa07f38f2371e8454b08ef0ae24c28c1e1244319746a59e496a4c833->enter($__internal_ce42c961fa07f38f2371e8454b08ef0ae24c28c1e1244319746a59e496a4c833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ce42c961fa07f38f2371e8454b08ef0ae24c28c1e1244319746a59e496a4c833->leave($__internal_ce42c961fa07f38f2371e8454b08ef0ae24c28c1e1244319746a59e496a4c833_prof);

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
