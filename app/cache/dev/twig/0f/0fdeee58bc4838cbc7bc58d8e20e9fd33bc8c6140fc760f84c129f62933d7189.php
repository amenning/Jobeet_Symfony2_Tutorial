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
        $__internal_6756f52ad8678361c8a0f1fe869837cd567a17b7fbcbc8700ee37a20590a93e8 = $this->env->getExtension("native_profiler");
        $__internal_6756f52ad8678361c8a0f1fe869837cd567a17b7fbcbc8700ee37a20590a93e8->enter($__internal_6756f52ad8678361c8a0f1fe869837cd567a17b7fbcbc8700ee37a20590a93e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6756f52ad8678361c8a0f1fe869837cd567a17b7fbcbc8700ee37a20590a93e8->leave($__internal_6756f52ad8678361c8a0f1fe869837cd567a17b7fbcbc8700ee37a20590a93e8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_59b915174bf98d12beabbc82347b30d195463b03af6a64f1480513b74fa9c71f = $this->env->getExtension("native_profiler");
        $__internal_59b915174bf98d12beabbc82347b30d195463b03af6a64f1480513b74fa9c71f->enter($__internal_59b915174bf98d12beabbc82347b30d195463b03af6a64f1480513b74fa9c71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_59b915174bf98d12beabbc82347b30d195463b03af6a64f1480513b74fa9c71f->leave($__internal_59b915174bf98d12beabbc82347b30d195463b03af6a64f1480513b74fa9c71f_prof);

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
