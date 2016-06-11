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
        $__internal_76e0669d8ee607fc9d9a5c5f829da7bc11a1d1e0f98c1ecf35ac0ceec59d402a = $this->env->getExtension("native_profiler");
        $__internal_76e0669d8ee607fc9d9a5c5f829da7bc11a1d1e0f98c1ecf35ac0ceec59d402a->enter($__internal_76e0669d8ee607fc9d9a5c5f829da7bc11a1d1e0f98c1ecf35ac0ceec59d402a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_76e0669d8ee607fc9d9a5c5f829da7bc11a1d1e0f98c1ecf35ac0ceec59d402a->leave($__internal_76e0669d8ee607fc9d9a5c5f829da7bc11a1d1e0f98c1ecf35ac0ceec59d402a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dae0dd4491edf20f53008f9bf5e244d817b9d00d0611768d631d38d29611caf9 = $this->env->getExtension("native_profiler");
        $__internal_dae0dd4491edf20f53008f9bf5e244d817b9d00d0611768d631d38d29611caf9->enter($__internal_dae0dd4491edf20f53008f9bf5e244d817b9d00d0611768d631d38d29611caf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dae0dd4491edf20f53008f9bf5e244d817b9d00d0611768d631d38d29611caf9->leave($__internal_dae0dd4491edf20f53008f9bf5e244d817b9d00d0611768d631d38d29611caf9_prof);

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
