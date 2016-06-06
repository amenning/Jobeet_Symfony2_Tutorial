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
        $__internal_9e0cde821591b34ed430c20bf153f94098c8c8a5e9d36305dc3c52b65c0241b3 = $this->env->getExtension("native_profiler");
        $__internal_9e0cde821591b34ed430c20bf153f94098c8c8a5e9d36305dc3c52b65c0241b3->enter($__internal_9e0cde821591b34ed430c20bf153f94098c8c8a5e9d36305dc3c52b65c0241b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9e0cde821591b34ed430c20bf153f94098c8c8a5e9d36305dc3c52b65c0241b3->leave($__internal_9e0cde821591b34ed430c20bf153f94098c8c8a5e9d36305dc3c52b65c0241b3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_da24866573a743f6ca7236aadbd8dbef7ed6219829367c2753eca5c296f2dee8 = $this->env->getExtension("native_profiler");
        $__internal_da24866573a743f6ca7236aadbd8dbef7ed6219829367c2753eca5c296f2dee8->enter($__internal_da24866573a743f6ca7236aadbd8dbef7ed6219829367c2753eca5c296f2dee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_da24866573a743f6ca7236aadbd8dbef7ed6219829367c2753eca5c296f2dee8->leave($__internal_da24866573a743f6ca7236aadbd8dbef7ed6219829367c2753eca5c296f2dee8_prof);

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
