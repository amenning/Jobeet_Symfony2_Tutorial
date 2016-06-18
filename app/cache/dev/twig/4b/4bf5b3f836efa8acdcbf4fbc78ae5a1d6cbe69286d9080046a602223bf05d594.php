<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_67b6924862c0c0e01f44fee66a71db0af5f29e9c3f3846d4d72e9f9358ef57f9 extends Twig_Template
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
        $__internal_a26abbb2bb015cb36005f5fcfa614bef8f4cff53991a1ef90d1c02c1c992a99a = $this->env->getExtension("native_profiler");
        $__internal_a26abbb2bb015cb36005f5fcfa614bef8f4cff53991a1ef90d1c02c1c992a99a->enter($__internal_a26abbb2bb015cb36005f5fcfa614bef8f4cff53991a1ef90d1c02c1c992a99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a26abbb2bb015cb36005f5fcfa614bef8f4cff53991a1ef90d1c02c1c992a99a->leave($__internal_a26abbb2bb015cb36005f5fcfa614bef8f4cff53991a1ef90d1c02c1c992a99a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0169281a5cf08a048c4d7f765a75edc03f01d689e125b2e49e28818ef2416566 = $this->env->getExtension("native_profiler");
        $__internal_0169281a5cf08a048c4d7f765a75edc03f01d689e125b2e49e28818ef2416566->enter($__internal_0169281a5cf08a048c4d7f765a75edc03f01d689e125b2e49e28818ef2416566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0169281a5cf08a048c4d7f765a75edc03f01d689e125b2e49e28818ef2416566->leave($__internal_0169281a5cf08a048c4d7f765a75edc03f01d689e125b2e49e28818ef2416566_prof);

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
