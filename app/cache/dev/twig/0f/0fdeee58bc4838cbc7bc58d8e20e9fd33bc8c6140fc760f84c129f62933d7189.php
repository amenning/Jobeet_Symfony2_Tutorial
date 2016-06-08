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
        $__internal_c54235b85bc592625635212871fe6a1b5d54551034574176f287408859d1f767 = $this->env->getExtension("native_profiler");
        $__internal_c54235b85bc592625635212871fe6a1b5d54551034574176f287408859d1f767->enter($__internal_c54235b85bc592625635212871fe6a1b5d54551034574176f287408859d1f767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c54235b85bc592625635212871fe6a1b5d54551034574176f287408859d1f767->leave($__internal_c54235b85bc592625635212871fe6a1b5d54551034574176f287408859d1f767_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f427eea85e493f26d9fd4e0d7bd0c08430d0dacd8bfdbd990fdeca4318c5d8e8 = $this->env->getExtension("native_profiler");
        $__internal_f427eea85e493f26d9fd4e0d7bd0c08430d0dacd8bfdbd990fdeca4318c5d8e8->enter($__internal_f427eea85e493f26d9fd4e0d7bd0c08430d0dacd8bfdbd990fdeca4318c5d8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f427eea85e493f26d9fd4e0d7bd0c08430d0dacd8bfdbd990fdeca4318c5d8e8->leave($__internal_f427eea85e493f26d9fd4e0d7bd0c08430d0dacd8bfdbd990fdeca4318c5d8e8_prof);

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
