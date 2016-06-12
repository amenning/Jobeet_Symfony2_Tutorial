<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_1f3367bdad487af63122faa8ab82765ef897ebc3f49d08d80673105223fb64c6 extends Twig_Template
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
        $__internal_643993aee5bb650fffe7b320ff5fb264cad917d4c5c1ab33e8a2e1d5c2d3407a = $this->env->getExtension("native_profiler");
        $__internal_643993aee5bb650fffe7b320ff5fb264cad917d4c5c1ab33e8a2e1d5c2d3407a->enter($__internal_643993aee5bb650fffe7b320ff5fb264cad917d4c5c1ab33e8a2e1d5c2d3407a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_643993aee5bb650fffe7b320ff5fb264cad917d4c5c1ab33e8a2e1d5c2d3407a->leave($__internal_643993aee5bb650fffe7b320ff5fb264cad917d4c5c1ab33e8a2e1d5c2d3407a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a2357e1d387677fb62229490584d1df2e3504dca8b81e7cee5966e08499d635 = $this->env->getExtension("native_profiler");
        $__internal_6a2357e1d387677fb62229490584d1df2e3504dca8b81e7cee5966e08499d635->enter($__internal_6a2357e1d387677fb62229490584d1df2e3504dca8b81e7cee5966e08499d635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6a2357e1d387677fb62229490584d1df2e3504dca8b81e7cee5966e08499d635->leave($__internal_6a2357e1d387677fb62229490584d1df2e3504dca8b81e7cee5966e08499d635_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
