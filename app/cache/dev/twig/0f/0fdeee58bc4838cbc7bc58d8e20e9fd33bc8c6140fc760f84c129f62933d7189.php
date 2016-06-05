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
        $__internal_f8734f2db761447f9f9cdcf4939614ce632d081cfa2d57fc1e60faf2aa5079c7 = $this->env->getExtension("native_profiler");
        $__internal_f8734f2db761447f9f9cdcf4939614ce632d081cfa2d57fc1e60faf2aa5079c7->enter($__internal_f8734f2db761447f9f9cdcf4939614ce632d081cfa2d57fc1e60faf2aa5079c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f8734f2db761447f9f9cdcf4939614ce632d081cfa2d57fc1e60faf2aa5079c7->leave($__internal_f8734f2db761447f9f9cdcf4939614ce632d081cfa2d57fc1e60faf2aa5079c7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_59de66c3303ea91b5cf0225ee471f4e0409afcb5cc441fd80a84dcf2b7bbd99e = $this->env->getExtension("native_profiler");
        $__internal_59de66c3303ea91b5cf0225ee471f4e0409afcb5cc441fd80a84dcf2b7bbd99e->enter($__internal_59de66c3303ea91b5cf0225ee471f4e0409afcb5cc441fd80a84dcf2b7bbd99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_59de66c3303ea91b5cf0225ee471f4e0409afcb5cc441fd80a84dcf2b7bbd99e->leave($__internal_59de66c3303ea91b5cf0225ee471f4e0409afcb5cc441fd80a84dcf2b7bbd99e_prof);

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
