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
        $__internal_9b03de61adaae95e982384c636e6f3c8b27a00cbf68ea14bcf03072053ee00a0 = $this->env->getExtension("native_profiler");
        $__internal_9b03de61adaae95e982384c636e6f3c8b27a00cbf68ea14bcf03072053ee00a0->enter($__internal_9b03de61adaae95e982384c636e6f3c8b27a00cbf68ea14bcf03072053ee00a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9b03de61adaae95e982384c636e6f3c8b27a00cbf68ea14bcf03072053ee00a0->leave($__internal_9b03de61adaae95e982384c636e6f3c8b27a00cbf68ea14bcf03072053ee00a0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_df06d175b1bae4b715f0a37e2a2edb3d391738cff8f9fe5c033c1eebdc8b8faa = $this->env->getExtension("native_profiler");
        $__internal_df06d175b1bae4b715f0a37e2a2edb3d391738cff8f9fe5c033c1eebdc8b8faa->enter($__internal_df06d175b1bae4b715f0a37e2a2edb3d391738cff8f9fe5c033c1eebdc8b8faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_df06d175b1bae4b715f0a37e2a2edb3d391738cff8f9fe5c033c1eebdc8b8faa->leave($__internal_df06d175b1bae4b715f0a37e2a2edb3d391738cff8f9fe5c033c1eebdc8b8faa_prof);

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
