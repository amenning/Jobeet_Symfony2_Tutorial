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
        $__internal_ff1f05713d3a74108f47255759e739009e280203f28de1c6fc18cc090e7d3fae = $this->env->getExtension("native_profiler");
        $__internal_ff1f05713d3a74108f47255759e739009e280203f28de1c6fc18cc090e7d3fae->enter($__internal_ff1f05713d3a74108f47255759e739009e280203f28de1c6fc18cc090e7d3fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ff1f05713d3a74108f47255759e739009e280203f28de1c6fc18cc090e7d3fae->leave($__internal_ff1f05713d3a74108f47255759e739009e280203f28de1c6fc18cc090e7d3fae_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_045651263f885ea7b6d8f623b9f4895f48574ca3e9dc0298c079573792378d17 = $this->env->getExtension("native_profiler");
        $__internal_045651263f885ea7b6d8f623b9f4895f48574ca3e9dc0298c079573792378d17->enter($__internal_045651263f885ea7b6d8f623b9f4895f48574ca3e9dc0298c079573792378d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_045651263f885ea7b6d8f623b9f4895f48574ca3e9dc0298c079573792378d17->leave($__internal_045651263f885ea7b6d8f623b9f4895f48574ca3e9dc0298c079573792378d17_prof);

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
