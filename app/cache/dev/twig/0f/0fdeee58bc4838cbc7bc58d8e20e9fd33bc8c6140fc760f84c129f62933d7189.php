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
        $__internal_9a90d51de948e962a92f0a536286260b86a47cc9a6f6537593d640a1a3ef35b1 = $this->env->getExtension("native_profiler");
        $__internal_9a90d51de948e962a92f0a536286260b86a47cc9a6f6537593d640a1a3ef35b1->enter($__internal_9a90d51de948e962a92f0a536286260b86a47cc9a6f6537593d640a1a3ef35b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9a90d51de948e962a92f0a536286260b86a47cc9a6f6537593d640a1a3ef35b1->leave($__internal_9a90d51de948e962a92f0a536286260b86a47cc9a6f6537593d640a1a3ef35b1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4e3aa14da20f06cbc274a72ec8f52dd70a9cca65a3251871cb414b606b505c3 = $this->env->getExtension("native_profiler");
        $__internal_e4e3aa14da20f06cbc274a72ec8f52dd70a9cca65a3251871cb414b606b505c3->enter($__internal_e4e3aa14da20f06cbc274a72ec8f52dd70a9cca65a3251871cb414b606b505c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e4e3aa14da20f06cbc274a72ec8f52dd70a9cca65a3251871cb414b606b505c3->leave($__internal_e4e3aa14da20f06cbc274a72ec8f52dd70a9cca65a3251871cb414b606b505c3_prof);

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
