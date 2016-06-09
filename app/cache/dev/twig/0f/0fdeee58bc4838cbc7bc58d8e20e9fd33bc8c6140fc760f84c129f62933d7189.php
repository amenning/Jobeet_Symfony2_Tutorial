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
        $__internal_eafcf373425a94b140e6917172796a9ba7f3f4931f837f932cdd6966ff2fdd31 = $this->env->getExtension("native_profiler");
        $__internal_eafcf373425a94b140e6917172796a9ba7f3f4931f837f932cdd6966ff2fdd31->enter($__internal_eafcf373425a94b140e6917172796a9ba7f3f4931f837f932cdd6966ff2fdd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_eafcf373425a94b140e6917172796a9ba7f3f4931f837f932cdd6966ff2fdd31->leave($__internal_eafcf373425a94b140e6917172796a9ba7f3f4931f837f932cdd6966ff2fdd31_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3295ab9aa9176ae2bf0d2bcde7e7d1b981e1dccc09922a23c89ef20a68c782f = $this->env->getExtension("native_profiler");
        $__internal_a3295ab9aa9176ae2bf0d2bcde7e7d1b981e1dccc09922a23c89ef20a68c782f->enter($__internal_a3295ab9aa9176ae2bf0d2bcde7e7d1b981e1dccc09922a23c89ef20a68c782f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a3295ab9aa9176ae2bf0d2bcde7e7d1b981e1dccc09922a23c89ef20a68c782f->leave($__internal_a3295ab9aa9176ae2bf0d2bcde7e7d1b981e1dccc09922a23c89ef20a68c782f_prof);

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
