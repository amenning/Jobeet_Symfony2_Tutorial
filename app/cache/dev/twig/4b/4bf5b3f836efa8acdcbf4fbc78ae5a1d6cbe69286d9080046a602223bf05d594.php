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
        $__internal_868942d434980288d01bac5923fb3803803429dc936460a45b7f5c80449ffd8c = $this->env->getExtension("native_profiler");
        $__internal_868942d434980288d01bac5923fb3803803429dc936460a45b7f5c80449ffd8c->enter($__internal_868942d434980288d01bac5923fb3803803429dc936460a45b7f5c80449ffd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_868942d434980288d01bac5923fb3803803429dc936460a45b7f5c80449ffd8c->leave($__internal_868942d434980288d01bac5923fb3803803429dc936460a45b7f5c80449ffd8c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5d83ae5085fdc1e8b7fd6d133cb0dd27f03ff11c38db8e2a7cf554b0368859e = $this->env->getExtension("native_profiler");
        $__internal_d5d83ae5085fdc1e8b7fd6d133cb0dd27f03ff11c38db8e2a7cf554b0368859e->enter($__internal_d5d83ae5085fdc1e8b7fd6d133cb0dd27f03ff11c38db8e2a7cf554b0368859e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d5d83ae5085fdc1e8b7fd6d133cb0dd27f03ff11c38db8e2a7cf554b0368859e->leave($__internal_d5d83ae5085fdc1e8b7fd6d133cb0dd27f03ff11c38db8e2a7cf554b0368859e_prof);

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
